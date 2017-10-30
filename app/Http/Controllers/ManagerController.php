<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use DB;
use Hash;
use App\Http\Requests;
use Intervention\Image\Facades\Image;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = Manager::with('image')->get();

        return view('admin.manager.index', [
            'managers' => $managers
        ]);
    }

    public function create()
    {

        return view('admin.manager.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'phone' => 'required',
            'add_phone' => '',
            'image' => 'image'
        ]);


        $manager = new Manager();
        $manager->name = $request->name;
        $manager->position_ru = $request->position_ru;
        $manager->position_ua = $request->position_ua;
        $manager->email = $request->email;
        $manager->phone = $request->phone;
        $manager->add_phone = $request->add_phone;
        $manager->order_by = $request->order_by;
        if (isset($request->image)) {
            $image = FileController::uploadImg($request->image, public_path('files/images/managers/'));

            $manager->image_id = $image->id;
        }
        $manager->save();

        return redirect()->route('admin.managers.index')
            ->with('success', 'Manager created successfully');
    }

    public function edit(Request $request, $manager)
    {
        $manager = Manager::find($manager);

        return view('admin.manager.edit', [
            'manager' => $manager
        ]);
    }

    public function update(Request $request, $manager)
    {
        $manager = Manager::find($manager);
        $manager->name = $request->name;
        $manager->position_ru = $request->position_ru;
        $manager->position_ua = $request->position_ua;
        $manager->email = $request->email;
        $manager->phone = $request->phone;
        $manager->add_phone = $request->add_phone;
        $manager->order_by = $request->order_by;
        $manager->save();
        if (isset($request->image)) {
            $file = FileController::updateImg($request->image, $manager->image_id, public_path('files/images/managers/'));
            if ($file instanceof File) {
                $manager->image_id = $file->id;
            }
        }

        return redirect()->route('admin.managers.index')
            ->with('success', 'Manager updated successfully');
    }

    public function destroy(Request $request, $manager)
    {
        $manager = Manager::find($manager);

        $imageId = $manager->image_id;

        if ($manager->delete()) {

            $path = public_path('files/images/managers/');
            if ($imageId != null) {
                FileController::deleteImg($imageId, $path);
            }

            return redirect()->route('admin.managers.index')
                ->with('success', 'Manager deleted successfully');
        }else{
            return redirect()->route('admin.managers.index')
                ->with('error', 'Manager not deleted');
        }

    }
}

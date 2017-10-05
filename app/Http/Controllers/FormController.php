<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use App\Models\File;
use App\Models\Form;
use Illuminate\Http\Request;

use App\Http\Requests;

class FormController extends Controller
{
    public function create()
    {
        return view('layouts.partials.form');
    }

    public function store(FormRequest $request)
    {

        $form = Form::create($request->all());
        $id = $form->id;
        if ($request->hasFile('files')) {
            foreach ($request->file() as $file) {
                foreach ($file as $f) {
                    $name = md5($f) . '.' . $f->getClientOriginalExtension();
                    $f->move(public_path('files/form/' . $id . '/'), $name);
                    File::create([
                        'link' => $name,
                        'form_id' => $id
                    ]);
                }
            }
        }

        return back();
    }

    public function index(Request $request)
    {
        $forms = Form::with('files')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.form.index', compact('forms'));
    }

    public function destroy($id)
    {
        Form::find($id)->delete();

        return redirect()->route('admin.form.index')
            ->with('success', 'Form deleted successfully');
    }
}

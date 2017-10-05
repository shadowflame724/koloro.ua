<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use DB;
use Hash;
use App\Http\Requests;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::with('file')->orderBy('id','DESC')->paginate(10);
        return view('admin.users.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::lists('display_name','id');
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
        ]);

        if($request->hasFile('image'))
        {
            //save image FILE to server
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('files/images/users/' . $filename);

            Image::make($image)->resize(null,500,function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            //save LINK to file_table
            $image_link = new File([
                'link' => $filename
            ]);
            $image_link->save();

            //save IMAGE_ID to user_table
            $image_id = $image_link->id;
            $request['image_id'] = $image_id;
        }/** todo fix 3 */

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect()->route('admin.users.index')
            ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::lists('display_name','id');
        $userRole = $user->roles->lists('id','id')->toArray();

        return view('admin.users.edit',compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required',
        ]);

        $user = User::find($id);

        if($request->hasFile('image'))
        {
            //save NEW image FILE to server
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('files/images/users/' . $filename);

            Image::make($image)->resize(null,500,function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $image_link = File::find($user->image_id);
            if($image_link===null) {
                //save LINK in file_table
                $image_link = new File([
                    'link' => $filename
                ]);
                $image_link->save();
            }
            else {
                //if image exist than update LINK in file_table
                $image_link->link = $filename;
                $image_link->save();
            }
            $image_id = $image_link->id;
            $request['image_id'] = $image_id;
        }/** todo fix 3 */

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,['password']);
        }

        $user->update($input);
        DB::table('role_user')->where('user_id',$id)->delete();


        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect()->route('admin.users.index')
            ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users.index')
            ->with('success','User deleted successfully');
    }
}

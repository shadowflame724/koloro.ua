<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallbackRequest;
use App\Models\Callback;
use Illuminate\Http\Request;

use App\Http\Requests;

class CallbackController extends Controller
{
    public function create()
    {
        return view('layouts.landing');
    }

    public function store(CallbackRequest $request)
    {
        Callback::create($request->all());
        return redirect()->back();
    }

    public function index(Request $request)
    {
        $callbacks = Callback::orderBy('id','DESC')->paginate(10);
        return view('admin.callback.index',compact('callbacks'));
    }

    public function destroy($id)
    {
        Callback::find($id)->delete();
        return redirect()->route('admin.callback.index')
            ->with('success','Callback deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubscriptionController extends Controller
{
    public function create()
    {
        return view('layouts.landing');
    }

    public function store(SubscriptionRequest $request)
    {
        Subscription::create($request->all());

        return redirect()->back();
    }

    public function index(Request $request)
    {
        $subscriptions = Subscription::orderBy('id','DESC')->paginate(10);

        return view('admin.subscription.index',compact('subscriptions'));
    }

    public function destroy($id)
    {
        Subscription::find($id)->delete();

        return redirect()->route('admin.subscription.index')
            ->with('success','Subscription deleted successfully');
    }
}

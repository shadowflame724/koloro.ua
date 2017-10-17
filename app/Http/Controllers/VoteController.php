<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;

use App\Http\Requests;

class VoteController extends Controller
{
    public function vote(Request $request, $type = null, $id)
    {
        if (\Session::has($request->path()))
            return 0;
        if ($request->ajax()) {
            if ($type == 'portfolio') {
                $res = Portfolio::find($id);
            } else {
                $res = Blog::find($id);
            }
            $res->rating += $request->rating;
            $res->votes = $res->votes + 1;
            $res->save();
            session([$request->path() => 'true']);
            return 1;
        }
    }
}

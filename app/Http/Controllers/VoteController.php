<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;

class VoteController extends Controller
{
    public function vote(Request $request, $id)
    {
        if (\Session::has($request->path()))
            return 0;
        if ($request->ajax()) {
            $article = Blog::find($id);
            $article->rating += $request->rating;
            $article->votes = $article->votes + 1;
            $article->save();
            session([$request->path() => 'true']);
            return 1;
        }
    }
}

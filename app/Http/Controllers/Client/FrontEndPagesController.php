<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 22.09.2017
 * Time: 15:06
 */

namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\User;
use Illuminate\Support\Facades\Input;

class FrontEndPagesController extends Controller
{
    public function index($serviceSlug = null)
    {
        if ($serviceSlug == null) {
            $serviceCategories = ServiceCategory::all();
            $portfolioWorks = Portfolio::where('on_main_page', '=', '1')->get();
            $page = Page::find(2);

            return view('client.index', [
                'serviceCategories' => $serviceCategories,
                'portfolioWorks' => $portfolioWorks,
                'page' => $page
            ]);
        } else {
            $service = Service::where('slug', $serviceSlug)->first();
            if ($service) {
                $blocks = $service->blocks;
                $similarServices = Service::where('category_id', '=', $service->category_id)
                    ->whereNotIn('id', [$service->id])
                    ->inRandomOrder()->take(4)->get();

                return view('client.service', compact('service', 'blocks', 'similarServices'));
            } else {

                return view('errors.404');
            }

        }
    }

    public function about()
    {
        $page = Page::find(5);

        return view('client.about', compact('page'));
    }

    public function author(User $user, $slug = null)
    {
        $blogCategories = BlogCategory::all();
        $page = Page::find(9);
        if($slug != null){
            $category = BlogCategory::where('slug', $slug)->first();
            $articles = Blog::where('user_id', $user->id)->where('category_id', '=', $category->id)->paginate(5);
        }else{
            $articles = Blog::where('user_id', $user->id)->paginate(5);
        }

        return view('client.author', compact('page', 'user', 'blogCategories', 'articles'));
    }
}
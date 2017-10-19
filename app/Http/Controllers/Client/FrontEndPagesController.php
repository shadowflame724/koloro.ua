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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class FrontEndPagesController extends Controller
{
    public function index($serviceSlug = null)
    {
        if ($serviceSlug == null OR $serviceSlug == 'ua') {
            $arr = DB::table('service')
                ->join('servicecategory', 'service.category_id', '=', 'servicecategory.id')
                ->select('service.name_ru', 'service.name_ua', 'service.description_ru', 'service.description_ua', 'service.slug', 'service.video', 'service.work_count', 'service.price',
                    'servicecategory.id as parentId',
                    'servicecategory.order as parentOrder',
                    'servicecategory.name_ru as parentName_ru', 'servicecategory.name_ua as parentName_ua'
                    )
                ->where('service.video', '!=', null)
                ->orderBy('parentOrder')
                ->get();

            $serviceCategories = [];

            foreach ($arr as $data) {
                $id = $data->parentId;
                $serviceCategories[$id]['parentName_ru'] = $data->parentName_ru;
                $serviceCategories[$id]['parentName_ua'] = $data->parentName_ua;
                $serviceCategories[$id]['services'][] = [
                    'name_ru' => $data->name_ru,
                    'name_ua' => $data->name_ua,
                    'description_ru' => $data->description_ru,
                    'description_ua' => $data->description_ua,
                    'price' => $data->price,
                    'slug' => $data->slug,
                    'video' => $data->video,
                    'work_count' => $data->work_count
                ];
            }
            $page = Page::find(2);


            return view('client.index', [
                'serviceCategories' => $serviceCategories,
                'page' => $page
            ]);
        } else {
            $service = Service::where('slug', $serviceSlug)->first();
            if ($service) {
                $blocks = $service->blocks;
                $similarServices = Service::where('category_id', '=', $service->category_id)
                    ->whereNotIn('id', [$service->id])
                    ->with('image')
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
            $categoryId = $category->id;
            $articles = Blog::where('user_id', $user->id)->where('category_id', '=', $category->id)->paginate(5);
        }else{
            $articles = Blog::where('user_id', $user->id)->paginate(5);
            $categoryId = null;
        }
        $allViews = $articles->sum('views');
        $allVotes =  $articles->sum('votes');
        $allRating =  $articles->sum('rating');

        return view('client.author', compact('page', 'user', 'blogCategories', 'articles', 'categoryId', 'allViews', 'allVotes', 'allRating'));
    }
}
<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioConnectCategory;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function portfolio(Request $request)
    {
        $categories = PortfolioCategory::orderBy('id', 'DESC')->get();
        $portfolios = Portfolio::orderBy('id', 'DESC')->get();
        $page = Page::find(3);

        return view('client.portfolio', compact('portfolios', 'categories', 'page'));
//            ->with('i', ($request->input('page', 1) - 1) * 5);/** todo fix 2 */
    }

    public function getPortfolioCategory($category)
    {
        $categories = PortfolioCategory::orderBy('id', 'DESC')->get();

        $category = PortfolioCategory::where('slug', $category)->first();
        $categoryId = $category->id;

        $portfolios = Portfolio::where('category_ids', 'LIKE', '%'.$categoryId.'%')->get();

        $page = Page::find(3);


        return view('client.portfolio', compact('portfolios', 'categories', 'page'));
//            ->with('i', ($request->input('page', 1) - 1) * 5);/** todo fix 2 */
    }

    public function getPortfolioPage($slug)
    {
        $viewName = str_replace('.html', '', $slug);
        $portfolio = Portfolio::where('slug', $slug)->first();

        $previous = DB::table('portfolio')->where('id', '<', $portfolio->id)->orderBy('id', 'DESC')->first();
        if($previous == null){
            $previous = DB::table('portfolio')->orderBy('id', 'DESC')->first();
        }

        $next = DB::table('portfolio')->where('id', '>', $portfolio->id)->orderBy('id', 'ASC')->first();
        if($next == null){
            $next = DB::table('portfolio')->orderBy('id', 'ASC')->first();
        }

        $prevSlug = $previous->slug;
        $nextSlug = $next->slug;

        //$blog = BlogCategory::where('slug', $slug)->firstOrFail();
        //$portfolio = Portfolio::where('work_url', $portfolio)->firstOrFail();
        //$category = PortfolioCategory::where('urlname', $category)->firstOrFail();
        //dd($portfolio, $category);

        return view('client.portfolio.' . $viewName, compact('category', 'portfolio', 'nextSlug', 'prevSlug'));
    }
}
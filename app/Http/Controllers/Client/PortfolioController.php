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
        $portfolios = DB::table('portfolio')
            ->join('file', 'portfolio.image_id', '=', 'file.id')
            ->select('portfolio.id', 'portfolio.slug', 'portfolio.title_ru', 'portfolio.title_ua', 'portfolio.short_desc_ru', 'portfolio.short_desc_ua', 'portfolio.bg_color',
                'file.link', 'file.alt')
            ->orderBy('order', 'DESC')
            ->get();
        $page = Page::find(3);
        $categoryId = null;

        return view('client.portfolio', compact('portfolios', 'categories', 'page', 'categoryId'));
    }

    public function getPortfolioCategory($category)
    {
        $categories = PortfolioCategory::orderBy('id', 'DESC')->get();

        $category = $categories->where('slug', $category)->first();
        $categoryId = $category->id;

        $portfolios = DB::table('portfolio')
            ->join('file', 'portfolio.image_id', '=', 'file.id')
            ->where('category_ids', 'LIKE', '%' . $categoryId . '%')
            ->select('portfolio.id', 'portfolio.slug', 'portfolio.title_ru', 'portfolio.title_ua', 'portfolio.short_desc_ru', 'portfolio.short_desc_ua', 'portfolio.bg_color',
                'file.link', 'file.alt')
            ->orderBy('order', 'DESC')
            ->get();
        $page = Page::find(3);


        return view('client.portfolio', compact('portfolios', 'categories', 'page', 'categoryId'));
    }

    public function getPortfolioPage($slug)
    {
        $viewName = str_replace('.html', '', $slug);
        $portfolio = Portfolio::where('slug', $slug)->first();
        if ($portfolio == null) {
            return view('errors.404');
        }

        $previous = DB::table('portfolio')->where('id', '<', $portfolio->id)->orderBy('id', 'DESC')->first();
        if ($previous == null) {
            $previous = DB::table('portfolio')->orderBy('id', 'DESC')->first();
        }

        $next = DB::table('portfolio')->where('id', '>', $portfolio->id)->orderBy('id', 'ASC')->first();
        if ($next == null) {
            $next = DB::table('portfolio')->orderBy('id', 'ASC')->first();
        }

        $prevSlug = $previous->slug;
        $nextSlug = $next->slug;


        $locale = \App::getLocale();

        return view('client.portfolio.' . $locale . '.' . $viewName, compact('category', 'portfolio', 'nextSlug', 'prevSlug'));
    }
}
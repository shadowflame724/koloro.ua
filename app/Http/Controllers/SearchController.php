<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        //dd(Input::get());
        $sitePage = Page::find(7);

        $sql = [
            'portfolio' => [],
            'blog' => [],
            'services' => []
        ];

        $query = Input::get('query');
        $category = Input::get('category');
        $searchCondition = Input::get('search-condition');
        $page = Input::get('page', 1);
        $perPage = 5;

        if (strlen($query) > 1) {
            switch ($category) {
                case 'portfolio':
                    switch ($searchCondition) {
                        case 'in-header':
                            $sql['portfolio'] = Portfolio::where('title_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('title_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                        case 'in-text':
                            $sql['portfolio'] = Portfolio::where('text_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('text_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                        default:
                            $sql['portfolio'] = Portfolio::where('title_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('text_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('title_ua', 'LIKE', '%' . $query . '%')
                                ->orWhere('text_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                    }
                    break;
                case 'blog':
                    switch ($searchCondition) {
                        case 'in-header':
                            $sql['blog'] = Blog::where('name_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('name_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                        case 'in-text':
                            $sql['blog'] = Blog::where('content_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('content_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                        default:
                            $sql['blog'] = Blog::where('name_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('content_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('name_ua', 'LIKE', '%' . $query . '%')
                                ->orWhere('content_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                    }
                    break;
                case 'services':
                    switch ($searchCondition) {
                        case 'in-header':
                            $sql['services'] = Service::where('title_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('title_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                        case 'in-text':
                            $sql['services'] = Service::where('description_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('description_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                        default:
                            $sql['services'] = Service::where('name_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('description_ru', 'LIKE', '%' . $query . '%')
                                ->orWhere('title_ua', 'LIKE', '%' . $query . '%')
                                ->orWhere('description_ua', 'LIKE', '%' . $query . '%')
                                ->get();
                            break;
                    }
                    break;
                default:
                    $sql['portfolio'] = Portfolio::where('title_ru', 'LIKE', '%' . $query . '%')
                        ->orWhere('text_ru', 'LIKE', '%' . $query . '%')
                        ->orWhere('title_ua', 'LIKE', '%' . $query . '%')
                        ->orWhere('text_ua', 'LIKE', '%' . $query . '%')
                        ->get();
                    $sql['blog'] = Blog::where('name_ru', 'LIKE', '%' . $query . '%')
                        ->orWhere('content_ru', 'LIKE', '%' . $query . '%')
                        ->orWhere('name_ua', 'LIKE', '%' . $query . '%')
                        ->orWhere('content_ua', 'LIKE', '%' . $query . '%')
                        ->get();
                    $sql['services'] = Service::where('name_ru', 'LIKE', '%' . $query . '%')
                        ->orWhere('description_ru', 'LIKE', '%' . $query . '%')
                        ->orWhere('name_ua', 'LIKE', '%' . $query . '%')
                        ->orWhere('description_ua', 'LIKE', '%' . $query . '%')
                        ->get();
                    break;
            }
        }

        $results = [];

        foreach ($sql as $item) {
            foreach ($item as $value) {
                $results[] = $value;
            }
        }
        $allResults = collect($results);
        $resultsForCurrentPage = $allResults->forPage($page, $perPage)->shuffle();
        $results = new LengthAwarePaginator($resultsForCurrentPage, count($allResults), $perPage, $page, ['path' => $request->url()]);

        return view('client.search', compact('results', 'query', 'sitePage'));
    }


}

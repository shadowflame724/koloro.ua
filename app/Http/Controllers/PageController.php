<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 27.09.2017
 * Time: 15:51
 */

namespace App\Http\Controllers;


use App\Events\DbChanged;
use App\Http\Requests\Admin\Page\UpdatePageRequest;
use App\Models\Meta;
use App\Models\Page;

/**
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $pages = Page::all();

        return view('admin.page.index', [
            'pages' => $pages
        ]);
    }


//    public function create()
//    {
//        return view('admin.page.create');
//    }
//
//    public function store(StorePageRequest $request)
//    {
//        dd($request->all());
//
//        Page::create([
//            'name_ru' => $request->name_ru,
//            'name_ua' => $request->name_ua,
//            'meta_id' => MetaController::createMeta($request>all())
//        ]);
//
//        return view('admin.page.create');
//    }


    /**
     * @param Page $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Page $page)
    {
        return view('admin.page.edit', [
            'page' => $page
        ]);
    }


    /**
     * @param UpdatePageRequest $request
     * @param Page $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePageRequest $request, Page $page)
    {

        $page->name_ru = $request->name_ru;
        $page->name_ru = $request->name_ru;
        $meta = MetaController::updateMeta($page->meta_id, $request->meta);
        if ($meta instanceof Meta) {
            $page->meta_id = $meta->id;
        }

        $page->save();
        new DbChanged();


        return redirect()->route('admin.page.index')
            ->with('success', 'Page updated successfully');
    }
}
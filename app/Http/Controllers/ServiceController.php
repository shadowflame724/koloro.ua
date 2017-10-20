<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\File;
use App\Models\Meta;
use App\Models\Page;
use App\Models\Service;
use App\Models\ServiceBlocks;
use App\Models\ServiceCategory;
use App\Repositories\Service\ServiceRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use App\Http\Requests\Admin\Service\StoreServiceRequest;
use App\Http\Requests\Admin\Service\UpdateServiceRequest;
use Maatwebsite\Excel\Facades\Excel;


/**
 * Class ServiceController
 * @package App\Http\Controllers
 */
class ServiceController extends Controller
{
    /**
     * @var ServiceRepository
     */
    protected $service;

    /**
     * @param ServiceRepository $service
     */
    public function __construct(ServiceRepository $service)
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $services = $this->service->getForDataTables();

        return view('admin.service.index', compact('services'));
    }

    /**
     * @return mixed
     */
    public function getServices()
    {
        //$serviceCategories = ServiceCategory::all()->sortBy('order');
        $page = Page::find(1);
        $arr = DB::table('service')
            ->join('servicecategory', 'service.category_id', '=', 'servicecategory.id')
            ->join('file', 'service.image_id', '=', 'file.id')
            ->join('file as categoryFile', 'servicecategory.image_id', '=', 'categoryFile.id')
            ->select('service.name_ru', 'service.name_ua', 'service.description_ru', 'service.description_ua', 'service.slug',
                'servicecategory.id as parentId', 'categoryFile.link as parentImageLink', 'categoryFile.link as parentImageAlt',
                'servicecategory.order as parentOrder',
                'servicecategory.name_ru as parentName_ru', 'servicecategory.name_ua as parentName_ua',
                'servicecategory.description_ru as parentDescription_ru', 'servicecategory.description_ua as parentDescription_ua',
                'file.link', 'file.alt')
            ->orderBy('parentOrder')
            ->get();

        $serviceCategories = [];

        foreach ($arr as $data) {
            $id = $data->parentId;
            $serviceCategories[$id]['parentName_ru'] = $data->parentName_ru;
            $serviceCategories[$id]['parentName_ua'] = $data->parentName_ua;
            $serviceCategories[$id]['parentDescription_ru'] = $data->parentDescription_ru;
            $serviceCategories[$id]['parentDescription_ua'] = $data->parentDescription_ua;
            $serviceCategories[$id]['parentImageLink'] = $data->parentImageLink;
            $serviceCategories[$id]['parentImageAlt'] = $data->parentImageAlt;
            $serviceCategories[$id]['services'][] = [
                'name_ru' => $data->name_ru,
                'name_ua' => $data->name_ua,
                'description_ru' => $data->description_ru,
                'description_ua' => $data->description_ua,
                'slug' => $data->slug,
                'link' => $data->link,
                'alt' => $data->alt
            ];
        }

        return view('client.services', compact('serviceCategories', 'page'));
    }

    /**
     * @return mixed
     */
    public function create()
    {
        $categories = ServiceCategory::lists('name_ru', 'id');
        $blog = Blog::lists('name_ru', 'id');

        return view('admin.service.create', compact('categories', 'blog'));
    }

    /**
     * @param StoreServiceRequest $request
     * @return mixed
     */
    public function store(StoreServiceRequest $request)
    {
        $this->service->create($request->all());

        return redirect()->route('admin.service.index')
            ->with('success', 'Service created successfully');
    }

    //turned off


    /**
     * @param Service $service
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Service $service)
    {
        $categories = ServiceCategory::lists('name_ru', 'id');
        $blocks = $service->blocks()->orderBy('sort')->get();
        $blog = Blog::lists('name_ru', 'id')->toArray();

        return view('admin.service.edit', compact('service', 'categories', 'blocks', 'blog'));
    }

    /**
     * @param UpdateServiceRequest $request
     * @param Service $service
     * @return mixed
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $this->service->update($service, $request->all());

        return redirect()->route('admin.service.index')
            ->with('success', 'Service updated successfully');
    }

    /**
     * @param Service $service
     * @return mixed
     */
    public function destroy(Service $service)
    {
        $this->service->delete($service);

        return redirect()->route('admin.service.index')
            ->with('success', 'Service deleted successfully');
    }

//    public function createThumbs()
//    {
//        $path = public_path('files/images/service/');
//        $imgList = scandir($path);
//
//        foreach ($imgList as $img) {
//            if (strlen($img) > 2) {
//                Image::make($path . $img)->fit(480, 480)->save($path . 'thumb_' . $img);
//            }
//        }
//
//        return redirect()->route('admin.service.index')
//            ->with('success', 'Service thumbs created successfully');
//    }
}

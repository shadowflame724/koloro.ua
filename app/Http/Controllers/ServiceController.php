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

//    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
//     */
//    public function incrementCount(Request $request)
//    {
//        $serviceId = $request->id;
//        $service = Service::find($serviceId);
//        $service->count++;
//
//        if ($service->save()) {
//            return response('OK', 200);
//        }
//
//        return response('FAIL', 400);
//    }

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
        $serviceCategories = ServiceCategory::all()->sortBy('order');
        $page = Page::find(1);


        return view('client.services', compact('serviceCategories', 'page'));
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getService($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $blocks = $service->blocks;
        $similarServices = Service::where('category_id', '=', $service->category_id)
            ->inRandomOrder()->take(4)->get();

//        dd($similarServices->image);

        return view('client.service', compact('service', 'blocks', 'similarServices'));
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

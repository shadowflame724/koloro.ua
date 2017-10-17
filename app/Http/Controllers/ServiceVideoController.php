<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 26.09.2017
 * Time: 9:46
 */

namespace App\Http\Controllers;


use App\Models\Service;
use App\Models\ServiceVideo;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests\ServiceVideo\StoreServiceVideoRequest;
use App\Http\Requests\ServiceVideo\UpdateServiceVideoRequest;

class ServiceVideoController extends Controller
{
    /**
     * @var ServiceVideoRepository
     */
    protected $serviceVideo;

    /**
     * @param ServiceVideoRepository $serviceVideo
     */
    public function __construct(ServiceVideoRepository $serviceVideo)
    {
        $this->serviceVideo = $serviceVideo;
    }

    public function index()
    {
        return view('admin.servicevideo.index');
    }

    public function table()
    {
        return Datatables::of($this->serviceVideo->getForDataTable())
            
            ->addColumn('actions', function ($serviceVideo) {
                return '
                    <a class="btn btn-primary" href="' . route("admin.servicevideo.edit", $serviceVideo->id) . '">Изменить</a>
                    
                <form method="POST" action="' . route("admin.servicevideo.destroy", $serviceVideo->id) . '" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="' . csrf_token() . '">
                        <input class="btn btn-danger" type="submit" value="Удалить">
                        </form>';
            })
            ->make(true);
    }

    public function create()
    {
        $services = Service::lists('name_ru', 'id');

        return view('admin.servicevideo.create', compact('services'));
    }


    public function store(StoreServiceVideoRequest $request)
    {
        //save image
        if ($request->hasFile('image')) {
            //save image FILE to server
            $image = $request->file('image');
            $dbImage = FileController::uploadImg($image, public_path('files/images/servicevideo/'));

            $request['image_id'] = $dbImage->id;
        }
        /** todo fix 3 */

        $this->serviceVideo->create($request->all());

        return redirect()->route('admin.servicevideo.index')
            ->with('success', 'Service Video created successfully');
    }
    

    public function edit(ServiceVideo $serviceVideo)
    {
        $users = User::lists('name', 'id');
        $categories = ServiceVideoCategory::lists('name_ru', 'id');

        $meta = Meta::find($serviceVideo->meta_id);
        $meta_title = $meta->title;
        $meta_description = $meta->description;
        $meta_keywords = $meta->keywords;

        return view('admin.servicevideo.edit', compact('ServiceVideo', 'users', 'categories', 'meta_title', 'meta_description', 'meta_keywords'));
    }


    public function update(UpdateServiceVideoRequest $request, ServiceVideo $serviceVideo)
    {
        if ($request->hasFile('image')) {
            $imageId = $serviceVideo->image_id;

            //save NEW image FILE to server
            $image = $request->file('image');
            $path = public_path('files/images/service/');
            FileController::updateImg($image, $imageId, $path);
        }
        /** todo fix 3 */

        $this->serviceVideo->update($serviceVideo, $request->all());

        return redirect()->route('admin.servicevideo.index')
            ->with('success', 'ServiceVideo updated successfully');
    }


    public function destroy(ServiceVideo $serviceVideo)
    {
        $this->serviceVideo->delete($serviceVideo);

        return redirect()->route('admin.servicevideo.index')
            ->with('success', 'Service Video deleted successfully');
    }
}
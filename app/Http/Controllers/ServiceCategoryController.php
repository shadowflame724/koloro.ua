<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\ServiceCategory;
use App\Repositories\ServiceCategory\ServiceCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ServiceCategory\StoreServiceCategoryRequest;
use App\Http\Requests\Admin\ServiceCategory\UpdateServiceCategoryRequest;

use App\Http\Requests;

use App\Traits\SaveMeta;

/**
 * Class ServiceCategoryController
 * @package App\Http\Controllers
 */
class ServiceCategoryController extends Controller
{
    use SaveMeta;

    /**
     * @var ServiceCategoryRepository
     */
    protected $serviceCategory;

    /**
     * @param ServiceCategoryRepository $serviceCategory
     */
    public function __construct(ServiceCategoryRepository $serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function index(Request $request)
    {
        $categories = ServiceCategory::all();

        return view('admin.servicecategory.index', compact('categories'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.servicecategory.create');
    }


    /**
     * @param StoreServiceCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreServiceCategoryRequest $request)
    {
        $this->serviceCategory->create($request->all());

        return redirect()->route('admin.servicecategory.index')
            ->with('success', 'Service Category created successfully');
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $serviceCategory = ServiceCategory::find($id);

        return view('admin.servicecategory.edit', compact('serviceCategory'));
    }


    /**
     * @param UpdateServiceCategoryRequest $request
     * @param  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateServiceCategoryRequest $request, $id)
    {
        $serviceCategory = ServiceCategory::find($id);
        $this->serviceCategory->update($serviceCategory, $request->all());

        return redirect()->route('admin.servicecategory.index')
            ->with('success', 'Service Category updated successfully');
    }


    /**
     * @param ServiceCategory $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $serviceCategory = ServiceCategory::find($id);
        $serviceCategory->delete();

        return redirect()->route('admin.servicecategory.index')
            ->with('success', 'Service Category deleted successfully');
    }
}

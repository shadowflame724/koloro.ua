<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Meta;
use App\Repositories\BlogCategory\BlogCategoryRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

//define to use trait inside controller
use App\Traits\MakeSlug;
use App\Traits\SaveMeta;
use App\Http\Requests\Admin\BlogCategory\StoreBlogCategoryRequest;
use App\Http\Requests\Admin\BlogCategory\UpdateBlogCategoryRequest;

/**
 * Class BlogCategoryController
 * @package App\Http\Controllers
 */
class BlogCategoryController extends Controller
{
    //define to use trait in current class
    use MakeSlug;
    use SaveMeta;

    /**
     * @var BlogCategoryRepository
     */
    protected $blogCategory;


    /**
     * BlogCategoryController constructor.
     * @param BlogCategoryRepository $blogCategory
     */
    public function __construct(BlogCategoryRepository $blogCategory)
    {
        $this->blogCategory = $blogCategory;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = BlogCategory::orderBy('id', 'DESC')->paginate(6);

        return view('admin.blogcategory.index', compact('categories'));
//            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.blogcategory.create');
    }

    /**
     * @param StoreBlogCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBlogCategoryRequest $request)
    {
        $this->makeslug($request);

        $this->blogCategory->create($request->all());

        return redirect()->route('admin.blogcategory.index')
            ->with('success', 'Category created successfully');
    }

//    public function show($id)
//    {
//        $category = BlogCategory::find($id);
//
//        return view('admin.blogcategory.show', compact('category'));
//    }


    /**
     * @param BlogCategory $blogcategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(BlogCategory $blogcategory)
    {
        return view('admin.blogcategory.edit', compact('blogcategory'));
    }

    /**
     * @param UpdateBlogCategoryRequest $request
     * @param BlogCategory $blogcategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateBlogCategoryRequest $request, BlogCategory $blogcategory)
    {
        $this->blogCategory->update($blogcategory, $request->all());

        return redirect()->route('admin.blogcategory.index')
            ->with('success', 'Category updated successfully');
    }

    /**
     * @param BlogCategory $blogCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        Meta::destroy($blogCategory->meta_id);

        return redirect()->route('admin.blogcategory.index')
            ->with('success', 'Category deleted successfully');
    }
}

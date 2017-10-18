<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\File;
use App\Models\Meta;
use App\Models\Page;
use App\Models\ServiceCategory;
use App\Repositories\Blog\BlogRepository;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Events\ArticleViewed;

use App\Traits\MakeSlug;
use App\Http\Requests\Admin\Blog\StoreBlogRequest;
use App\Http\Requests\Admin\Blog\UpdateBlogRequest;
use Yajra\Datatables\Facades\Datatables;

class BlogController extends Controller
{
    use MakeSlug;

    /**
     * @var BlogRepository
     */
    protected $blog;

    /**
     * @param BlogRepository $blog
     */
    public function __construct(BlogRepository $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        return view('admin.blog.index');
    }

    public function table()
    {
        return Datatables::of($this->blog->getForDataTable())
            ->editColumn('published_at', function ($blog) {
                return $blog->published_at ? with(new Carbon($blog->published_at))->format('m/d/Y') : '';
            })
            ->filterColumn('published_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(created_at,'%m/%d/%Y') like ?", ["%$keyword%"]);
            })
            ->editColumn('created_at', function ($blog) {
                return $blog->created_at ? with(new Carbon($blog->created_at))->format('m/d/Y') : '';
            })
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(created_at,'%m/%d/%Y') like ?", ["%$keyword%"]);
            })
            ->addColumn('actions', function ($blog) {
                return '<a class="btn btn-info" href="' . route("client.article", [$blog->parentSlug, $blog->slug]) . '">Показать</a>
                    <a class="btn btn-primary" href="' . route("admin.blog.edit", $blog->id) . '">Изменить</a>
                    
                <form method="POST" action="' . route("admin.blog.destroy", $blog->id) . '" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="' . csrf_token() . '">
                        <input class="btn btn-danger" type="submit" value="Удалить">
                        </form>';
            })
            ->make(true);
    }

    public function getBlog(Request $request, $category = '')
    {
        $blogcategories = BlogCategory::all();
        $page = Page::find(4);

        if (strlen($category) > 0) {
            $category = BlogCategory::where('slug', $category)->first();
            if($category == null){
                return view('errors.404');
            }
            $categoryId = $category->id;
            $blogs = \DB::table('blog')
                ->where('category_id', '=', $categoryId)
                ->join('blogcategory', 'blog.category_id', '=', 'blogcategory.id')
                ->join('users as u', 'blog.user_id', '=', 'u.id')
                ->join('file as f', 'blog.image_id', '=', 'f.id')
                ->select('blog.*', 'blogcategory.name_ru as categoryName_ru', 'blogcategory.name_ua as categoryName_ua', 'blogcategory.slug as categorySlug',
                    'u.name as userName', 'u.id as userId', 'f.link as imageLink', 'f.alt as imageAlt')
                ->orderBy('created_at', 'DESC')
                ->paginate(10);
        } else {
            $categoryId = null;
            $blogs = \DB::table('blog')
                ->join('blogcategory', 'blog.category_id', '=', 'blogcategory.id')
                ->join('users as u', 'blog.user_id', '=', 'u.id')
                ->join('file as f', 'blog.image_id', '=', 'f.id')
                ->select('blog.*', 'blogcategory.name_ru as categoryName_ru', 'blogcategory.name_ua as categoryName_ua', 'blogcategory.slug as categorySlug',
                    'u.name as userName', 'u.id as userId', 'f.link as imageLink', 'f.alt as imageAlt')
                ->orderBy('created_at', 'DESC')
                ->paginate(10);
        }

        return view('client.blog', compact('blogs', 'blogcategories', 'page', 'categoryId'));
    }

    public function getBlogCategory($slug)
    {
        $blog = BlogCategory::where('slug', $slug)->firstOrFail();

        return view('client.blog', compact('blog', 'slug'));
    }


    public function create()
    {
        $users = User::lists('name', 'id');
        $categories = BlogCategory::lists('name_ru', 'id');

        return view('admin.blog.create', compact('users', 'categories'));
    }


    public function store(StoreBlogRequest $request)
    {
        $this->blog->create($request->all());

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog created successfully');
    }


    public function getArticle($category, $article)
    {
        $category = BlogCategory::where('slug', $category)->first();
        $article = Blog::where('slug', $article)->where('category_id', $category->id)->first();
        if($article == null){
            return view('errors.404');
        }
        $serviceCategories = ServiceCategory::all();

        event(new ArticleViewed($article));

        if ($article) {
            $user = User::find($article->user_id);
            $image = File::find($article->image_id);
        }

        $portfolios = \DB::table('portfolio')
            ->join('file', 'portfolio.image_id', '=', 'file.id')
            ->select('file.link', 'file.alt', 'portfolio.title_ru', 'portfolio.title_ua', 'portfolio.slug')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $montharticles = Blog::where('created_at', '>=', Carbon::now()->subMonth())->orderBy('views', 'desc')->take(2)->get();
        $twomontharticles = Blog::where('created_at', '>=', Carbon::now()->subMonth(3))->orderBy('views', 'desc')->take(2)->get();

        return view('client.article', compact('article', 'user', 'category', 'image', 'montharticles', 'twomontharticles', 'serviceCategories', 'portfolios'));
    }


    public function edit(Blog $blog)
    {
        $users = User::lists('name', 'id');
        $categories = BlogCategory::lists('name_ru', 'id');

        $meta = Meta::find($blog->meta_id);
        if ($meta) {
            $meta_title = $meta->title;
            $meta_description = $meta->description;
            $meta_keywords = $meta->keywords;
        }


        return view('admin.blog.edit', compact('blog', 'users', 'categories', 'meta_title', 'meta_description', 'meta_keywords'));
    }


    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $this->blog->update($blog, $request->all());

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog updated successfully');
    }


    public function destroy(Blog $blog)
    {
        $this->blog->delete($blog);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog deleted successfully');
    }
}

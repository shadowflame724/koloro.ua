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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Events\ArticleViewed;

use App\Traits\MakeSlug;
use App\Http\Requests\Admin\Blog\StoreBlogRequest;
use App\Http\Requests\Admin\Blog\UpdateBlogRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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
            if ($category == null) {
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
        $article = DB::table('blog')
            ->join('blogcategory as category', 'blog.category_id', '=', 'category.id')
            ->join('meta', 'blog.meta_id', '=', 'meta.id')
            ->join('file as articleImg', 'blog.image_id', '=', 'articleImg.id')
            ->join('users', 'blog.user_id', '=', 'users.id')
            ->join('file as userImg', 'users.image_id', '=', 'userImg.id')
            ->select('blog.id', 'blog.name_ru', 'blog.name_ua', 'blog.created_at', 'blog.updated_at', 'blog.views', 'blog.votes', 'blog.rating', 'blog.content_ru', 'blog.content_ua',
                'meta.title_ru as metaTitle_ru', 'meta.title_ru as metaTitle_ua', 'meta.title_ru as metaDesc_ru', 'meta.title_ru as metaDesc_ua', 'meta.title_ru as metaKeys_ru', 'meta.title_ru as metaKeys_ua',
                'category.name_ru as categoryName_ru', 'category.name_ru as categoryName_ua', 'category.id as categoryId',
                'users.name as userName', 'users.id as userId',
                'articleImg.alt as articleImgAlt', 'articleImg.link as articleImgLink', 'userImg.alt as userImgAlt', 'userImg.link as userImgLink')
            ->where('blog.slug', '=', $article)
            ->first();

        $similarArticles = DB::table('blog')
            ->join('file as articleImg', 'blog.image_id', '=', 'articleImg.id')
            ->join('blogcategory as category', 'blog.category_id', '=', 'category.id')
            ->select('blog.name_ru', 'blog.name_ua', 'blog.slug', 'category.slug as categorySlug','articleImg.link', 'articleImg.alt')
            ->where('category_id', '=', $article->categoryId)
            ->where('blog.id', '!=', $article->id)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        if ($article == null) {
            return view('errors.404');
        }
        $serviceCategories = ServiceCategory::all();

        event(new ArticleViewed($article->id));

        $portfolios = \DB::table('portfolio')
            ->join('file', 'portfolio.image_id', '=', 'file.id')
            ->select('file.link', 'file.alt', 'portfolio.title_ru', 'portfolio.title_ua', 'portfolio.slug')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $montharticles = Blog::where('created_at', '>=', Carbon::now()->subMonth())->with('blogcategory')->orderBy('views', 'desc')->take(2)->get();
        $twomontharticles = Blog::where('created_at', '>=', Carbon::now()->subMonth(3))->with('blogcategory')->orderBy('views', 'desc')->take(2)->get();

        return view('client.article', compact('article', 'similarArticles', 'montharticles', 'twomontharticles', 'serviceCategories', 'portfolios'));
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

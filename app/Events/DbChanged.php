<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Models\Blog;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

/**
 * Class DbChanged
 * @package App\Events
 */
class DbChanged extends Event
{
    use SerializesModels;


    /**
     * DbChanged constructor.
     */
    public function __construct()
    {
        $currentDate = \Carbon\Carbon::now();

        // create new sitemap object
        $sitemap = App::make('sitemap');

        // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
        // by default cache is disabled
        $sitemap->setCache('laravel.sitemap', 60);

        // check if there is cached sitemap and build new only if is not
        if (!$sitemap->isCached()) {
            // add item to the sitemap (url, date, priority, freq)

            $services = \Illuminate\Support\Facades\DB::table('service')->get(['slug']);
            $works = \Illuminate\Support\Facades\DB::table('portfolio')->get(['slug']);
            $blog = \Illuminate\Support\Facades\DB::table('blog')
                ->join('blogcategory', 'blog.category_id', '=', 'blogcategory.id')
                ->select('blog.slug', 'blog.created_at', 'blogcategory.slug as parentSlug')
                ->get();
            $blogCategory = \Illuminate\Support\Facades\DB::table('blogcategory')->get(['slug']);
            $users = \Illuminate\Support\Facades\DB::table('users')->get(['id']);


            $sitemap->add(URL::to('/'), $currentDate, '1.0', 'daily');
            $sitemap->add(URL::to('/services.html'), $currentDate, '0.8', 'daily');
            $sitemap->add(URL::to('/portfolio.html'), $currentDate, '0.8', 'daily');
            $sitemap->add(URL::to('/contacts.html'), $currentDate, '0.8', 'daily');
            $sitemap->add(URL::to('/company.html'), $currentDate, '0.8', 'daily');
            $sitemap->add(URL::to('/search'), $currentDate, '0.8', 'daily');


            foreach ($services as $service) {
                $slug = $service->slug;
                $sitemap->add(URL::to('/' . $slug), $currentDate, '0.7', 'daily');
            }
            foreach ($works as $work) {
                $slug = $work->slug;
                $sitemap->add(URL::to('/portfolio/' . $slug), $currentDate, '0.7', 'daily');
            }
            foreach ($blogCategory as $cat) {
                $slug = $cat->slug;
                $sitemap->add(URL::to('/blog/' . $slug), $currentDate, '0.7', 'daily');
            }
            foreach ($blog as $article) {
                $articleSlug = $article->slug;
                $categorySlug = $article->parentSlug;
                $sitemap->add(URL::to('/blog/' . $categorySlug . '/' . $articleSlug), $currentDate, '0.6', 'daily');
            }
            foreach ($users as $user) {
                $sitemap->add(URL::to('/author/' . $user->id), $currentDate, '0.5', 'daily');
            }

        }
        $sitemap->store('xml', 'sitemap');

        return true;
    }
}

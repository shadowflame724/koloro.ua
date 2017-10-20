<?php

namespace App\Listeners;

use App\Events\ArticleViewed;
use App\Models\Blog;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticleViewedCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArticleViewed  $event
     * @return void
     */
    public function handle(ArticleViewed $event)
    {
        $article = Blog::find($event->articleId);
        $article->increment('views');
    }
}

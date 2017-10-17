<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Models\Blog;

class ArticleViewed extends Event
{
    use SerializesModels;

    public $article;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Blog $article)
    {
        $this->article = $article;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}

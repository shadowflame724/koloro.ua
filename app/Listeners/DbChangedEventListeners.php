<?php

namespace App\Listeners;

use App\Events\DbChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DbChangedEventListeners
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
     * @param  DbChanged  $event
     * @return void
     */
    public function handle(DbChanged $event)
    {
    }
}

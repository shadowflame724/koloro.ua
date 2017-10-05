<?php

namespace App\Widgets;

use App\Models\Portfolio;
use App\Traits\ServiceLocale;
use Arrilot\Widgets\AbstractWidget;

class JobsExample extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $portfolio = Portfolio::all();

        return view("widgets.jobs_example", compact('portfolio'), [
            'config' => $this->config,
        ]);
    }
}
<?php

namespace App\Widgets;

use App\Models\Portfolio;
use App\Traits\ServiceLocale;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\DB;

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
        $portfolio = DB::table('portfolio')
            ->join('file', 'portfolio.image_id', '=', 'file.id')
            ->select('portfolio.title_ru', 'portfolio.title_ua', 'portfolio.slug', 'portfolio.bg_color', 'portfolio.short_desc_ru',
                'portfolio.short_desc_ua', 'file.link', 'file.alt')
            ->get();

        return view("widgets.jobs_example", compact('portfolio'), [
            'config' => $this->config,
        ]);
    }
}
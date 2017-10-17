<?php

namespace App\Widgets;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Traits\ServiceLocale;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Config;

class CarrouselService extends AbstractWidget
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
        $servicecategories = ServiceCategory::all()->sortBy('order');
        $services = Service::servicelocale();

        return view("widgets.carrousel_service", compact('servicecategories','services'), [
            'config' => $this->config,
        ]);
    }
}
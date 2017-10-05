<?php

namespace App\Widgets;

use App\Models\Service;
use Arrilot\Widgets\AbstractWidget;

class Services extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'id' => 1
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $id = $this->config['id'];
        $services = Service::all()->where('category_id', $id);

        return view("widgets.services", compact('services'), [
            'config' => $this->config,
        ]);
    }
}
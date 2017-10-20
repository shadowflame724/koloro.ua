<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp;

/**
 * Class ServicePricesController
 * @package App\Http\Controllers
 */
class ServicePricesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $services = Service::select('id', 'name_ru', 'price')->get();

        return view('admin.service.prices.index', compact('services'));
    }

    /**
     * @return mixed
     */
    public function setPrice(Request $request, Service $service)
    {
        $service->price = $request->price;
        $service->save();
        $name = $service->name_ru;

        return redirect()->route('admin.service-prices.index')
            ->with('success', 'Service "' . $name . '" updated successfully');
    }


}

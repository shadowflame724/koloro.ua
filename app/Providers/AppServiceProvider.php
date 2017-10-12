<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $langSuf = '_' . App::getLocale();
        $settings = Settings::find(1);

        View::share([
            'langSuf' => $langSuf,
            'settings' => $settings
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}

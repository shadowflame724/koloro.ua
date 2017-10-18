<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Http\Composers\GlobalComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Carbon\Carbon;

/**
 * Class ComposerServiceProvider.
 */
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */

    public function boot(Request $request)
    {
        /*
         * Global
         */
        View::composer(
            // This class binds the $logged_in_user variable to every view
            '*', GlobalComposer::class
        );

        /*
         * Languages in global config
         */
        $lang = get_lang_from_domain_name($request);
        $domain = ENV('APP_URL');
        $appLangs = [
            'lang' => $lang,
            'paths' => [
                'ru' => $domain,
                'ua' => $domain . '/ua',
            ],
            'suf' => '_' . $lang,
        ];
        config([
            'app.langs' => $appLangs
        ]);
        // ******

        View::composer(['*'], function ($view) use ($request, $appLangs) {
            // геолокация
            $path = $request->path();

            if ($path == '/') {
                $path = '';
            }


            $view
                ->with([
                    'curPath' => $path,
                    'langPaths' => $appLangs['paths'],
                    'langSuf' => $appLangs['suf'],
                ]);
        });
        /*
         * Backend
         */
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

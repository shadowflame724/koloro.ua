<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => ['auth']], function () {
    Route::auth();
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
        Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');
        Route::resource('/managers', 'ManagerController', ['except' => ['show']]);
        Route::resource('/users', 'UserController');
        Route::resource('/roles', 'RoleController');
        Route::resource('/blog', 'BlogController', ['except' => ['show']]);
        Route::post('/table/blog', ['as' => 'blog-table', 'uses' => 'BlogController@table']);
        Route::resource('/blogcategory', 'BlogCategoryController', ['except' => ['show']]);
        Route::resource('/servicecategory', 'ServiceCategoryController', ['except' => ['show']]);
        Route::resource('/service', 'ServiceController', ['except' => ['show']]);
        Route::get('/service-prices', ['as' => 'admin.service-prices.index', 'uses' => 'ServicePricesController@index']);
        Route::patch('/service-prices/set-price/{service}', ['as' => 'admin.service-prices.set-price', 'uses' => 'ServicePricesController@setPrice']);
        Route::post('/increment-count-service', ['as' => 'increment-count', 'uses' => 'ServiceController@incrementCount']);
        Route::resource('/portfolio', 'PortfolioController', ['except' => ['show']]);
        Route::post('/table/portfolio', ['as' => 'portfolio-table', 'uses' => 'PortfolioController@table']);
        Route::resource('/portfoliocategory', 'PortfolioCategoryController', ['except' => ['show']]);
        Route::post('/table/portfoliocategory', ['as' => 'portfoliocategory-table', 'uses' => 'PortfolioCategoryController@table']);
        Route::resource('/meta', 'MetaController', ['except' => ['show']]);
        Route::resource('/form', 'FormController', ['except' => ['show']]);
        Route::get('form/export', ['as' => 'form-export', 'uses' => 'FormController@export']);
        Route::resource('/brief', 'BriefController', ['except' => ['show']]);
        Route::resource('/callback', 'CallbackController', ['except' => ['show']]);
        Route::resource('/subscription', 'SubscriptionController', ['except' => ['show']]);
        Route::resource('/servicevideo', 'ServiceVideoController', ['except' => ['show']]);
        Route::post('/servicevideo', ['as' => 'servicevideo-table', 'uses' => 'ServiceVideoController@table']);
        Route::resource('/page', 'PageController', ['except' => ['show']]);
        Route::get('/settings/edit', ['as' => 'settings.edit', 'uses' => 'SettingsController@edit']);
        Route::post('/settings/update/{settings}', ['as' => 'settings.update', 'uses' => 'SettingsController@update']);
    });
});



Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});
Route::post('vote/{type?}/{id}', ['as' => 'vote', 'uses' => 'VoteController@vote']);

//yellow form
Route::any('form', ['as' => 'form', 'uses' => 'FormController@create']);
Route::post('form', ['as' => 'form_store', 'uses' => 'FormController@store']);

//brief form
Route::get('brief', ['as' => 'brief', 'uses' => 'BriefController@create']);
Route::post('brief', ['as' => 'brief_store', 'uses' => 'BriefController@store']);

//callback
Route::get('callback', ['as' => 'callback', 'uses' => 'CallbackController@create']);
Route::post('callback', ['as' => 'callback_store', 'uses' => 'CallbackController@store']);

//subscription
Route::get('/subscription', ['as' => 'subscription', 'uses' => 'SubscriptionController@create']);
Route::post('/subscription', ['as' => 'subscription_store', 'uses' => 'SubscriptionController@store']);




Route::get('/blog.html', ['as' => 'client.blog.index', 'uses' => 'BlogController@getBlog']);
Route::get('/blog/{category}/{article}', ['as' => 'client.article', 'uses' => 'BlogController@getArticle']);
Route::get('/blog/{category}', ['as' => 'client.blog.byCategory', 'uses' => 'BlogController@getBlog']);

Route::get('/search', 'SearchController@search');

Route::group(['middleware' => ['web']], function () {
    Route::group([
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localizationRedirect', 'localeViewPath']
    ], function () {
        Route::get('/services.html', ['as' => 'client.services', 'uses' => 'ServiceController@getServices']);


        Route::get('/portfolio.html', ['as' => 'client.portfolio', 'uses' => 'Client\PortfolioController@portfolio']);
        Route::get('/portfolio/category/{category}', ['as' => 'client.portfoliocategory', 'uses' => 'Client\PortfolioController@getPortfolioCategory']);
        Route::get('/portfolio/{portfolio}', ['as' => 'client.portfoliopage', 'uses' => 'Client\PortfolioController@getPortfolioPage']);

        Route::get('/contacts.html', ['as' => 'client.contacts', 'uses' => 'ContactsController@getContacts']);
        Route::get('/company.html', ['as' => 'client.company', 'uses' => 'Client\FrontEndPagesController@about']);



        Route::get('/services', function () {
            return redirect('services.html');
        });
        Route::get('blog', function () {
            return redirect('blog.html');
        });
        Route::get('portfolio', function () {
            return redirect('portfolio.html');
        });
        Route::get('contacts', function () {
            return redirect('contacts.html');
        });
        Route::get('about', function () {
            return redirect('company.html');
        });
        Route::get('author/{user}/{slug?}', ['as' => 'client.author', 'uses' => 'Client\FrontEndPagesController@author']);

        Route::get('/{serviceSlug?}', ['as' => 'client.index', 'uses' => 'Client\FrontEndPagesController@index', 'except' => ['login']]);
    });
});


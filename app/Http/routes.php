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

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'HomeController@index');

        Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
        Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\LfmController@upload');

        Route::resource('/users', 'UserController');
        Route::resource('/roles', 'RoleController');
        Route::resource('/blog', 'BlogController');
        Route::post('/table/blog', ['as' => 'blog-table', 'uses' => 'BlogController@table']);
        Route::resource('/blogcategory', 'BlogCategoryController');
        Route::resource('/servicecategory', 'ServiceCategoryController');
        Route::resource('/service', 'ServiceController');
//        Route::get('/create-thumbs', 'ServiceController@createThumbs');

        Route::post('/increment-count-service', ['as' => 'increment-count', 'uses' => 'ServiceController@incrementCount']);
        Route::resource('/portfolio', 'PortfolioController');
        Route::post('/table/portfolio', ['as' => 'portfolio-table', 'uses' => 'PortfolioController@table']);
        Route::resource('/portfoliocategory', 'PortfolioCategoryController');
        Route::post('/table/portfoliocategory', ['as' => 'portfoliocategory-table', 'uses' => 'PortfolioCategoryController@table']);
        Route::resource('/meta', 'MetaController');
        Route::resource('/form', 'FormController');
        Route::resource('/brief', 'BriefController');
        Route::resource('/callback', 'CallbackController');
        Route::resource('/subscription', 'SubscriptionController');
        Route::resource('/servicevideo', 'ServiceVideoController');
        Route::post('/servicevideo', ['as' => 'servicevideo-table', 'uses' => 'ServiceVideoController@table']);
        Route::resource('/page', 'PageController');
        Route::get('/settings/edit', ['as' => 'settings.edit', 'uses' => 'SettingsController@edit']);
        Route::post('/settings/update/{settings}', ['as' => 'settings.update', 'uses' => 'SettingsController@update']);
    });
});

//Route::group(['middleware' => ['web']], function () {
//client

Route::get('/services', ['as' => 'client.services', 'uses' => 'ServiceController@getServices']);

//+++++++++++slug+++++++++++++route name++++++++++++++++++++++++++++++method
Route::get('/blog', ['as' => 'client.blog', 'uses' => 'BlogController@getBlog']);
Route::get('/blog/{category}/{article}', ['as' => 'client.article', 'uses' => 'BlogController@getArticle']);
Route::get('/blog/{category}', ['as' => 'client.blog', 'uses' => 'BlogController@getBlog']);

Route::get('/portfolio', ['as' => 'client.portfolio', 'uses' => 'Client\PortfolioController@portfolio']);
Route::get('/portfolio/category/{category}', ['as' => 'client.portfoliocategory', 'uses' => 'Client\PortfolioController@getPortfolioCategory']);
Route::get('/portfolio/{portfolio}', ['as' => 'client.portfoliopage', 'uses' => 'Client\PortfolioController@getPortfolioPage']);
//Route::get('/portfolio/{slug}', ['as' => 'client.portfolio.{slug}', 'uses' => 'Client\PortfolioController@getPortfolioPage']);

//    Route::get('/brief', ['as' => 'client.brief', 'uses' => 'BriefController@getBrief']);
Route::get('/contacts', ['as' => 'client.contacts', 'uses' => 'ContactsController@getContacts']);
Route::get('/search', 'SearchController@search');

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

Route::get('about', 'Client\FrontEndPagesController@about');
Route::get('author/{user}/{slug?}', 'Client\FrontEndPagesController@author');


//vote
Route::post('vote/{id}', ['as' => 'vote', 'uses' => 'VoteController@vote']);

Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});


//admin
Route::auth();



//});
Route::get('/{serviceSlug?}', 'Client\FrontEndPagesController@index');


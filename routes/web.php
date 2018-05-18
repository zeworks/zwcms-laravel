<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin.index');
});

Auth::routes();
// rotas com prefixo admin
Route::prefix('admin')->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('banners', 'BannersController@index')->name('banners');
    Route::get('settings', 'SettingsController@index')->name('settings');
    Route::get('templates', 'TemplateController@index')->name('templates');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    
    // rota com prefixo settings
    Route::prefix('settings')->group(function () {
        Route::get('general', 'SettingsController@generalSettings')->name('general');
    });

    // rota com prefixo banners
    Route::prefix('banners')->group(function () {
        Route::get('new', 'BannersController@newBanner')->name('banner_new');
    });

    // rota com prefixo templates
    Route::prefix('templates')->group(function () {
        Route::get('new', 'TemplateController@newTemplate')->name('template_new');
    });
});



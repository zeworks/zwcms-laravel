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
    Route::get('products', 'ProductsController@index')->name('products');
    Route::get('blog', 'BlogController@index')->name('blog');
    Route::get('discounts', 'DiscountsController@index')->name('discounts');
    Route::get('costumers', 'CostumersController@index')->name('costumers');
    Route::get('notifications', 'NotificationsController@index')->name('notifications');
    Route::get('shipping', 'ShippingController@index')->name('shipping');
    Route::get('orders', 'OrdersController@index')->name('orders');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    
    // rota com prefixo settings
    Route::prefix('settings')->group(function () {
        Route::get('general', 'SettingsController@generalSettings')->name('general');
        Route::get('account', 'SettingsController@accountSettings')->name('account');
        Route::get('shipping', 'SettingsController@shippingSettings')->name('shipping_settings');

        // para atualizar a informacao de definições gerais
        Route::post('general', 'SettingsController@updateWebsite')->name('settings_general_edit');
    });


    // rota com prefixo banners
    Route::prefix('banners')->group(function () {
        Route::get('new', 'BannersController@newBanner')->name('banner_new');
        Route::get('edit', 'BannersController@editBanner')->name('banner_edit');
    });

    // rota com prefixo templates
    Route::prefix('templates')->group(function () {
        Route::get('new', 'TemplateController@newTemplate')->name('template_new');
        Route::get('edit', 'TemplateController@editTemplate')->name('template_edit');
    });

    // rota com prefixo products
    Route::prefix('products')->group(function () {
        Route::get('new', 'ProductsController@newProduct')->name('product_new');
        Route::get('edit', 'ProductsController@editProduct')->name('product_edit');
    });

    // rota com prefixo blog
    Route::prefix('blog')->group(function () {
        Route::get('new', 'BlogController@newBlog')->name('blog_new');
        Route::get('edit', 'BlogController@editBlog')->name('blog_edit');
    });

    // rota com prefixo costumers
    Route::prefix('costumers')->group(function () {
        Route::get('new', 'CostumersController@newCostumer')->name('costumer_new');
        Route::get('edit', 'CostumersController@editCostumer')->name('costumer_edit');
    });

    // rota com prefixo orders
    Route::prefix('orders')->group(function () {
        Route::get('new', 'OrdersController@newOrder')->name('order_new');
        Route::get('edit', 'OrdersController@editOrder')->name('order_edit');
    });

    // rota com prefixo discounts
    Route::prefix('discounts')->group(function () {
        Route::get('new', 'DiscountsController@newDiscount')->name('discount_new');
        Route::get('edit', 'DiscountsController@editDiscount')->name('discount_edit');
    });

    // rota com prefixo notifications
    Route::prefix('notifications')->group(function () {
        Route::get('new', 'NotificationsController@newNotification')->name('notification_new');
        Route::get('edit', 'NotificationsController@editNotification')->name('notification_edit');
    });

    // rota com prefixo shipping
    Route::prefix('shipping')->group(function () {
        Route::get('new', 'ShippingController@newShipping')->name('shipping_new');
        Route::get('edit', 'ShippingController@editShipping')->name('shipping_edit');
    });

});



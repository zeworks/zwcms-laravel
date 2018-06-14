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
    Route::get('shipping', 'ShippingController@index')->name('shipping');
    Route::get('orders', 'OrdersController@index')->name('orders');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('notifications', 'NotificationsController@index')->name('notifications');
    
    // rota com prefixo settings
    Route::prefix('settings')->group(function () {
        Route::get('general', 'SettingsController@generalSettings')->name('general');
        Route::get('account', 'SettingsController@accountSettings')->name('account');
        Route::get('shipping', 'SettingsController@shippingSettings')->name('shipping_settings');
        Route::get('notifications', 'SettingsController@NotificationsSettings')->name('notifications_settings');


        // para atualizar a informacao de definições gerais
        Route::post('general', 'SettingsController@updateWebsite')->name('settings_general_edit');
        // para atualizar a informação do utilizador do BO;
        Route::post('account', 'SettingsController@updateAccountSettings')->name('settings_account_edit');
    });

    // rota com prefixo banners
    Route::prefix('banners')->group(function () {
        Route::get('new', 'BannersController@newBanner')->name('banner_new');
        Route::get('edit/{id}', 'BannersController@editBanner')->name('banner_edit');

        // para criar novo banner
        Route::post('new', 'BannersController@insertNewBanner')->name('banner_insert');
        // para editar o banner
        Route::post('edit/{id}', 'BannersController@updateBanner')->name('banner_update');
        // para eliminar o banner
        Route::post('del/{id}', 'BannersController@deleteBanner')->name('banner_delete');
    });

    // rota com prefixo templates
    Route::prefix('templates')->group(function () {
        Route::get('new', 'TemplateController@newTemplate')->name('template_new');
        Route::get('edit/{id}', 'TemplateController@editTemplate')->name('template_edit');
        
        // para criar novo template
        Route::post('new', 'TemplateController@insertNewTemplate')->name('template_insert');
        // para editar o template
        Route::post('edit/{id}', 'TemplateController@updateTemplate')->name('template_update');
        // para eliminar o template
        Route::post('del/{id}', 'TemplateController@deleteTemplate')->name('template_delete');
        
    });

    // rota com prefixo products
    Route::prefix('products')->group(function () {
        Route::get('new', 'ProductsController@newProduct')->name('product_new');
        Route::get('edit/{id}', 'ProductsController@editProduct')->name('product_edit');

        // para criar novo product
        Route::post('new', 'ProductsController@insertNewProduct')->name('product_insert');
        // para editar o product
        Route::post('edit/{id}', 'ProductsController@updateProduct')->name('product_update');
        // para eliminar o product
        Route::post('del/{id}', 'ProductsController@deleteProduct')->name('product_delete');
        
    });

    // rota com prefixo settings/notifications
    Route::prefix('settings/notifications')->group(function () {
        Route::get('new', 'SettingsController@newNotification')->name('notification_new');
        Route::get('edit/{id}', 'SettingsController@editNotification')->name('notification_edit');

        // para criar um template de notificação
        Route::post('new', 'SettingsController@createNotification')->name('notification_create');
        // para editar um template de notificação
        Route::post('edit/{id}', 'SettingsController@updateNotification')->name('notification_update');
        
    });

    Route::prefix('notifications')->group(function () {
        Route::get('new', 'NotificationsController@newNotification')->name('notification_send');
    });

    

    // rota com prefixo blog
    Route::prefix('blog')->group(function () {
        Route::get('new', 'BlogController@newBlog')->name('blog_new');
        Route::get('edit/{id}', 'BlogController@editBlog')->name('blog_edit');

        
        // para criar novo post
        Route::post('new', 'BlogController@insertNewBlog')->name('blog_insert');
        // para editar o post
        Route::post('edit/{id}', 'BlogController@updateBlog')->name('blog_update');
        // para eliminar o post
        Route::post('del/{id}', 'BlogController@deleteBlog')->name('blog_delete');
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

    

    // rota com prefixo shipping
    Route::prefix('shipping')->group(function () {
        Route::get('new', 'ShippingController@newShipping')->name('shipping_new');
        Route::get('edit', 'ShippingController@editShipping')->name('shipping_edit');
    });

    Route::prefix('ajax')->group(function () {
        Route::post('upload_images', 'AjaxController@UploadImages')->name('upload_images');
    });

});



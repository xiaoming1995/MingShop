<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->get('users', 'UsersController@index');   //后台用户
    $router->get('products', 'ProductsController@index'); //商品
    $router->get('products/create', 'ProductsController@create');  //商品添加页面
    $router->post('products', 'ProductsController@store');   //商品添加方法
    $router->get('products/{id}/edit', 'ProductsController@edit'); //商品编辑页面
	$router->put('products/{id}', 'ProductsController@update');   //商品编辑方法
    $router->get('orders', 'OrdersController@index')->name('admin.orders.index'); //订单页面
});

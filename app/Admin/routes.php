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
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show'); //订单详情页面
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship'); //发货操作
    $router->post('orders/{order}/refund', 'OrdersController@handleRefund')->name('admin.orders.handle_refund');
    $router->get('coupon_codes', 'CouponCodesController@index'); //优惠卷展示页
    $router->post('coupon_codes', 'CouponCodesController@store');
    $router->get('coupon_codes/create', 'CouponCodesController@create');
    $router->get('coupon_codes/{id}/edit', 'CouponCodesController@edit');
    $router->put('coupon_codes/{id}', 'CouponCodesController@update');
    $router->delete('coupon_codes/{id}', 'CouponCodesController@destroy');
});

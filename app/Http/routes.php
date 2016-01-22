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


Route::get('/','Home\HomeController@index');
Route::get('/about','Home\HomeController@about');
Route::get('/employeers','Home\HomeController@employeers');
Route::get('/contact','Home\HomeController@contact');
Route::get('/product','Home\ProductController@index');
Route::get('/services','Home\ServicesController@index');
Route::get('/signup','Home\UserController@getCreate');
Route::get('/signin','Home\UserController@getLogin');
Route::get('/blog','Home\BlogController@index');
Route::get('/404','Home\ErrorController@notfound');
Route::get('/shopcart','Home\ShopCartController@index');

/**
*微信入口
*/
Route::any('/wechat', 'Wechat\WechatController@serve');
/*
*前台登录
*/
Route::get('user/login', ['as' => 'sinin', 'uses' => 'Home\UserController@getLogin']);
Route::post('user/login', ['as' => 'sinin', 'uses' => 'Home\UserController@postLogin']);
 
// 需要登录验证才能操作的接口
Route::group(array('before' => 'auth'), function()
{
    Route::get('user/logout', ['as' => 'logout', 'uses' => 'Home\UserController@getLogout']);
    Route::get('user/dashboard', ['as' => 'dashboard', 'uses' => 'Home\UserController@getDashboard']);
});

// 后台管理
Route::get('/admin/login', 'Admin\AuthController@login');
Route::post('/admin/login', 'Admin\AuthController@doLogin');
Route::get('/admin/logout', 'Admin\AuthController@logout');
Route::get('/admin', 'Admin\AuthController@login');

Route::group(array('middleware' => 'permission'), function () {

    Route::get('/admin/home', ['as' => 'admin', 'uses' => 'Admin\HomeController@index']);
    Route::resource('/admin/user', 'Admin\UserController');
    Route::resource('/admin/role', 'Admin\RoleController');
    Route::resource('/admin/action', 'Admin\ActionController');
    Route::resource('/admin/order', 'Admin\OrderController');
    Route::resource('/admin/good', 'Admin\GoodController');
    Route::resource('/admin/category', 'Admin\CategoryController');
    Route::get('/admin/attr', ['as' => 'attr', 'uses' => 'Admin\CategoryController@attr']);
    Route::resource('/admin/config', 'Admin\ConfigController');
});

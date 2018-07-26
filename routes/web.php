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

Route::get('/', function () {
    return view('welcome');
});
//配置点餐系统后平台路由
Route::domain('admin.eleb.com')->group(function () {
//    商家分类管理
    Route::get('shop_category/index',"Admin\ShopCategoryController@index")->name('shop_category.index');
    Route::any('shop_category/add',"Admin\ShopCategoryController@add")->name('shop_category.add');
    Route::any('shop_category/edit/{id}',"Admin\ShopCategoryController@edit")->name('shop_category.edit');
    Route::any('shop_category/del/{id}',"Admin\ShopCategoryController@del")->name('shop_category.del');

//    商家信息管理
    Route::get('shop/index',"Admin\ShopController@index")->name('shop.index');
    Route::any('shop/add',"Admin\ShopController@add")->name('shop.add');
    Route::any('shop/edit/{id}',"Admin\ShopController@edit")->name('shop.edit');
    Route::any('shop/del/{id}',"Admin\ShopController@del")->name('shop.del');
    Route::any('shop/check/{id}',"Admin\ShopController@check")->name('shop.check');
//管理员的注册管理
    Route::any('admin/logout',"Admin\AdminController@logout")->name('admin.logout');
    Route::any('admin/login',"Admin\AdminController@login")->name('admin.login');
    Route::get('admin/index',"Admin\AdminController@index")->name('admin.index');
    Route::any('admin/add',"Admin\AdminController@add")->name('admin.add');
    Route::any('admin/edit/{id}',"Admin\AdminController@edit")->name('admin.edit');
    Route::any('admin/del/{id}',"Admin\AdminController@del")->name('admin.del');
    Route::get('admin/index0',"Admin\AdminController@index0")->name('admin.index0');

//  商家个人信息管理
    Route::get('user/index',"Admin\UserController@index")->name('user.index');
    Route::any('user/edit/{id}',"Admin\UserController@edit")->name('user.edit');
    Route::any('user/del/{id}',"Admin\UserController@del")->name('user.del');
    Route::any('user/reset/{id}',"Admin\UserController@reset")->name('user.reset');
//   平台 活动管理
    Route::any('article/index',"Admin\ArticleController@index")->name('article.index');
    Route::any('article/add',"Admin\ArticleController@add")->name('article.add');
    Route::any('article/edit/{id}',"Admin\ArticleController@edit")->name('article.edit');
    Route::any('article/del/{id}',"Admin\ArticleController@del")->name('article.del');
});



Route::domain('shop.eleb.com')->namespace('Shop')->group(function () {
//    商家注册管理
    Route::any('user/logout',"UserController@logout")->name('user.logout');
    Route::any('user/login',"UserController@login")->name('user.login');
    Route::any('user/reg',"UserController@reg")->name('user.reg');
    Route::any('user/change',"UserController@change")->name('user.change');
    Route::any('user/index0',"UserController@index0")->name('user.index0');
    Route::any('user/index1',"UserController@index1")->name('user.index1');
    Route::any('user/index2',"UserController@index2")->name('user.index2');
    Route::any('user/index3',"UserController@index3")->name('user.index3');

//    菜品分类管理
    Route::any('menu_categories/index',"MenuCategoryController@index")->name('menu_categories.index');
    Route::any('menu_categories/add',"MenuCategoryController@add")->name('menu_categories.add');
    Route::any('menu_categories/edit/{id}',"MenuCategoryController@edit")->name('menu_categories.edit');
    Route::any('menu_categories/del/{id}',"MenuCategoryController@del")->name('menu_categories.del');

//    菜品表
    Route::any('menu/index',"MenuController@index")->name('menu.index');
    Route::any('menu/add',"MenuController@add")->name('menu.add');
    Route::any('menu/edit/{id}',"MenuController@edit")->name('menu.edit');
    Route::any('menu/del/{id}',"MenuController@del")->name('menu.del');


});

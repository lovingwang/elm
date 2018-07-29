<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//}
//商家列表和商家具体商品展示
Route::any('shop/list','Api\ShopController@list');
Route::any('shop/index','Api\ShopController@index');
//会员注册
Route::any('member/sms','Api\MemberController@sms');
Route::any('member/reg','Api\MemberController@reg');
Route::any('member/login','Api\MemberController@login');
//重置密码
Route::post('member/reset','Api\MemberController@reset');
//修改密码
Route::any('member/change','Api\MemberController@change');
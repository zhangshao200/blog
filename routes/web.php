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

Route::get("/wx/add","A\AController@add");
Route::get("/wx/app","A\AController@app");
Route::get("/wx/aces","A\AController@aces");
Route::get("/wx/content","A\AController@content");
//私钥验证签名
Route::get("/wx/status","A\AController@status");






//项目
Route::prefix('/login')->group(function (){
    //登录
    Route::get('/login','Admin\AdminController@login');
    Route::post('/index','Admin\AdminController@index');
    //注册
    Route::get('/add','Admin\AdminController@add');
    //支付
//    Route::any('/add','Admin\AdminController@add');
//    Route::any('/pay','Admin\AdminController@pay');
});

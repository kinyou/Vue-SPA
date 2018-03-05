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

//把都有请求都此路由来渲染
Route::any('{all}', function () {
	dump(['name'=>'vue-spa:' . time()]);
    return view('layouts.app');
})->where(['all'=>'.*']);

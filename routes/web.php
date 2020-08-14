<?php

use Illuminate\Support\Facades\Route;

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
//ホームページ
Route::get('/','IndexController@index');

//送信
Route::get('post','SendController@show');
Route::post('post/confirm','SendController@post');
Route::post('post/done','SendController@post');

//表示ページ
Route::get('show/{id}','ShowController@show');



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
Route::get('contact','IndexController@contact');
//送信
Route::get('send','SendController@show');
//送信確認
Route::post('send/confirm','SendController@confirm');
//送信完了
Route::get('send/done','SendController@post');

//表示ページ
Route::get('show/{id}','ShowController@show');



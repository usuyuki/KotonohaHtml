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
Route::get('/','IndexController@index');
Route::get('post','SendController@show');
Route::post('post','SendController@post');
// Route::post('post','MainController@post');
Route::get('show/{id}','ShowController@show');

// Route::get('/', function () 
//     return view('welcome');
// });

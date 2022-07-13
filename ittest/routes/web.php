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

Route::get('/', '\App\Http\Controllers\MainController@home');
Route::get('/articles', '\App\Http\Controllers\MainController@articles');
Route::get('/article/{id}', '\App\Http\Controllers\MainController@article')->name('one-article');

//Route::get('/articles/{slug}', function ($slug) {
//    return view('catalog');
//});


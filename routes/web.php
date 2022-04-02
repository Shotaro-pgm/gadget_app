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

Route::group(['prefix' => 'user'], function() {
  Route::get('article/create', 'App\Http\Controllers\User\ArticleController@add')->middleware('auth');
  Route::post('article/create', 'App\Http\Controllers\User\ArticleController@create')->middleware('auth');
  Route::get('article/edit', 'App\Http\Controllers\User\ArticleController@edit')->middleware('auth');
  Route::post('article/edit', 'App\Http\Controllers\User\ArticleController@update')->middleware('auth');
  Route::get('article/delete', 'App\Http\Controllers\User\ArticleController@delete')->middleware('auth');
  Route::get('article', 'App\Http\Controllers\User\ArticleController@index')->middleware('auth');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

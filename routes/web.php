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
  Route::get('article/create', 'App\Http\Controllers\User\ArticleController@add');
  Route::post('article/create', 'App\Http\Controllers\User\ArticleController@create');
  Route::get('article/edit', 'App\Http\Controllers\User\ArticleController@edit');
  Route::post('article/edit', 'App\Http\Controllers\User\ArticleController@update');
  Route::get('article/delete', 'App\Http\Controllers\User\ArticleController@delete');
  Route::get('article', 'App\Http\Controllers\User\ArticleController@index');
  Route::get('article/show/{id}', 'App\Http\Controllers\User\ArticleController@show');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

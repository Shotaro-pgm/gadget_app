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
  Route::get('profile/create', 'App\Http\Controllers\User\ProfileController@add');
  Route::post('profile/create', 'App\Http\Controllers\User\ProfileController@create');
  Route::get('profile/edit', 'App\Http\Controllers\User\ProfileController@edit');
  Route::post('profile/editgit', 'App\Http\Controllers\User\ProfileController@update');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

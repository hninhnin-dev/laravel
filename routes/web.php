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

Route::get('/', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('services', 'PageController@services')->name('services');
Route::get('contact', 'PageController@contact')->name('contact');
Route::get('article', 'PageController@article')->name('article');
Route::post('search','PageController@search')->name('search');
Route::get('detail/{id}','PageController@detail')->name('detail');
Route::get('categoralize/{id}', 'PageController@categoralize')->name('categoralize');

Auth::routes();

Route::prefix('portal')->middleware('auth')->group(function () {
Route::get('/', 'HomeController@index')->name('home');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
});

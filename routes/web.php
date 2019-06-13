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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');
Route::resource('tags', 'TagsController');
// Route::get('posts/tag/{id}', 'PostsController@show');

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

// Route::get('/about/{name}', function ($name) {
//     return "this page is about $name";
// });

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

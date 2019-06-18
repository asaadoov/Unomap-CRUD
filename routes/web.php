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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('service');
Route::get('/tags/{id}', 'TagsController@show')->name('getTag');
Route::resource('/posts', 'PostsController');
Route::resource('/tags', 'TagsController');

// Route::get('posts/tag/{id}', 'PostsController@show');

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

// Route::get('/about/{name}', function ($name) {
//     return "this page is about $name";
// });

// Route::get('/posts', 'PostsController@index')->name('posts');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

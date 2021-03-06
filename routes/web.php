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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function() {
    return view('admin.index');
});

Route::resource('admin/users', 'Admin\UsersController')->middleware('admin');
Route::resource('admin/posts', 'Admin\PostsController')->middleware('admin');

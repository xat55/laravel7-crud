<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// CRUD увидят ЛЮБЫЕ пользователи
// Route::resource('/posts', 'PostController');

// CRUD увидят только аутентифицированные пользователи
Route::group(['middleware' => 'auth'], function() {
  Route::resource('/posts', 'PostController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

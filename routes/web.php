<?php

use Illuminate\Support\Facades\Route;

// Если вам необходимо видеть все sql-запросы, выполняемые к БД на всех страницах вашего сайта можно воспользоваться следующей конструкцией:
// DB::listen(function($query) {
//   // dump($query->sql, $query->bindings, $query->time);
//   dump($query->sql);
// });

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', 'PostController');
// Route::resource('/posts', PostController::class);
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
// ルータで{id}と記述することでコントローラーのメソッドの引数で$idとして受け取れるようになる。
Route::get('/sample/{id}',[\App\Http\Controllers\Sample\IndexController::class,'showId']);
Route::get('/tweet',[\App\Http\Controllers\Tweet\IndexController::class]);

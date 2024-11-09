<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login.form');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

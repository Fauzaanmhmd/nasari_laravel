<?php

use Illuminate\Support\Facades\Route;
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login.form');
Route::post('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');


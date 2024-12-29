<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Acceso;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;



Route::get('/login', [LoginController::class, 'login_index'])->name('login_index');
Route::post('/login', [LoginController::class, 'login_index_post'])->name('login_index_post');
Route::get('/salir', [LoginController::class, 'login_salir'])->name('login_salir');

Route::middleware(Acceso::class)->group(function () {
    Route::get('/', [HomeController::class, 'home_index'])->name('home_index');
});
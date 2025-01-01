<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Acceso;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModulosController;
use App\Http\Controllers\PerfilesController;


Route::get('/login', [LoginController::class, 'login_index'])->name('login_index');
Route::post('/login', [LoginController::class, 'login_index_post'])->name('login_index_post');
Route::get('/salir', [LoginController::class, 'login_salir'])->name('login_salir');

Route::middleware(Acceso::class)->group(function () {
    Route::get('/', [HomeController::class, 'home_index'])->name('home_index');

    Route::get('/administracion/modulos', [ModulosController::class, 'modulos_index'])->name('modulos_index');
    Route::post('/administracion/modulos/post', [ModulosController::class, 'modulos_index_post'])->name("modulos_index_post");

    Route::get('/administracion/perfiles', [PerfilesController::class, 'perfiles_index'])->name("perfiles_index");
    Route::post('/administracion/perfiles/post', [PerfilesController::class, 'perfiles_index_post'])->name("perfiles_index_post");
    Route::get('/administracion/perfiles/editar/{id}', [PerfilesController::class, 'perfiles_editar'])->name("perfiles_editar");
    Route::post('/administracion/perfiles/editar', [PerfilesController::class, 'perfiles_editar_post'])->name("perfiles_editar_post");
});
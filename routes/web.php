<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/contenido', 'contenido')->name('contenido');
Route::view('/calendario', 'calendario')->name('calendario');
Route::view('/clasificacion', 'clasificacion')->name('clasificacion');

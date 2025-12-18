<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/plantilla', [HomeController::class, 'plantilla'])->name('plantilla');
Route::get('/calendario', [HomeController::class, 'calendario'])->name('calendario');
Route::get('/jugador/{slug}', [HomeController::class, 'jugador'])->name('jugador.show');

Route::view('/contenido', 'contenido')->name('contenido');
Route::view('/clasificacion', 'clasificacion')->name('clasificacion');


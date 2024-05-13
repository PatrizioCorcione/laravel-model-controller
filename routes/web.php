<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;


Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/piuVisti', [PageController::class, 'piuVisti'])->name('piuVisti');

Route::get('/dettagliFilm/{id}', [PageController::class, 'dettagliFilm'])->name('dettagliFilm');

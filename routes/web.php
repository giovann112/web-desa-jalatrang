<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', [BeritaController::class, 'index']);
// Route baru untuk halaman baca selengkapnya
Route::get('/berita/{id}', [BeritaController::class, 'show']);
Route::get('/berita/{id}', [App\Http\Controllers\BeritaController::class, 'show']);
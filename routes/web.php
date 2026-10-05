<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

// 1. Halaman Utama (Daftar Berita)
Route::get('/', [BeritaController::class, 'index'])->name('berita.index');

// 2. Form Tambah Berita (HARUS di atas rute {id})
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');

// 3. Proses Simpan Data dari Form (Menjalankan fungsi store & @csrf)
Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');

// 4. Halaman Detail Berita / Baca Selengkapnya (Menggunakan {id} atau Route Model Binding)
Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');

// 5. Proses Simpan Komentar (BARU)
Route::post('/berita/{id}/komentar', [BeritaController::class, 'storeKomentar'])->name('komentar.store');

// 6. Fitur Edit, Update, dan Hapus (Opsional jika nanti digunakan)
Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');
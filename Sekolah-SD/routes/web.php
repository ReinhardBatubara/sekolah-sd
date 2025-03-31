<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;use App\Http\Controllers\BeritaController;

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');
use App\Http\Controllers\GuruController;

Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
use App\Http\Controllers\SiswaController;

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');


Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

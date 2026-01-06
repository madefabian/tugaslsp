<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{slug}', [ArtikelController::class, 'show'])->name('artikel.show');



Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/service', [ServiceController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

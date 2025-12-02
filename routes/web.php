<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingController;

// --- Rute Publik (Tanpa Login & Tanpa Database Pengumuman) ---

// 1. Halaman Utama (Beranda)
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// 2. Halaman Navigasi
Route::get('/navigasi', function () {
    return view('navigasi');
})->name('navigasi');

// 3. Halaman Parkir
Route::get('/parkir', [ParkingController::class, 'index'])->name('parkir.index');
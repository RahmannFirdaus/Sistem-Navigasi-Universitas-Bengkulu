<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Models\Pengumuman; // Pastikan import ini ada

// Halaman utama akan diarahkan ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// --- Rute untuk Tamu (Guest) ---
Route::middleware('guest')->group(function () {
    // ... (Rute register, login, forgot-password tidak berubah) ...
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('forgot-password', [PasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink($request->only('email'));
        return $status === Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withErrors(['email' => __($status)]);
    })->name('password.email');
    Route::get('reset-password/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
        $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
            $user->forceFill(['password' => Illuminate\Support\Facades\Hash::make($password)])->save();
        });
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => __($status)]);
    })->name('password.update');
});

// --- Rute untuk Pengguna yang Sudah Login ---
Route::middleware(['auth'])->group(function () {
    
    Route::get('/beranda', function () {
        $pengumuman = Pengumuman::orderBy('created_at', 'desc')->take(5)->get();
        return view('beranda', ['pengumuman' => $pengumuman]);
    })->name('beranda');

    Route::get('/navigasi', function () {
        return view('navigasi');
    })->name('navigasi');

    Route::get('/parkir', [ParkingController::class, 'index'])->name('parkir.index');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// --- RUTE ADMIN ---
Route::middleware(['auth', 'is.admin'])->prefix('admin')->group(function () {
    
    // ✨ PERUBAHAN DI SINI: Rute Beranda Admin kini mengambil data dinamis ✨
    Route::get('/beranda', function () {
        // 1. Ambil jumlah data pengumuman secara dinamis
        $jumlahPengumuman = Pengumuman::count();
        
        // 2. Kirim data ke view
        return view('admin.beranda', [
            'jumlahPengumuman' => $jumlahPengumuman
        ]); 
    })->name('admin.beranda');
    
    // Manajemen Pengumuman
    Route::resource('pengumuman', PengumumanController::class)->names('admin.pengumuman');
});
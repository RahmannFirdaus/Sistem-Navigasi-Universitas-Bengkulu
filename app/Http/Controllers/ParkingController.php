<?php

namespace App\Http\Controllers;

use Illuminate\View\View; // Import View

class ParkingController extends Controller
{
    /**
     * Menampilkan halaman daftar parkir beserta peta.
     */
    public function index(): View
    {
        // Di aplikasi nyata, Anda akan mengambil data parkir dari database.
        // Untuk sekarang, kita biarkan JavaScript yang mengelola data contoh.
        return view('parkir');
    }
}
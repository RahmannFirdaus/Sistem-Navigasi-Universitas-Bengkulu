<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    // Menampilkan halaman lupa password
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    // Menampilkan halaman reset password dari link email
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.reset-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
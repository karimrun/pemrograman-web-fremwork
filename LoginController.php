<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // ✅ PERBAIKAN 1: Coba login dulu, lalu cek apakah admin
        if (Auth::attempt($credentials)) {
            // ✅ PERBAIKAN 2: Cek apakah user adalah admin
            if (Auth::user()->is_admin == 1) {
                $request->session()->regenerate();
                // ✅ PERBAIKAN 3: Redirect ke admin dashboard yang benar
                return redirect()->intended('/admin/dashboard');
            } else {
                // Logout jika bukan admin
                Auth::logout();
                return redirect()->back()->withErrors([
                    'email' => 'Anda bukan administrator.'
                ]);
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // ✅ PERBAIKAN 4: Redirect ke beranda yang benar
        return redirect('/')->with('success', 'Anda telah berhasil logout!');
    }
}
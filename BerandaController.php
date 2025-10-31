<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // ✅ PASTIKAN mengarah ke view beranda
        return view('beranda');
    }
}
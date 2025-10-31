<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function kirim(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string|max:15',
            'pesan' => 'required|string|min:5'
        ]);

        // Ambil data dari form
        $nama = $request->nama;
        $email = $request->email;
        $no_hp = $request->no_hp;
        $pesan = $request->pesan;

        // Format pesan untuk WhatsApp
        $text = "Halo! Saya ingin menghubungi Anda.\n\n";
        $text .= "📋 *Data Pengirim:*\n";
        $text .= "• Nama: $nama\n";
        $text .= "• Email: $email\n";
        $text .= "• No. HP: $no_hp\n\n";
        $text .= "💬 *Pesan:*\n$pesan";

        // Nomor tujuan WhatsApp
        $no_tujuan = "62812670451";
        
        // Encode text untuk URL
        $encoded_text = urlencode($text);
        
        // Buat URL WhatsApp
        $url = "https://api.whatsapp.com/send?phone=$no_tujuan&text=$encoded_text";

        // Redirect ke WhatsApp
        return redirect()->away($url);
    }
}
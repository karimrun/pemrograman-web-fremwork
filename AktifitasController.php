<?php

namespace App\Http\Controllers;

use App\Models\Aktifitas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AktifitasController extends Controller
{
    public function index()
    {
        $data = Aktifitas::latest()->get();
        return view("aktifitas.index", compact("data"));
    }

    public function create()
    {
        return view("aktifitas.create");
    }

    public function store(Request $request)
{
    
    $request->validate([
        'nama_aktifitas' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'tanggal' => 'required|date',
        'status'=> 'nullable|boolean'
    ]);

    Aktifitas::create($request->all());
    
    return redirect('aktifitas')->with('success', 'Aktifitas berhasil ditambahkan!');
}

    public function edit($id)
    {
        $aktifitas = Aktifitas::findOrFail($id);
        return view('aktifitas.edit', compact('aktifitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_aktifitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'status'=> 'nullable|boolean'
        ]);

        $aktifitas = Aktifitas::findOrFail($id);
        $aktifitas->update($request->all());

        return redirect()->route('aktifitas.index')->with('success', 'Aktifitas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $aktifitas = Aktifitas::findOrFail($id);
        $aktifitas->delete();

        return redirect()->route('aktifitas.index')->with('success', 'Aktifitas berhasil dihapus!');
    }
    public function show($id)
    {
        $aktifitas = Aktifitas::findOrFail($id);
        return view('aktifitas.show', compact('aktifitas'));
    }
}
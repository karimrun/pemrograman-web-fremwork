<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aktifitas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="crad">
        <div class="card-body">
            <h5 class="card-title">{{ $aktifitas->nama_aktifitas }}</h5>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $aktifitas->deskripsi }}</p>
            <p class="card-text"><strong>Tanggal Mulai:</strong> {{ $aktifitas->tanggal_mulai }}</p>
            <p class="card-text"><strong>Tanggal Selesai:</strong> {{ $aktifitas->tanggal_selesai }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $aktifitas->status }}</p>
            <a href="{{ route('aktifitas.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    
</head>

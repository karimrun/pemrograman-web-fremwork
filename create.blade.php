<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Aktifitas - MyPortfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .nav-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .btn-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            border-radius: 25px;
            padding: 10px 25px;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
            color: white;
        }
        .nav-link.active {
            background: rgba(255,255,255,0.2);
            border-radius: 10px;
        }
        .form-section {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: calc(100vh - 200px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-rocket me-2"></i>MyPortfolio
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">
                    <i class="fas fa-home me-1"></i>Beranda
                </a>
                <a class="nav-link" href="/datadiri">
                    <i class="fas fa-user me-1"></i>Data Diri
                </a>
                <a class="nav-link active" href="/aktifitas">
                    <i class="fas fa-tasks me-1"></i>Aktifitas
                </a>
                <a class="nav-link" href="/kontak">
                    <i class="fas fa-envelope me-1"></i>Kontak
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-4">
        <div class="container text-center">
            <h1 class="fw-bold mb-3">Tambah Aktifitas Baru</h1>
            <p class="lead">Isi form berikut untuk menambahkan aktifitas baru</p>
        </div>
    </section>

    <!-- Add Activity Form Section -->
    <section class="form-section text-white py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Tambah Aktifitas Baru</h4>
                        </div>
                        <div class="card-body">
                            <!-- Tambahkan pesan error/success -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <strong>Terjadi kesalahan:</strong>
                                    <ul class="mb-0 mt-2">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <form action="{{ route('aktifitas.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_aktifitas" class="form-label">
                                        Nama Aktifitas <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" 
                                           id="nama_aktifitas" name="nama_aktifitas" 
                                           value="{{ old('nama_aktifitas') }}"
                                           placeholder="Masukkan nama aktifitas" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">
                                        Deskripsi <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" 
                                              id="deskripsi" name="deskripsi" 
                                              rows="4" placeholder="Masukkan deskripsi aktifitas" required>{{ old('deskripsi') }}</textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">
                                        Tanggal <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" class="form-control" 
                                           id="tanggal" name="tanggal" 
                                           value="{{ old('tanggal', date('Y-m-d')) }}" required>
                                </div>
                                
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-success flex-fill">
                                        <i class="fas fa-save me-2"></i>Simpan Aktifitas
                                    </button>
                                    <a href="/aktifitas" class="btn btn-secondary">
                                        <i class="fas fa-times me-2"></i>Batal
                                    </a>
                                </div>
                                
                                <div class="mt-3">
                                    <small class="text-muted">
                                        <span class="text-danger">*</span> Menandakan field wajib diisi
                                    </small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="nav-custom text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="fw-bold mb-2"><i class="fas fa-rocket me-2"></i>MyPortfolio</h5>
                    <p class="mb-0">Membuat aplikasi web modern dengan teknologi terkini.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-github fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="text-center">
                <p class="mb-0">
                    &copy; 2025 MyPortfolio. All rights reserved. | 
                    <a href="/" class="text-white">Beranda</a> | 
                    <a href="/datadiri" class="text-white">Data Diri</a> | 
                    <a href="/aktifitas" class="text-white">Aktifitas</a> | 
                    <a href="/kontak" class="text-white">Kontak</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Set tanggal default ke hari ini jika belum ada value
        document.addEventListener('DOMContentLoaded', function() {
            const tanggalInput = document.getElementById('tanggal');
            if (tanggalInput && !tanggalInput.value) {
                const today = new Date();
                const yyyy = today.getFullYear();
                const mm = String(today.getMonth() + 1).padStart(2, '0');
                const dd = String(today.getDate()).padStart(2, '0');
                tanggalInput.value = `${yyyy}-${mm}-${dd}`;
            }
        });
    </script>
</body>
</html>
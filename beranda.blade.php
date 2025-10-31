<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - MyPortfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .nav-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .feature-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .btn-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            border-radius: 25px;
            padding: 10px 25px;
            transition: transform 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
            color: white;
        }
        .btn-admin {
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.3);
            color: white;
            border-radius: 25px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        .btn-admin:hover {
            background: rgba(255,255,255,0.3);
            border-color: rgba(255,255,255,0.5);
            color: white;
        }
        .nav-link.active {
            background: rgba(255,255,255,0.2);
            border-radius: 10px;
        }
        .profile-img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .fallback-img {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 5rem;
            border: 5px solid white;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-custom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-rocket me-2"></i>MyPortfolio
            </a>
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">
                            <i class="fas fa-home me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datadiri">
                            <i class="fas fa-user me-1"></i>Data Diri
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aktifitas">
                            <i class="fas fa-tasks me-1"></i>Aktifitas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">
                            <i class="fas fa-envelope me-1"></i>Kontak
                        </a>
                    </li>
                    <!--  TOMBOL LOGIN ADMIN -->
                    <li class="nav-item">
                        <a href="{{ route('admin.login') }}" class="btn btn-admin ms-2">
                            <i class="fas fa-shield-alt me-1"></i>Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-3">Selamat Datang di Portfolio Saya</h1>
                    <p class="lead mb-4">
                        Halo! Saya seorang web developer yang passionate dalam membuat aplikasi web modern menggunakan Laravel dan teknologi terkini.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="/datadiri" class="btn btn-light btn-custom">
                            <i class="fas fa-user me-2"></i>Lihat Profil Saya
                        </a>
                        <a href="/kontak" class="btn btn-outline-light">
                            <i class="fas fa-envelope me-2"></i>Hubungi Saya
                        </a>
                        <!-- ✅ TOMBOL LOGIN ADMIN DI HERO SECTION -->
                        <a href="{{ route('admin.login') }}" class="btn btn-outline-light">
                            <i class="fas fa-shield-alt me-2"></i>Area Admin
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <!-- Foto dengan fallback -->
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('img/foto1.jpg') }}" 
                             alt="Foto Profil" 
                             class="profile-img rounded-circle"
                             onerror="this.style.display='none'; document.getElementById('fallback-hero-img').style.display='flex';">
                        <div id="fallback-hero-img" class="profile-img rounded-circle fallback-img" style="display: none;">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Keahlian & Layanan</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card bg-white p-4 text-center h-100">
                        <div class="text-primary mb-3">
                            <i class="fas fa-code fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Web Development</h4>
                        <p class="text-muted">
                            Membangun aplikasi web modern dengan Laravel, React, dan teknologi terbaru.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card bg-white p-4 text-center h-100">
                        <div class="text-primary mb-3">
                            <i class="fas fa-mobile-alt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Responsive Design</h4>
                        <p class="text-muted">
                            Desain yang optimal di semua perangkat dari desktop hingga mobile.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card bg-white p-4 text-center h-100">
                        <div class="text-primary mb-3">
                            <i class="fas fa-database fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Database Expert</h4>
                        <p class="text-muted">
                            Management database MySQL, PostgreSQL dengan optimasi terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin Access Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="feature-card bg-white p-5">
                        <div class="text-primary mb-4">
                            <i class="fas fa-shield-alt fa-4x"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Akses Administrator</h3>
                        <p class="text-muted mb-4">
                            Untuk mengelola konten portfolio, aktivitas, dan data lainnya, silakan masuk ke area administrator.
                        </p>
                        <!-- ✅ TOMBOL LOGIN ADMIN DI SECTION KHUSUS -->
                        <a href="{{ route('admin.login') }}" class="btn btn-custom btn-lg">
                            <i class="fas fa-sign-in-alt me-2"></i>Masuk Sebagai Admin
                        </a>
                        <div class="mt-3">
                            <small class="text-muted">
                                <i class="fas fa-info-circle me-1"></i>
                                Hanya untuk administrator yang berwenang
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="hero-bg text-white rounded-3 p-5 text-center">
                <h3 class="fw-bold mb-3">Siap Memulai Project Anda?</h3>
                <p class="mb-4">Mari diskusikan ide Anda dan wujudkan menjadi aplikasi yang powerful dan scalable.</p>
                <a href="/kontak" class="btn btn-light btn-custom">
                    <i class="fas fa-paper-plane me-2"></i>Hubungi Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="nav-custom text-white py-4 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="fw-bold mb-3"><i class="fas fa-rocket me-2"></i>MyPortfolio</h5>
                    <p class="mb-0">Portfolio pribadi dengan teknologi modern dan design yang elegan.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-github fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
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
                    <a href="/kontak" class="text-white">Kontak</a> |
                    <!-- ✅ LINK ADMIN DI FOOTER -->
                    <a href="{{ route('admin.login') }}" class="text-white">Admin</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
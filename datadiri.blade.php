<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri - MyPortfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .nav-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .profile-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .profile-card:hover {
            transform: translateY(-5px);
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
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .skill-badge {
            background: #667eea;
            color: white;
        }
        .fallback-img {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
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
                <a class="nav-link active" href="/datadiri">
                    <i class="fas fa-user me-1"></i>Data Diri
                </a>
                <a class="nav-link" href="/aktifitas">
                    <i class="fas fa-tasks me-1"></i>Aktifitas
                </a>
                <a class="nav-link" href="/kontak">
                    <i class="fas fa-envelope me-1"></i>Kontak
                </a>
                  <li class="nav-item">
                        <a href="{{ route('admin.login') }}" class="btn btn-admin ms-2">
                            <i class="fas fa-shield-alt me-1"></i>Admin
                        </a>
                 </li>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-4">
        <div class="container text-center">
            <h1 class="fw-bold mb-3">Data Diri & Profil</h1>
            <p class="lead">Kenali lebih dekat tentang latar belakang dan keahlian saya</p>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Profile Info -->
                <div class="col-lg-4 mb-4">
                    <div class="profile-card bg-white p-4 text-center">
                        <!-- Foto dengan fallback jika tidak ada -->
                        <div class="position-relative">
                            <img src="{{ asset('img/foto1.jpg') }}" 
                                 alt="Foto Profil" 
                                 class="profile-img rounded-circle mb-3"
                                 onerror="this.style.display='none'; document.getElementById('fallback-img').style.display='flex';">
                            <div id="fallback-img" class="profile-img rounded-circle mb-3 fallback-img" style="display: none;">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        
                        <h4 class="fw-bold">Hafid Nur Karim</h4>
                        <p class="text-primary mb-3">2023150071</p>
                        
                        <div class="text-start mb-3">
                            <p><i class="fas fa-envelope me-2 text-primary"></i> karim.run04@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt me-2 text-primary"></i> Wonosobo, Jawa Tengah</p>
                        </div>

                        <div class="d-flex justify-content-center gap-3 mb-3">
                            <a href="#" class="text-primary"><i class="fab fa-linkedin fa-lg"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-github fa-lg"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-instagram fa-lg"></i></a>
                        </div>

                        <a href="/kontak" class="btn btn-custom w-100">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Saya
                        </a>
                    </div>
                </div>

                <!-- About & Skills -->
                <div class="col-lg-8">
                    <!-- About Me -->
                    <div class="profile-card bg-white p-4 mb-4">
                        <h4 class="fw-bold mb-3"><i class="fas fa-user me-2 text-primary"></i>Tentang Saya</h4>
                        <p class="text-muted">
                            Saya adalah seorang Web Developer dengan pengalaman 3 tahun dalam mengembangkan aplikasi web menggunakan Laravel, React, dan teknologi modern lainnya. Passionate dalam menciptakan solusi digital yang inovatif, user-friendly, dan scalable.
                        </p>
                        <p class="text-muted mb-0">
                            Senang belajar teknologi baru dan selalu berusaha memberikan yang terbaik dalam setiap project yang dikerjakan.
                        </p>
                    </div>

                    <!-- Skills -->
                    <div class="profile-card bg-white p-4 mb-4">
                        <h4 class="fw-bold mb-3"><i class="fas fa-cogs me-2 text-primary"></i>Keahlian</h4>
                        <div class="mb-3">
                            <span class="badge skill-badge me-1 mb-1">Laravel</span>
                            <span class="badge skill-badge me-1 mb-1">PHP</span>
                            <span class="badge skill-badge me-1 mb-1">JavaScript</span>
                            <span class="badge skill-badge me-1 mb-1">MySQL</span>
                            <span class="badge skill-badge me-1 mb-1">Bootstrap</span>
                        </div>
                    </div>

                    <!-- Experience & Education -->
                        <div class="col-md-6">
                            <div class="profile-card bg-white p-4 h-100">
                                <h5 class="fw-bold mb-3"><i class="fas fa-graduation-cap me-2 text-primary"></i>Pendidikan</h5>
                                <div class="mb-3">
                                    <h6 class="fw-bold mb-1">Universitas Sains Al Qur'an</h6>
                                    <p class="text-primary mb-1">Teknik Informatika</p>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">SMK Al Mahrusiyah</h6>
                                    <p class="text-primary mb-1">TKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="nav-custom text-white py-4 mt-5">
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
</body>
</html>
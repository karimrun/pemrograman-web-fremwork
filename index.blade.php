<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: 600;
            color: white !important;
        }
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
        }
        .welcome-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 30px;
            border: none;
        }
        .welcome-card h1 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 700;
        }
        .welcome-card p {
            color: #7f8c8d;
            font-size: 1.1em;
        }
        .stats-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
            border: none;
            transition: transform 0.3s ease;
        }
        .stats-card:hover {
            transform: translateY(-5px);
        }
        .stats-number {
            font-size: 2.5em;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 0;
        }
        .stats-label {
            color: #7f8c8d;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn-logout {
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.3);
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .btn-logout:hover {
            background: rgba(255,255,255,0.3);
            border-color: rgba(255,255,255,0.5);
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-cogs me-2"></i>Admin Panel
            </a>
            <div class="navbar-nav ms-auto">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i> Administrator
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <!-- ✅ PERBAIKAN: route('admin.logout') -->
                            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="dashboard-container">
        <!-- Welcome Section -->
        <div class="welcome-card">
            <h1>Selamat Datang Di Halaman Admin</h1>
            <p class="lead">Kelola aplikasi dengan mudah menggunakan menu navigasi di bawah ini.</p>
        </div>

        <!-- Statistics Cards -->
        <div class="row g-4">
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <h3 class="stats-number">150</h3>
                    <p class="stats-label">Total Pengguna</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <h3 class="stats-number">45</h3>
                    <p class="stats-label">Aktivitas</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <h3 class="stats-number">28</h3>
                    <p class="stats-label">Pesan Baru</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <h3 class="stats-number">95%</h3>
                    <p class="stats-label">System Uptime</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="welcome-card">
                    <h4>Quick Actions</h4>
                    <div class="row mt-4">
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('aktifitas.index') }}" class="btn btn-primary w-100 py-3">
                                <i class="fas fa-tasks me-2"></i>Kelola Aktivitas
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="#" class="btn btn-success w-100 py-3">
                                <i class="fas fa-users me-2"></i>Kelola Pengguna
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('kontak') }}" class="btn btn-info w-100 py-3">
                                <i class="fas fa-envelope me-2"></i>Lihat Pesan
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <button type="button" class="btn btn-warning w-100 py-3" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Logout Confirmation -->
    <div class="modal fade" id="logoutModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <!-- ✅ PERBAIKAN: route('admin.logout') -->
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Ya, Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
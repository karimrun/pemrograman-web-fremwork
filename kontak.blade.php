<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - MyPortfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .nav-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .contact-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .contact-card:hover {
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
        .contact-icon {
            font-size: 2rem;
            color: #667eea;
            margin-bottom: 15px;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .btn-whatsapp {
            background: #25D366;
            border: none;
            color: white;
            border-radius: 25px;
            padding: 12px 30px;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }
        .btn-whatsapp:hover {
            background: #128C7E;
            transform: translateY(-2px);
            color: white;
        }
        .loading {
            display: none;
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
                <a class="nav-link" href="/aktifitas">
                    <i class="fas fa-tasks me-1"></i>Aktifitas
                </a>
                <a class="nav-link active" href="/kontak">
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
            <h1 class="fw-bold mb-3">Hubungi Saya</h1>
            <p class="lead">Mari berdiskusi tentang project atau kolaborasi yang Anda inginkan</p>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-card bg-white p-4 text-center h-100">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Alamat</h5>
                        <p class="text-muted">
                            Kertek, Wonosobo, Jawa Tengah
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card bg-white p-4 text-center h-100">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5>Telepon/WhatsApp</h5>
                        <p class="text-muted">
                            +62 812-6704-51
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card bg-white p-4 text-center h-100">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Email</h5>
                        <p class="text-muted">
                            karim.run04@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-card bg-white p-4">
                        <h3 class="text-center mb-4">Kirim Pesan via WhatsApp</h3>
                        
                        <div id="errorAlert" class="alert alert-danger alert-dismissible fade show" style="display: none;">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <span id="errorMessage">Terdapat kesalahan dalam pengisian form. Silakan periksa kembali.</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                        <form id="whatsappForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                                    <small id="namaError" class="text-danger" style="display: none;"></small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="nama@email.com" required>
                                    <small id="emailError" class="text-danger" style="display: none;"></small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. Handphone <span class="text-danger">*</span></label>
                                <input type="tel" id="no_hp" name="no_hp" class="form-control" placeholder="0812-3456-7890" required>
                                <small id="noHpError" class="text-danger" style="display: none;"></small>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Pesan <span class="text-danger">*</span></label>
                                <textarea id="pesan" name="pesan" class="form-control" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                                <small id="pesanError" class="text-danger" style="display: none;"></small>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-whatsapp btn-lg" id="submitBtn">
                                    <i class="fab fa-whatsapp me-2"></i>Kirim via WhatsApp
                                </button>
                                <div class="loading mt-3" id="loadingSpinner">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <p class="mt-2 text-muted">Membuka WhatsApp...</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media -->
    <section class="py-5">
        <div class="container text-center">
            <h3 class="fw-bold mb-4">Ikuti Saya di Media Sosial</h3>
            <div class="d-flex justify-content-center gap-4">
                <a href="#" class="text-primary text-decoration-none">
                    <i class="fab fa-linkedin fa-2x"></i>
                    <p class="mt-2 mb-0">LinkedIn</p>
                </a>
                <a href="#" class="text-dark text-decoration-none">
                    <i class="fab fa-github fa-2x"></i>
                    <p class="mt-2 mb-0">GitHub</p>
                </a>
                <a href="#" class="text-danger text-decoration-none">
                    <i class="fab fa-instagram fa-2x"></i>
                    <p class="mt-2 mb-0">Instagram</p>
                </a>
                <a href="#" class="text-primary text-decoration-none">
                    <i class="fab fa-twitter fa-2x"></i>
                    <p class="mt-2 mb-0">Twitter</p>
                </a>
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
    
    <script>
        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset error messages
            hideAllErrors();
            
            // Get form values
            const nama = document.getElementById('nama').value.trim();
            const email = document.getElementById('email').value.trim();
            const no_hp = document.getElementById('no_hp').value.trim();
            const pesan = document.getElementById('pesan').value.trim();
            
            // Validation
            let isValid = true;
            
            if (!nama) {
                showError('namaError', 'Nama lengkap harus diisi');
                isValid = false;
            }
            
            if (!email) {
                showError('emailError', 'Email harus diisi');
                isValid = false;
            } else if (!isValidEmail(email)) {
                showError('emailError', 'Format email tidak valid');
                isValid = false;
            }
            
            if (!no_hp) {
                showError('noHpError', 'Nomor handphone harus diisi');
                isValid = false;
            } else if (!isValidPhone(no_hp)) {
                showError('noHpError', 'Format nomor handphone tidak valid');
                isValid = false;
            }
            
            if (!pesan) {
                showError('pesanError', 'Pesan harus diisi');
                isValid = false;
            } else if (pesan.length < 5) {
                showError('pesanError', 'Pesan minimal 5 karakter');
                isValid = false;
            }
            
            if (!isValid) {
                showMainError('Terdapat kesalahan dalam pengisian form. Silakan periksa kembali.');
                return;
            }
            
            // Show loading
            document.getElementById('submitBtn').style.display = 'none';
            document.getElementById('loadingSpinner').style.display = 'block';
            
            // Format message for WhatsApp
            const text = `Halo! Saya ingin menghubungi Anda.\n\n` +
                        `📋 *Data Pengirim:*\n` +
                        `• Nama: ${nama}\n` +
                        `• Email: ${email}\n` +
                        `• No. HP: ${no_hp}\n\n` +
                        `💬 *Pesan:*\n${pesan}`;
            
            // WhatsApp number (international format without +)
            const no_tujuan = "62812670451";
            
            // Encode text for URL
            const encoded_text = encodeURIComponent(text);
            
            // Create WhatsApp URL
            const url = `https://api.whatsapp.com/send?phone=${no_tujuan}&text=${encoded_text}`;
            
            // Open WhatsApp after a short delay to show loading
            setTimeout(() => {
                window.open(url, '_blank');
                
                // Reset form and hide loading
                document.getElementById('whatsappForm').reset();
                document.getElementById('submitBtn').style.display = 'block';
                document.getElementById('loadingSpinner').style.display = 'none';
            }, 1000);
        });
        
        function showError(elementId, message) {
            const element = document.getElementById(elementId);
            element.textContent = message;
            element.style.display = 'block';
        }
        
        function hideAllErrors() {
            const errorElements = document.querySelectorAll('[id$="Error"]');
            errorElements.forEach(element => {
                element.style.display = 'none';
            });
            document.getElementById('errorAlert').style.display = 'none';
        }
        
        function showMainError(message) {
            document.getElementById('errorMessage').textContent = message;
            document.getElementById('errorAlert').style.display = 'block';
        }
        
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
        
        function isValidPhone(phone) {
            const phoneRegex = /^[0-9+\-\s()]{10,15}$/;
            return phoneRegex.test(phone);
        }
        
        // Real-time validation
        document.getElementById('nama').addEventListener('input', function() {
            if (this.value.trim()) {
                document.getElementById('namaError').style.display = 'none';
            }
        });
        
        document.getElementById('email').addEventListener('input', function() {
            if (this.value.trim() && isValidEmail(this.value)) {
                document.getElementById('emailError').style.display = 'none';
            }
        });
        
        document.getElementById('no_hp').addEventListener('input', function() {
            if (this.value.trim() && isValidPhone(this.value)) {
                document.getElementById('noHpError').style.display = 'none';
            }
        });
        
        document.getElementById('pesan').addEventListener('input', function() {
            if (this.value.trim() && this.value.length >= 10) {
                document.getElementById('pesanError').style.display = 'none';
            }
        });
    </script>
</body>
</html>
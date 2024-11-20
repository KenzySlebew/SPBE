<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPBE Kabupaten Banjar</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40">
                    <span class="ms-3 fw-bold">SPBE KAB. BANJAR</span>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil SPBE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan Elektronik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Monitoring & Evaluasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita & Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-section" data-scroll>Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inovasi & Pengembangan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all links with data-scroll attribute
        const scrollLinks = document.querySelectorAll('a[data-scroll]');
        
        scrollLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = targetElement.offsetTop - navbarHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
    </script>
</body>
</html>
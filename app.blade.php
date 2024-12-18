<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPBE Kabupaten Banjar</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('css/profil-spbe.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark at-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40">
                <span class="ms-3 fw-bold">SPBE KAB. BANJAR</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profil.spbe') }}">Profil SPBE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service-section">Layanan Elektronik</a>
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
                        <a class="nav-link" href="#contact-section">Kontak</a>
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

    <!-- Navbar Sticky Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('mainNav');
            const body = document.body;

            function updateNavbar() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                    navbar.classList.remove('at-top');
                    body.classList.add('has-fixed-nav');
                } else {
                    navbar.classList.remove('scrolled');
                    navbar.classList.add('at-top');
                    body.classList.remove('has-fixed-nav');
                }
            }

            // Initial check and scroll event listener
            updateNavbar();
            window.addEventListener('scroll', updateNavbar);
        });
    </script>
    {{-- @yield('scripts') --}}
</body>
</html>
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<!-- Hero Section with Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Add Carousel Navigation Arrows -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <!-- Add Carousel Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('images/banner4.jpg') }}" class="w-100" alt="Banner SPBE" style="height: 600px; object-fit: cover;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0,0,0,0.5);">
                <div class="container text-white text-center">
                    <h1 class="display-5 fw-bold">Sistem Pemerintahan Berbasis Elektronik</h1>
                    <h2 class="h1 mb-4">Kabupaten Banjar</h2>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('images/banner1.jpg') }}" class="w-100" alt="Banner SPBE" style="height: 600px; object-fit: cover;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0,0,0,0.5);">
                <div class="container text-white text-center">
                    <h1 class="display-5 fw-bold">Sistem Pemerintahan Berbasis Elektronik</h1>
                    <h2 class="h1 mb-4">Kabupaten Banjar</h2>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="{{ asset('images/banner2.jpg') }}" class="w-100" alt="Banner SPBE" style="height: 600px; object-fit: cover;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0,0,0,0.5);">
                <div class="container text-white text-center">
                    <h1 class="display-5 fw-bold">Sistem Pemerintahan Berbasis Elektronik</h1>
                    <h2 class="h1 mb-4">Kabupaten Banjar</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add custom styles -->
<style>
.carousel-control-prev,
.carousel-control-next {
    width: 5%;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.carousel:hover .carousel-control-prev,
.carousel:hover .carousel-control-next {
    opacity: 0.8;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 2rem;
    border-radius: 50%;
    background-size: 50%;
}

.carousel-indicators {
    margin-bottom: 2rem;
}

.carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 0 5px;
    background-color: rgba(255, 255, 255, 0.5);
    border: 2px solid transparent;
}

.carousel-indicators button.active {
    background-color: #fff;
}
</style>

<!-- SPBE Description Section -->
<section class="spbe-description py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">Apa itu SPBE?</h2>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Definisi SPBE</h3>
                        <p>Sistem Pemerintahan Berbasis Elektronik (SPBE) adalah penyelenggaraan pemerintahan yang memanfaatkan teknologi informasi dan komunikasi untuk memberikan layanan kepada pengguna SPBE.</p>

                        <h3 class="h5 mb-3">Tujuan SPBE</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Mewujudkan tata kelola pemerintahan yang bersih, efektif, transparan, dan akuntabel</li>
                            <li class="mb-2">✓ Mewujudkan pelayanan publik yang berkualitas dan terpercaya</li>
                            <li class="mb-2">✓ Meningkatkan keterpaduan dan efisiensi penyelenggaraan SPBE</li>
                        </ul>

                        <h3 class="h5 mb-3">Manfaat SPBE</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">✓ Meningkatnya efisiensi anggaran untuk pembangunan Pemerintahan Berbasis Elektronik</li>
                            <li class="mb-2">✓ Mendukung terwujudnya Satu Data Indonesia melalui bagi pakai data antar Instansi Pemerintah dan Pemerintah Daerah</li>
                            <li class="mb-2">✓ Mendorong penggunaan aplikasi umum berbagi pakai di Instansi Pemerintah dan Pemerintah Daerah</li>
                            <li class="mb-2">✓ Meningkatnya utilisasi infrastruktur TIK yang terintegrasi dan berbagi pakai bagi Instansi Pemerintah dan Pemerintah Daerah</li>
                            <li class="mb-2">✓ Terwujudnya keamanan informasi pemerintah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Navigation Button Section -->
<section class="nav-button-section py-5" style="background-color: #1e2a3b;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="text-white mb-3">Profil Lengkap SPBE</h1>
                {{-- <p class="text-white mb-4">Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi</p> --}}
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/profil-spbe" class="btn btn-danger btn-lg">
                    Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Infografis Section -->
<section class="infografis-section py-5" data-aos="fade-up">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="section-title" data-aos="fade-up">
                    <h6 class="text-danger fw-bold">STATISTIK</h6>
                    <h2 class="mb-4">INFOGRAFIS SPBE</h2>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Definisi -->
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="infografis-card h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-content">
                        <h5>Definisi</h5>
                        <p class="card-description">Penyelenggaraan pemerintahan yang memanfaatkan teknologi informasi dan komunikasi untuk memberikan layanan kepada pengguna</p>
                    </div>
                    <div class="hover-content">
                        
                    </div>
                </div>
            </div>

            <!-- Tujuan -->
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="infografis-card h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div class="card-content">
                        <h5>Tujuan</h5>
                        <p class="card-description">Meningkatkan efisiensi, transparansi, akuntabilitas, dan kualitas pelayanan pemerintah kepada masyarakat</p>
                    </div>
                    <div class="hover-content">
                        
                    </div>
                </div>
            </div>

            <!-- Domain -->
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="infografis-card h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <div class="card-content">
                        <h5>Domain</h5>
                        <p class="card-description">Kegiatan pemerintahan, teknologi dan informasi, serta layanan</p>
                    </div>
                    <div class="hover-content">
                        
                    </div>
                </div>
            </div>

            <!-- Aplikasi -->
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="infografis-card h-100">
                    <div class="icon-wrapper">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="card-content">
                        <h5>Aplikasi</h5>
                        <p class="card-description">SIDASRI, SIPINISI, SIPEKA, SILAPRI</p>
                    </div>
                    <div class="hover-content">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SPBE Indicators Section -->
<section class="indicators-section py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6 class="text-danger fw-bold">Informasi SPBE</h6>
                    <h2 class="mb-4">INDIKATOR SPBE</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Graph Column -->
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center mb-3">Indeks SPBE</h4>
                        <h5 class="text-center text-muted mb-4">Pemerintah Kabupaten Banjar</h5>
                        <canvas id="spbeChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Indicators Column -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Kebijakan SPBE -->
                    <div class="col-md-6">
                        <div class="indicator-card">
                            <h1 class="display-4 fw-bold text-primary">10<span class="text-danger">.</span></h1>
                            <h5>Kebijakan SPBE</h5>
                        </div>
                    </div>

                    <!-- Tata Kelola SPBE -->
                    <div class="col-md-6">
                        <div class="indicator-card">
                            <h1 class="display-4 fw-bold text-primary">10<span class="text-danger">.</span></h1>
                            <h5>Tata Kelola SPBE</h5>
                        </div>
                    </div>

                    <!-- Manajemen SPBE -->
                    <div class="col-md-6">
                        <div class="indicator-card">
                            <h1 class="display-4 fw-bold text-primary">11<span class="text-danger">.</span></h1>
                            <h5>Manajemen SPBE</h5>
                        </div>
                    </div>

                    <!-- Layanan SPBE -->
                    <div class="col-md-6">
                        <div class="layanan-card">
                            <h1 class="display-4 fw-bold text-danger">16<span class="text-danger">+</span></h1>
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">INDIKATOR<br>LAYANAN</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Electronic Services Section -->
<section id="service-section" class="electronic-services py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6 class="text-danger fw-bold">LAYANAN</h6>
                    <h2 class="mb-4">LAYANAN ELEKTRONIK</h2>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Administrasi Kependudukan -->
            <div class="col-md-4 col-lg-3">
                <div class="service-card text-center p-4" data-bs-toggle="modal" data-bs-target="#admindukModal">
                    <div class="icon-wrapper mb-3">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.2 480.2" style="enable-background:new 0 0 480.2 480.2;" xml:space="preserve"> <g> <g> <g> <rect x="221.8" y="383.8" class="st0" width="58.1" height="20"/> <path class="st0" d="M394.4,330.2c-11.2-3.8-28.1-11-35.5-16.5v-18.6c25.2-14.4,42.6-39.7,48.9-71c16.1-3.9,27.5-19.7,27.5-34 c0-13.4-9.5-22.9-24.9-25.7V153c0.1-4.2,1.1-53.9-30.3-86.6c-17.5-18.2-41.4-27.5-71-27.5s-53.3,9.1-70.7,27 c-17.4-17.9-41.1-27-70.5-27c-29.7,0-53.6,9.3-71.2,27.5C65.4,99,66.4,148.6,66.5,152.9v11.4c-15.4,2.8-24.9,12.3-24.9,25.7 c0,14.4,11.3,30.2,27.5,34c6.2,30.5,23,55.4,47.2,70v16.4c-7.2,6.3-22,15-31.2,19.9C1.9,357.6,0,408,0,410.1c0,0.1,0,0.1,0,0.2 v20.8c0,5.5,4.5,10,10,10h460.2c5.5,0,10-4.5,10-10v-20.9C480.1,408.1,479,357,394.4,330.2z M410.4,185.1 c2.7,0.9,4.9,2.5,4.9,5.1c0,3.1-1.9,7.2-5,10.3C410.4,199.8,410.4,185.1,410.4,185.1z M61.6,190.2c0-2.6,2.2-4.2,4.9-5.1 c0,0,0,14.8,0,15.4C63.5,197.4,61.6,193.3,61.6,190.2z M390.4,198.6L390.4,198.6c0,4.9-0.3,10-1,15 c-4.1,30.5-20.5,54.7-44.8,66.6c0,0-0.1,0-0.1,0.1c-10.5,5.3-22.4,8-35.4,8s-24.8-2.7-35.4-8c-0.1,0-0.1,0-0.2-0.1 c-8.5-4.1-16-9.8-22.6-17c7.4-11.4,12.7-24.6,15.7-38.9c16.1-3.8,27.5-19.7,27.5-34c0-13.4-9.5-22.9-24.9-25.7v-8.3 c15.2-3.3,31.6-8.5,40-18c14.8,8.3,44.4,22.2,81.1,24.4L390.4,198.6L390.4,198.6z M338.9,303.9v10.6c-2.2,2.3-6.5,6-12.6,8.5 c-4.3,1.8-9,2.6-14,2.6c-6.4,0-13.1-1.5-19.7-4.3c-5.9-2.6-10.6-5.7-13.4-7.8V304c9.4,2.9,19.4,4.3,29.9,4.3 C319.6,308.2,329.6,306.8,338.9,303.9z M276.3,335.4l-1.5,4.4c-3.6-1.7-7.4-3.3-11.4-4.9c2.1-1.2,4.2-2.5,6.1-3.9 C271.4,332.4,273.7,333.9,276.3,335.4z M259.2,295.2v18.6c-4.4,3.4-11.6,7.1-17.1,9.9c-0.6,0.3-1.2,0.6-1.8,0.9 c-9.2-5.3-16.6-10.3-20.9-14v-16.4c7-4.2,13.4-9.3,19.1-15.2C244.7,285.5,251.6,290.9,259.2,295.2z M269.2,200.5 c0-0.6,0-15.4,0-15.4c2.7,0.9,4.9,2.5,4.9,5.1C274.1,193.3,272.2,197.4,269.2,200.5z M309.1,59c23.9,0,42.9,7.1,56.5,21.2 c18.6,19.3,23.3,47.4,24.5,62.3c-45.3-3.3-79-26.6-79.4-26.9c-3.1-2.2-7.1-2.4-10.4-0.7c-3.3,1.7-5.4,5.1-5.4,8.9 c0,1.3-5,7-26.6,12.1c-1.6-14.2-5.9-35-17.5-53.8C264.6,66.8,284.1,59,309.1,59z M111.1,80.4C124.7,66.2,143.8,59,167.8,59 c27.4,0,48.4,9.4,62.3,28.1c14.1,19,17.8,43,18.8,55.4c-45.3-3.3-79.1-26.6-79.4-26.9c-3.1-2.2-7.1-2.4-10.4-0.7 c-3.3,1.7-5.4,5.1-5.4,8.9c0,1.4-6.3,8.5-35.3,14c-11.6,2.2-23.4,3.5-31.5,4.3C88,127.3,92.7,99.6,111.1,80.4z M87.5,213.6 c-0.7-5.1-1-10.1-1-15v-36.3c8.6-0.7,22-2.1,35.4-4.7c9.7-1.9,34.7-6.6,46-19.3c14.8,8.3,44.5,22.2,81.3,24.4v36 c0,4.9-0.3,10-1,15c-2.4,16.9-8.6,32.3-17.9,44.3l-0.1,0.1c-7,9.3-15.7,16.6-26,21.8c-10.9,5.6-23.1,8.5-36.4,8.5 s-25.5-2.8-36.4-8.5C107.6,267.7,91.6,243.6,87.5,213.6z M199.4,303.4v7.5c-2.9,2.8-8.3,7.6-15.4,11c-10.7,5.1-21.6,5.1-32.3,0 c-7.1-3.4-12.6-8.1-15.4-11v-7.5c9.9,3.2,20.5,4.9,31.6,4.9C178.9,308.2,189.5,306.6,199.4,303.4z M20,421.1v-10.6 c0.1-1.1,0.9-10.1,9.3-21.7c15.1-20.9,63.8-40,64.3-40.3c2.4-1.3,20.1-10.6,32.3-20.1c2.5,2.2,5.7,4.6,9.3,7l-10.1,30.2 c-0.7,2.1-0.7,4.3,0,6.3l16.4,49.1H20V421.1z M173.1,421.1h-10.5l-17.4-52.3l8.4-25.1c9.4,2.5,19.1,2.5,28.6,0l8.4,25.1 L173.1,421.1z M315.6,416.9l-1.4,4.2H194.1l16.4-49.1c0.7-2.1,0.7-4.3,0-6.3l-10.1-30.2c3.6-2.3,6.8-4.8,9.3-7 c7.5,5.9,17.4,11.7,25.4,16.2c4.1,2.4,6.9,3.8,7,3.9c0.5,0.3,1,0.5,1.6,0.7c12.3,3.9,22.8,8.3,32,13.5 c38.1,21.1,39.8,46.1,39.9,47.7V416.9z M326.8,383.4c-6.1-10.5-16.5-22.7-34.2-33.9l2.2-6.3c5.9,1.6,11.7,2.4,17.6,2.4 c3.9,0,7.6-0.4,11.3-1.1l8.1,24.3L326.8,383.4z M460.2,421.1H335.6v-0.9l16.1-48.2c0.7-2.1,0.7-4.3,0-6.3l-9.5-28.4 c3-1.8,5.5-3.7,7.6-5.5c13.2,8.7,33.5,15.9,38.2,17.5c0.1,0,48,18.6,63,39.5c8.4,11.8,9.1,20.9,9.1,21.7L460.2,421.1L460.2,421.1 z"/> <rect x="363" y="383.8" class="st0" width="58.1" height="20"/> </g> </g> </g> </svg>
                    </div>
                    <h5>Administrasi Kependudukan</h5>
                </div>
            </div>

            <!-- Pengaduan -->
            <div class="col-md-4 col-lg-3">
                <div class="service-card text-center p-4" data-bs-toggle="modal" data-bs-target="#pengaduanModal">
                    <div class="icon-wrapper mb-3">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g transform="translate(0 1)"> <g> <path class="st0" d="M486.4,424c-50.9-27-90-42.2-124.8-48l3.6-4.9c1.7-1.7,2.6-4.3,1.7-6.8l-8-32c2.9-4.1,5.6-8.3,8.2-12.7 c31.8-10.8,47.9-29.1,50.6-56.1c14-0.7,26-13.2,26-27.3v-64c0-14-11.1-26.4-25.8-27.3C416.1,95.7,394.4-1,256-1S95.9,95.7,94,145 c-13.9,0.8-25.7,12.4-25.7,27.3v64c0,14.5,12.8,27.3,28.2,27.3h12.8c4.7,0,9.2-1.4,13.2-3.7c4.8,25.7,15.5,50.9,30.7,72.4l-8,32 c0,1.7,0,4.3,1.7,6.8l3.6,4.9c-34.8,5.8-73.8,21-124.8,48C9.4,431.6,0,447.9,0,465.8v36.7c0,5.1,3.4,8.5,8.5,8.5h204.8h3.4h78.5 h3.4h204.8c5.1,0,8.5-3.4,8.5-8.5v-36.7C512,448.7,501.8,432.5,486.4,424z M256,404.4l20.4,46.8h-41.2L256,404.4z M229,468.3h53.9 l5,25.6h-64L229,468.3z M345.6,348.9l3.4,15.4l-8.7,12c-0.6,0.5-1.1,1-1.5,1.7l-35.5,49L292,442.5l-23-51.8 c28.1-3.4,53-17.7,73.1-38.2C343.3,351.3,344.4,350.1,345.6,348.9z M378.9,295.8c4.8-11.7,8.4-23.9,10.7-36.2 c3.2,2,6.9,3.3,10.9,3.7C399.1,275.4,393.8,286.8,378.9,295.8z M425.8,171.4v64c0,5.1-4.3,10.2-10.2,10.2h-12.8 c-5.1,0-10.2-4.3-10.2-10.2v-6v-58c0-5.1,4.3-10.2,10.2-10.2h12.8C420.7,161.1,425.8,165.4,425.8,171.4z M256,16.1 c52.6,0,141.1,17.2,144.9,129c-3.6,0.4-7,1.5-10.1,3.1c-10.4-65-67-115.1-134.8-115.1s-124.4,50.1-134.8,115 c-3.1-1.6-6.5-2.7-10.1-3.1C114.9,33.2,203.4,16.1,256,16.1z M118.6,235.4c0,5.1-4.3,10.2-10.2,10.2H95.6 c-5.1,0-10.2-4.3-10.2-10.2v-64c0-5.1,4.3-10.2,10.2-10.2h12.8c5.1,0,10.2,4.3,10.2,10.2V235.4z M136.5,169.7 c0-65.7,53.8-119.5,119.5-119.5S375.5,104,375.5,169.7v59.7c0,28.2-7.4,54.1-19.3,75.9c-20.4,5.9-49.7,9.4-91.7,9.4 c-5.1,0-8.5,3.4-8.5,8.5s3.4,8.5,8.5,8.5c30.7,0,56.5-1.9,77.5-5.8c-0.5,0.5-1,1-1.6,1.6c-4.3,5.7-8.8,10.9-13.6,15.6 c-20.1,18.7-44.1,30.1-67.2,31.2c-1.2-0.5-2.5-0.8-3.8-0.8s-2.5,0.3-3.6,0.8c-14.1-0.6-28.6-5.1-42.3-12.8 c-13.9-8-27-19.5-38.6-34c-0.9-0.9-1.7-1.7-2.6-2.6l-0.5-0.2c-19.2-25.1-31.9-58.2-31.9-95.4L136.5,169.7L136.5,169.7z M243,390.7 l-23,51.8L208.7,427l-35.5-49.1c-0.3-0.3-0.6-0.5-0.9-0.8l-9.4-12.8l3.4-15.4c1.2,1.2,2.3,2.5,3.5,3.6 C189.9,373,214.9,387.3,243,390.7z M17.1,465.8c0-11.1,6-21.3,16.2-26.5c54.4-28.9,93.5-43.4,128.4-47.7l50.9,70l-6.5,32.3h-189 V465.8z M494.9,493.9H305.8l-6.5-32.3l51.5-70.8c34.8,5.2,74.6,19.7,127.9,47.6c10.2,6,16.2,16.2,16.2,27.3V493.9L494.9,493.9z"/> </g> </g> </svg>
                    </div>
                    <h5>Pengaduan</h5>
                </div>
            </div>

            <!-- Kesehatan -->
            <div class="col-md-4 col-lg-3">
                <div class="service-card text-center p-4" data-bs-toggle="modal" data-bs-target="#kesehatanModal">
                    <div class="icon-wrapper mb-3">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path class="st0"  d="M482.7,485.8l-22.6-132.6c-2.4-14.3-12.6-25.8-26.5-30l-61.1-18.4c-1.3-14.9-7.4-29-17.6-40.2 c-8.2-8.9-18.4-15.4-29.7-19c1.9-2.1,3.7-4.3,5.4-6.4c14.5-18.5,22.3-38.8,24.3-52.7h4.7c12.3,0,22.2-10,22.2-22.2v-11.4 c0-8.2-4.6-15.6-11.5-19.4v-27.4c0-4.1-3.4-7.5-7.5-7.5s-7.5,3.4-7.5,7.5v30.8c-2.9,0.5-6.4,1.4-10,2.9c-0.4,0.1-0.7,0.3-1.1,0.5 c-0.8,0.4-1.6,0.8-2.4,1.2V80.9c0-16.7-13.6-30.3-30.3-30.3h-20.7c-7.1,0-14.1,2.5-19.6,7l-2,1.7c-3.7,3-8.4,4.7-13.3,4.7 s-9.5-1.7-13.3-4.7l-2-1.7c-5.5-4.5-12.5-7-19.6-7h-20.7c-16.7,0-30.3,13.6-30.3,30.3v60.4c-0.8-0.4-1.6-0.8-2.4-1.2 c-0.3-0.2-0.7-0.3-1.1-0.5c-3.6-1.5-7-2.4-10-2.9V59c0-24.3,19.8-44,44-44h110.6c24.3,0,44,19.8,44,44v11.8c0,4.1,3.4,7.5,7.5,7.5 s7.5-3.4,7.5-7.5V59c0-32.5-26.5-59-59-59H200.7c-32.5,0-59,26.5-59,59v74.4c-6.9,3.8-11.5,11.3-11.5,19.4v11.4 c0,12.3,10,22.2,22.2,22.2h4.7c2,13.9,9.8,34.2,24.3,52.7c1.6,2.1,3.4,4.2,5.4,6.4c-26,8.3-44.9,31.6-47.3,59.2l-61.1,18.4 c-13.9,4.2-24,15.7-26.5,30L42.7,407c-0.7,4.1,2,8,6.1,8.7s8-2,8.7-6.1l9.2-53.8c1.5-8.6,7.6-15.6,16-18.1l56.5-17v14.8 c-13,2.4-24,11.3-28.5,23.6c-1.2,3.3-2,6.7-2.2,10.2l-5.5,70.1c-0.4,5.3,1.4,10.5,5,14.4s8.7,6.1,14,6.1h9.3 c4.1,0,7.5-3.4,7.5-7.5s-3.4-7.5-7.5-7.5H122c-1.1,0-2.2-0.5-3-1.3s-1.2-1.9-1.1-3.1l5.5-70.1c0.2-2.1,0.6-4.2,1.3-6.2 c3.2-8.6,11.7-14.4,21.2-14.4h1.2c0.1,0,0.1,0,0.2,0c9.3,0,17.5,5.3,20.9,13.4c1,2.3,1.6,4.7,1.8,7.2l5.5,70.1 c0.1,1.1-0.3,2.2-1.1,3.1c-0.8,0.8-1.9,1.3-3,1.3h-9.3c-4.1,0-7.5,3.4-7.5,7.5s3.4,7.5,7.5,7.5h9.3c5.3,0,10.4-2.2,14-6.1 s5.4-9.1,5-14.4l-5.5-70.1c-0.3-4.1-1.3-8.1-2.9-11.9c-4.9-11.7-15.5-19.8-27.9-22V316l25.8-7.8c2.3,4.9,7,15.6,16.2,38.6 c9.3,23.2,20.8,53,31.9,81.9c0.1,0.2,0.2,0.5,0.3,0.7c7.4,19.3,14.5,38.2,20.7,54.5c1.1,2.9,3.9,4.9,7,4.9s5.9-1.9,7-4.9 c6.1-16.3,13.3-35.2,20.7-54.5c0.1-0.2,0.2-0.5,0.3-0.7c11.1-28.9,22.6-58.6,31.8-81.9c9.2-23,13.9-33.7,16.2-38.7l25.8,7.8v44.3 c-17.9,3.5-31.4,19.2-31.4,38.1c0,21.4,17.4,38.8,38.8,38.8s38.8-17.4,38.8-38.8c0-18.8-13.4-34.5-31.2-38v-39.8l56.5,17 c8.4,2.5,14.5,9.5,16,18.1l22.6,132.6c0.4,2.2-0.2,4.3-1.6,6.1c-1.4,1.7-3.5,2.6-5.7,2.6H51.4c-2.2,0-4.3-0.9-5.7-2.6 s-2-3.9-1.6-6.1l7.5-43.8c0.7-4.1-2-8-6.1-8.7s-8,2-8.7,6.1l-7.5,43.8c-1.1,6.5,0.7,13.2,5,18.2c4.3,5.1,10.5,8,17.2,8h409.2 c6.6,0,12.9-2.9,17.2-8C482,499,483.8,492.3,482.7,485.8z M355.4,152.1c4-1,7.2-1,7.2-1c1.3,0,2.5-0.3,3.7-0.9 c0.3,0.8,0.5,1.7,0.5,2.7v11.4c0,4-3.2,7.2-7.2,7.2h-4.2V152.1L355.4,152.1z M156.6,171.5L156.6,171.5h-4.2c-4,0-7.2-3.2-7.2-7.2 v-11.4c0-0.9,0.2-1.8,0.5-2.7c1.1,0.6,2.4,0.9,3.7,0.9c0.1,0,3.3,0,7.2,1V171.5L156.6,171.5z M171.6,179.9v-19.7 c2.3,0.7,4.8,0.6,7.1-0.4c3.9-1.6,6.5-5.5,6.5-9.7V80.9c0-8.4,6.9-15.3,15.3-15.3h20.7c3.7,0,7.3,1.3,10.1,3.6l2,1.7 c6.4,5.2,14.5,8.1,22.7,8.1c8.3,0,16.3-2.9,22.7-8.1l2-1.7c2.9-2.3,6.5-3.6,10.1-3.6h20.7c8.4,0,15.3,6.9,15.3,15.3v69.2 c0,4.3,2.5,8.1,6.5,9.7c1.3,0.5,2.7,0.8,4.1,0.8c1,0,2-0.1,3-0.4v19.7c0,10.9-7.6,32.2-21.6,50c-4.6,5.9-10.6,12.3-18,17.8 c-0.2,0.2-0.5,0.3-0.7,0.5c-11.4,8.4-26,14.9-44.2,14.9s-32.8-6.5-44.2-14.9c-0.2-0.2-0.4-0.3-0.7-0.5c-7.4-5.5-13.3-11.9-18-17.8 C179.1,212.1,171.6,190.9,171.6,179.9z M305.1,301.1L256,337.8l-49.1-36.7c4.9-6.2,7.6-14.1,7.6-21.2v-12.1 c11.6,6.2,25.3,10.4,41.5,10.4s30-4.2,41.5-10.4v12.1C297.5,286.9,300.2,294.9,305.1,301.1z M194.4,292.7c-4-1.5-8.4-1.8-12.6-0.6 c-0.2,0-0.4,0.1-0.5,0.1l-25.9,7.8c4.4-21.5,21.9-38.7,44.2-42v21.8C199.5,284.5,197.4,289.4,194.4,292.7z M214.7,352.9v-0.1 c-0.4-1-0.8-1.9-1.1-2.8c-0.1-0.2-0.1-0.3-0.2-0.5c-0.4-0.9-0.7-1.8-1.1-2.7c0-0.1-0.1-0.1-0.1-0.2c-1.1-2.8-2.2-5.5-3.2-8 c-0.1-0.2-0.1-0.4-0.2-0.6c-0.3-0.7-0.6-1.5-0.9-2.2c-0.1-0.3-0.2-0.5-0.3-0.8c-0.3-0.7-0.6-1.4-0.8-2.1c-0.1-0.2-0.2-0.4-0.2-0.6 c-0.5-1.2-1-2.4-1.5-3.6c-0.1-0.3-0.3-0.6-0.4-0.9c-0.2-0.5-0.4-0.9-0.5-1.3c-0.2-0.5-0.4-1-0.6-1.4c-0.1-0.2-0.1-0.4-0.2-0.5 c-0.1-0.1-0.1-0.3-0.2-0.4c-0.9-2.1-1.7-4.1-2.5-6l0,0c-0.4-1-0.8-2-1.2-2.9c-0.2-0.5-0.4-1-0.6-1.4l42.2,31.6l-17.7,7.5h-0.1 l-7.3,3C215.5,355,215.1,353.9,214.7,352.9z M232.6,398.8c-1.5-3.8-3-7.7-4.5-11.6c-2.3-6-4.6-11.8-6.7-17.3l2.8-1.2l11.4,13.3 L232.6,398.8z M256.1,459.7c-0.2-0.4-0.5-0.9-0.8-1.3c-3.4-9-7.7-20.3-12.4-32.8l7-38.3H262l7,38.3 C264.1,438.8,259.6,450.6,256.1,459.7z M264.9,372.4h-17.8l-8.4-9.8l17.3-7.3l17.3,7.3L264.9,372.4z M283.9,387.2 c-1.5,3.9-3,7.7-4.5,11.6l-3.1-16.7l11.4-13.3l2.8,1.2C288.4,375.4,286.2,381.2,283.9,387.2z M312.6,315.2 c-0.4,0.9-0.8,1.8-1.1,2.7c-0.1,0.1-0.1,0.2-0.2,0.4c-0.4,0.9-0.8,1.9-1.2,2.9c0,0.1-0.1,0.1-0.1,0.2c-0.4,0.9-0.7,1.7-1.1,2.6 c-0.1,0.2-0.1,0.3-0.2,0.5s-0.2,0.4-0.3,0.6c-0.2,0.4-0.3,0.8-0.5,1.2c-0.2,0.5-0.4,1-0.6,1.5c-0.1,0.2-0.1,0.3-0.2,0.5 c-0.5,1.3-1.1,2.6-1.6,4c-0.1,0.2-0.2,0.4-0.3,0.6c-0.3,0.7-0.5,1.4-0.8,2c-0.1,0.3-0.2,0.5-0.3,0.8c-0.3,0.7-0.6,1.4-0.9,2.2 c-0.1,0.2-0.2,0.4-0.2,0.6c-1,2.5-2.1,5.2-3.2,7.9c0,0.1-0.1,0.2-0.1,0.3c-0.4,0.9-0.7,1.8-1.1,2.7c-0.1,0.2-0.1,0.3-0.2,0.5 c-0.4,0.9-0.8,1.9-1.1,2.9c0,0,0,0,0,0.1c-0.4,1-0.8,2.1-1.2,3.2l-7.4-3.1h-0.1l-17.7-7.5l42.2-31.6 C313,314.2,312.8,314.7,312.6,315.2z M330.8,292.2L330.8,292.2L330.8,292.2c-4.4-1.3-9-1.1-13.2,0.5c-3-3.3-5.1-8.2-5.1-12.9V258 c22.5,3.3,39.9,20.3,44.2,42L330.8,292.2z M389,398.4c0,13.1-10.7,23.8-23.8,23.8s-23.8-10.7-23.8-23.8s10.7-23.8,23.8-23.8 S389,385.3,389,398.4z"/> </g> </g> </svg>
                    </div>
                    <h5>Kesehatan</h5>
                </div>
            </div>

            <!-- Perizinan -->
            <div class="col-md-4 col-lg-3">
                <div class="service-card text-center p-4" data-bs-toggle="modal" data-bs-target="#perizinanModal">
                    <div class="icon-wrapper mb-3">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 484.8 484.8" style="enable-background:new 0 0 484.8 484.8;" xml:space="preserve"> <g> <g> <g> <path class="st0" d="M427.8,0h-356c-11,0-19.9,8.9-19.9,19.9v54.3H37.1v20h14.7v59.1H37.1v20h14.7v59.1H37.1v20h14.7v59.1H37.1 v20h14.7v59.1H37.1v20h14.7v54.3c0,11,8.9,19.9,19.9,19.9h356c11,0,19.9-8.9,19.9-19.9v-445C447.6,8.9,438.7,0,427.8,0z M101.3,464.8H71.9v-54.2h14.7v-20H71.9v-59.1h14.7v-20H71.9v-59.1h14.7v-20H71.9v-59.1h14.7v-20H71.9V94.2h14.7v-20H71.9V20 h29.4V464.8L101.3,464.8z M121.3,464.8V20h306.3v444.8H121.3z"/> <path class="st0" d="M403,34.6H145.9c-5.5,0-10,4.5-10,10v128.6c0,5.5,4.5,10,10,10H403c5.5,0,10-4.5,10-10V44.6 C413,39.1,408.5,34.6,403,34.6z M393,163.2L393,163.2H155.9v-24.5h212.5v-20H155.9V54.6H393V163.2L393,163.2z"/> <rect x="323.9" y="400.5" class="st0" width="89" height="20"/> <rect x="393.1" y="430.2" class="st0" width="19.8" height="20"/> <rect x="363.5" y="430.2" class="st0" width="19.8" height="20"/> <rect x="165.7" y="212.6" class="st0" width="217.6" height="20"/> <rect x="165.7" y="252.2" class="st0" width="217.6" height="20"/> </g> </g> </g> </svg>
                    </div>
                    <h5>Perizinan</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News & Updates Section -->
<section class="news-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Berita -->
            <div class="col-md-8 mb-4">
                <h2 class="mb-4">Kabar Terbaru</h2>
                @foreach($news as $item)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($item['image']) }}" class="img-fluid rounded" alt="{{ $item['title'] }}">
                            </div>
                            <div class="col">
                                <h5 class="card-title">{{ $item['title'] }}</h5>
                                <p class="card-text">{{ $item['content'] }}</p>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($item['created_at'])->format('d M Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pengumuman -->
            <div class="col-md-4">
                <h2 class="mb-4">Pengumuman</h2>
                @foreach($announcements as $announcement)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement['title'] }}</h5>
                        <p class="card-text">{{ $announcement['content'] }}</p>
                        <small class="text-muted">
                            Berlaku hingga: {{ \Carbon\Carbon::parse($announcement['valid_until'])->format('d M Y') }}
                        </small>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact-section" class="contact-section py-5" style="background-color: #1e2a3b; color: white;">
    <div class="container">
        <div class="row">
            <!-- SPBE Logo and Description -->
            <div class="col-lg-4 mb-4">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="SPBE Logo" height="50">
                    <h3 class="ms-3 mb-0">SPBE</h3>
                </div>
                <p>Sistem Pemerintahan Berbasis Elektronik</p>
                <div class="social-links mt-4">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4 mb-4">
                <h4 class="mb-4">Alamat</h4>
                <div class="d-flex mb-3">
                    <i class="fas fa-map-marker-alt mt-1 me-3"></i>
                    <p class="mb-0">Jl. Ahmad Yani No.3, Cindai Alus, Kec. Martapura, Kabupaten Banjar, Kalimantan Selatan.</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="fas fa-envelope mt-1 me-3"></i>
                    <p class="mb-0">kominfo@banjarkab.go.id</p>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="col-lg-4">
                <h4 class="mb-4">FAQ</h4>
                <div class="accordion accordion-flush" id="faqAccordion">
                    <div class="accordion-item bg-transparent">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Apa itu SPBE?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white">
                                SPBE adalah sistem pemerintahan yang memanfaatkan teknologi informasi dan komunikasi untuk memberikan layanan kepada pengguna.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-transparent">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Bagaimana cara mengakses layanan SPBE?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white">
                                Layanan SPBE dapat diakses melalui portal resmi pemerintah atau aplikasi yang telah disediakan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <!-- Partner Logos Section -->
<section class="partner-logos py-5">
    <div class="container">
        <div class="row g-4 justify-content-center align-items-center">
            <!-- Add partner logo images here -->
        </div>
    </div>
</section> --}}
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('spbeChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2019', '2021', '2022', '2023'],
            datasets: [{
                label: 'Indeks SPBE',
                data: [3.01, 2.48, 3.31, 4.00],
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 5,
                    ticks: {
                        stepSize: 1
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
});
</script>

<!-- AOS Library CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- AOS Library JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });

    // Add smooth hover effect for infografis cards
    const cards = document.querySelectorAll('.infografis-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>

<!-- Add CSS styles -->
<style>
.service-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    cursor: pointer;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.icon-wrapper {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: rgba(13, 110, 253, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}
</style>

<!-- Perizinan Modal -->
<div class="modal fade" id="perizinanModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    <i class="fas fa-file-alt me-2"></i>
                    Layanan Perizinan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="service-link-card">
                            <a href="https://banjarkab.go.id/antrian" class="text-decoration-none text-dark" target="_blank">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-4">
                                        <i class="fas fa-list-alt text-primary fa-3x mb-3"></i>
                                        <h5>Antrian Mal Pelayanan Publik</h5>
                                        <p class="text-muted mb-0">Ambil nomor antrian untuk layanan di MPP</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-link-card">
                            <a href="https://link-to-cek-status.com" class="text-decoration-none text-dark" target="_blank">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-4">
                                        <i class="fas fa-check-circle text-success fa-3x mb-3"></i>
                                        <h5>Cek Status Proses Perizinan</h5>
                                        <p class="text-muted mb-0">Pantau status pengajuan perizinan Anda</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Administrasi Kependudukan Modal -->
<div class="modal fade" id="admindukModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    <i class="fas fa-id-card me-2"></i>
                    Layanan Administrasi Kependudukan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="service-link-card">
                            <a href="https://dukcapil.banjarkab.go.id" class="text-decoration-none text-dark" target="_blank">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-4">
                                        <i class="fas fa-id-card text-primary fa-3x mb-3"></i>
                                        <h5>Portal Dukcapil</h5>
                                        <p class="text-muted mb-0">Akses portal resmi Dukcapil Kabupaten Banjar</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-link-card">
                            <a href="https://layanandukcapil.banjarkab.go.id" class="text-decoration-none text-dark" target="_blank">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-4">
                                        <i class="fas fa-file-alt text-success fa-3x mb-3"></i>
                                        <h5>Layanan Online Dukcapil</h5>
                                        <p class="text-muted mb-0">Akses layanan kependudukan secara online</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pengaduan Modal -->
<div class="modal fade" id="pengaduanModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    <i class="fas fa-bullhorn me-2"></i>
                    Layanan Pengaduan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="service-link-card">
                            <a href="https://lapor.go.id" class="text-decoration-none text-dark" target="_blank">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-4">
                                        <i class="fas fa-bullhorn text-warning fa-3x mb-3"></i>
                                        <h5>LAPOR! SP4N</h5>
                                        <p class="text-muted mb-0">Sistem Pengaduan Pelayanan Publik Nasional</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-link-card">
                            <a href="https://pengaduan.banjarkab.go.id" class="text-decoration-none text-dark" target="_blank">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center p-4">
                                        <i class="fas fa-comments text-primary fa-3x mb-3"></i>
                                        <h5>Pengaduan Online</h5>
                                        <p class="text-muted mb-0">Layanan pengaduan Kabupaten Banjar</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add this CSS to your existing styles -->
<style>
.service-link-card .card {
    transition: all 0.3s ease;
}

.service-link-card .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}

.modal-content {
    border: none;
    border-radius: 15px;
}

.modal-header {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.btn-close-white {
    filter: brightness(0) invert(1);
}
</style>
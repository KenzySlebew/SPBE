@extends('layouts.app')

@section('content')
<!-- Hero Section with Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('images/banner4.jpg') }}" class="w-100" alt="Banner SPBE" style="height: 600px; object-fit: cover;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0,0,0,0.5);">
                <div class="container text-white text-center">
                    <h1 class="display-4 fw-bold">Sistem Pemerintahan Berbasis Elektronik</h1>
                    <h2 class="h3 mb-4">Kabupaten Banjar</h2>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('images/banner1.jpg') }}" class="w-100" alt="Banner SPBE" style="height: 600px; object-fit: cover;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0,0,0,0.5);">
                <div class="container text-white text-center">
                    <h1 class="display-4 fw-bold">Sistem Pemerintahan Berbasis Elektronik</h1>
                    <h2 class="h3 mb-4">Kabupaten Banjar</h2>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="{{ asset('images/banner2.jpg') }}" class="w-100" alt="Banner SPBE" style="height: 600px; object-fit: cover;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0,0,0,0.5);">
                <div class="container text-white text-center">
                    <h1 class="display-4 fw-bold">Sistem Pemerintahan Berbasis Elektronik</h1>
                    <h2 class="h3 mb-4">Kabupaten Banjar</h2>
                </div>
            </div>
        </div>
    </div>
</div>

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
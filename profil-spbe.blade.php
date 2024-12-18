@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="profile-hero py-5" style="background-color: #1e2a3b;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="text-white display-4 fw-bold mb-4">Sistem Pemerintahan Berbasis Elektronik</h1>
                <p class="text-white-50 lead">Transformasi Digital Pemerintahan Kabupaten Banjar</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="profile-content py-5">
    <div class="container">
        <div class="row">
            <!-- Content Area -->
            <div class="col-12">
                <div class="content-section">
                    <div id="apa-itu-spbe" class="mb-5">
                        <h2 class="mb-4">Apa itu SPBE?</h2>
                        <p class="lead">Sistem Pemerintahan Berbasis Elektronik (SPBE) adalah sistem pemerintahan yang menggunakan teknologi informasi dan komunikasi untuk memberikan layanan publik yang efisien, transparan, dan akuntabel.</p>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Definisi</h5>
                                        <p>Penyelenggaraan pemerintahan yang memanfaatkan teknologi digital untuk meningkatkan kualitas tata kelola pemerintahan yang efektif, efisien, transparan, dan akuntabel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Landasan Hukum</h5>
                                        <p>Peraturan Presiden No. 95 Tahun 2018 tentang Sistem Pemerintahan Berbasis Elektronik (SPBE) dan Peraturan Menteri PANRB No. 5 Tahun 2018.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Ruang Lingkup</h5>
                                        <p>Meliputi seluruh proses penyelenggaraan pemerintahan di lingkungan Pemerintah Kabupaten Banjar yang mencakup perencanaan, pelaksanaan, evaluasi, dan pengawasan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="manfaat" class="mb-5">
                        <h2 class="mb-4">Manfaat SPBE</h2>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="benefit-card text-center p-4 border rounded">
                                    <i class="fas fa-cogs mb-3 text-primary fa-3x"></i>
                                    <h5>Efisiensi Operasional</h5>
                                    <p>Mengoptimalkan proses administrasi pemerintahan melalui otomatisasi dan integrasi sistem informasi.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="benefit-card text-center p-4 border rounded">
                                    <i class="fas fa-users mb-3 text-success fa-3x"></i>
                                    <h5>Pelayanan Publik</h5>
                                    <p>Meningkatkan kualitas dan aksesibilitas layanan publik melalui platform digital yang mudah digunakan.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="benefit-card text-center p-4 border rounded">
                                    <i class="fas fa-lock mb-3 text-warning fa-3x"></i>
                                    <h5>Transparansi</h5>
                                    <p>Menyediakan akses informasi yang terbuka dan dapat dipertanggungjawabkan kepada masyarakat.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="komponen" class="mb-5">
                        <h2 class="mb-4">Komponen Utama SPBE</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card-title">Infrastruktur SPBE</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Mencakup perangkat keras, perangkat lunak, dan jaringan komunikasi yang mendukung sistem pemerintahan elektronik.</p>
                                        <ul class="list-unstyled">
                                            <li>• Pusat Data (Data Center)</li>
                                            <li>• Jaringan Komunikasi Pemerintah</li>
                                            <li>• Sistem Keamanan Informasi</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card-title">Aplikasi dan Sistem Informasi</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Platform digital yang mendukung proses pemerintahan dan pelayanan publik.</p>
                                        <ul class="list-unstyled">
                                            <li>• Sistem Informasi Manajemen Pemerintahan</li>
                                            <li>• Aplikasi Pelayanan Publik</li>
                                            <li>• Portal Informasi Daerah</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="strategi" class="mb-5">
                        <h2 class="mb-4">Strategi Implementasi SPBE</h2>
                        <div class="timeline">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5>Tahap Perencanaan</h5>
                                            <p>Penyusunan roadmap dan arsitektur SPBE, identifikasi kebutuhan, dan alokasi sumber daya.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5>Tahap Implementasi</h5>
                                            <p>Pengembangan infrastruktur, aplikasi, dan sistem informasi, serta pelatihan SDM.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5>Tahap Evaluasi dan Pengembangan</h5>
                                            <p>Monitoring berkelanjutan, perbaikan sistem, dan peningkatan kualitas layanan digital.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection

@section('scripts')
<script src="{{ asset('js/profil-spbe.js') }}"></script>
@endsection
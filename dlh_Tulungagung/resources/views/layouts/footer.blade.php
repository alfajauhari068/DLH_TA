<footer class="bg-dark text-white pt-5 pb-4 mt-5">
    <div class="container">
        <div class="row g-4 mb-4">
            
            <!-- Column 1: Brand & About -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('build/assets/icon-dinas.png') }}" alt="Logo Kabupaten Tulungagung" class="me-3 bg-white rounded-circle p-1" style="width: 48px; height: 48px; object-fit: contain;" onerror="this.src='https://placehold.co/48x48/1e7e34/ffffff?text=Logo'">
                    <div>
                        <h5 class="mb-0 fw-bold" style="letter-spacing: -0.5px;">Dinas Lingkungan Hidup</h5>
                        <small class="text-white-50">Kabupaten Tulungagung</small>
                    </div>
                </div>
                <p class="text-white-50 small mb-4 paragraph-spacing pe-lg-4" style="line-height: 1.6;">
                    {{ $globalSetting->site_description ?? 'Mewujudkan lingkungan yang bersih, sehat, dan lestari untuk masyarakat Tulungagung melalui pelayanan prima dan pembangunan berkelanjutan.' }}
                </p>
                <!-- Social Media -->
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-outline-light rounded-circle icon-container-48 btn-lift p-0 border-0 bg-white bg-opacity-10 hover-bg-white-20">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light rounded-circle icon-container-48 btn-lift p-0 border-0 bg-white bg-opacity-10 hover-bg-white-20">
                        <i class="bi bi-twitter-x fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light rounded-circle icon-container-48 btn-lift p-0 border-0 bg-white bg-opacity-10 hover-bg-white-20">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light rounded-circle icon-container-48 btn-lift p-0 border-0 bg-white bg-opacity-10 hover-bg-white-20">
                        <i class="bi bi-youtube fs-5"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-bold mb-4 text-white">Tautan Cepat</h6>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                    <li><a href="{{ url('/profil') }}" class="text-white-50 text-decoration-none hover-text-white transition-200">Profil Instansi</a></li>
                    <li><a href="{{ url('/halaman/pelayanan-publik') }}" class="text-white-50 text-decoration-none hover-text-white transition-200">Layanan Publik</a></li>
                    <li><a href="{{ url('/berita') }}" class="text-white-50 text-decoration-none hover-text-white transition-200">Berita Terbaru</a></li>
                    <li><a href="{{ url('/galeri') }}" class="text-white-50 text-decoration-none hover-text-white transition-200">Galeri Kegiatan</a></li>
                    <li><a href="{{ url('/halaman/ppid') }}" class="text-white-50 text-decoration-none hover-text-white transition-200">PPID</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-bold mb-4 text-white">Kontak Kami</h6>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0 text-white-50 small">
                    <li class="d-flex align-items-start gap-3">
                        <i class="bi bi-geo-alt-fill text-primary mt-1"></i>
                        <span>Jl. KH Wahid Hasyim No.37, Hutan, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur 66212</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i class="bi bi-telephone-fill text-primary"></i>
                        <span>(0355) 321768</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i class="bi bi-envelope-fill text-primary"></i>
                        <span>dlh@tulungagung.go.id</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i class="bi bi-clock-fill text-primary"></i>
                        <span>Senin - Jumat: 07.30 - 15.30 WIB</span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Google Maps -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-uppercase fw-bold mb-4 text-white">Lokasi Kantor</h6>
                <div class="rounded-img overflow-hidden shadow-elevate-1 bg-secondary" style="height: 180px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.21832049363!2d111.89736837568571!3d-8.079219991948332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e2e2808c4e09%3A0xc3b8a34c5625ffcd!2sDinas%20Lingkungan%20Hidup%20Kabupaten%20Tulungagung!5e0!3m2!1sid!2sid!4v1709600000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="border-top border-light border-opacity-25 pt-4 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <small class="text-white-50 mb-0">&copy; {{ date('Y') }} {{ $globalSettings['site_name'] ?? 'Dinas Lingkungan Hidup Kabupaten Tulungagung' }}. Hak Cipta Dilindungi.</small>
            <div class="d-flex gap-3">
                <a href="{{ url('/halaman/kebijakan-privasi') }}" class="text-white-50 text-decoration-none hover-text-white small transition-200">Kebijakan Privasi</a>
                <span class="text-white-50">•</span>
                <a href="{{ url('/halaman/syarat-ketentuan') }}" class="text-white-50 text-decoration-none hover-text-white small transition-200">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

<style>
    .hover-text-white:hover { color: #fff !important; }
    .hover-bg-white-20:hover { background-color: rgba(255,255,255,0.2) !important; }
</style>

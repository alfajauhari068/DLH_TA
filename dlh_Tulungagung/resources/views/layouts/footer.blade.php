<footer class="text-white pt-5 pb-4 mt-5 position-relative overflow-hidden" style="background-color: #052e16;">
    <!-- Topographic / Map Pattern Background -->
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100%25\' height=\'100%25\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noiseFilter\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.8\' numOctaves=\'3\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noiseFilter)\'/%3E%3C/svg%3E'); mix-blend-mode: overlay;"></div>
    
    <!-- Deep Gradient for Depth -->
    <div class="position-absolute top-0 start-0 w-100 h-100 pointer-events-none" style="background: radial-gradient(circle at bottom right, rgba(22, 163, 74, 0.2) 0%, transparent 60%);"></div>

    <div class="container position-relative z-2 pt-4">
        
        <!-- Massive Brand Header in Footer -->
        <div class="row border-bottom border-light border-opacity-10 pb-5 mb-5 align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('images/icon-dinas.png') }}" onerror="this.src='https://placehold.co/48x48/1e7e34/ffffff?text=DLH'" alt="Logo" class="img-fluid me-3" style="width: 40px; filter: brightness(0) invert(1) opacity(0.8);">
                    <h6 class="text-white-50 text-uppercase letter-spacing-1 fw-bold mb-0">Kabupaten Tulungagung</h6>
                </div>
                <h2 class="display-4 fw-bolder text-white mb-0" style="letter-spacing: -1px;">Dinas Lingkungan Hidup</h2>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('services') }}" class="btn btn-success fw-bold rounded-pill px-5 py-3 hover-lift transition-all shadow-sm">
                    Mulai Layanan <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <!-- Column 1: Info & Social -->
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white fw-bold mb-4">Membangun Ekosistem Berkelanjutan</h5>
                <p class="text-white-50 mb-4 pe-lg-4" style="line-height: 1.8;">
                    {{ $globalSetting->site_description ?? 'Mewujudkan lingkungan yang bersih, sehat, dan lestari untuk masyarakat Tulungagung melalui pelayanan prima dan pembangunan berkelanjutan.' }}
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-outline-light rounded-circle p-0 border-0 bg-white bg-opacity-10 hover-bg-white hover-text-dark transition-all d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light rounded-circle p-0 border-0 bg-white bg-opacity-10 hover-bg-white hover-text-dark transition-all d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                        <i class="bi bi-twitter-x fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light rounded-circle p-0 border-0 bg-white bg-opacity-10 hover-bg-white hover-text-dark transition-all d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light rounded-circle p-0 border-0 bg-white bg-opacity-10 hover-bg-white hover-text-dark transition-all d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                        <i class="bi bi-youtube fs-5"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="text-uppercase fw-bold text-white mb-4 letter-spacing-1">Tautan Cepat</h6>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                    <li><a href="{{ url('/profil') }}" class="text-white-50 text-decoration-none hover-text-white transition-all group-link"><span class="group-hover-translate-x d-inline-block transition-all">Profil Instansi</span></a></li>
                    <li><a href="{{ route('services') }}" class="text-white-50 text-decoration-none hover-text-white transition-all group-link"><span class="group-hover-translate-x d-inline-block transition-all">Layanan Publik</span></a></li>
                    <li><a href="{{ url('/berita') }}" class="text-white-50 text-decoration-none hover-text-white transition-all group-link"><span class="group-hover-translate-x d-inline-block transition-all">Kabar Berita</span></a></li>
                    <li><a href="{{ url('/galeri') }}" class="text-white-50 text-decoration-none hover-text-white transition-all group-link"><span class="group-hover-translate-x d-inline-block transition-all">Galeri Visual</span></a></li>
                    <li><a href="http://ppid.tulungagung.go.id" class="text-white-50 text-decoration-none hover-text-white transition-all group-link"><span class="group-hover-translate-x d-inline-block transition-all">PPID</span></a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-uppercase fw-bold text-white mb-4 letter-spacing-1">Hubungi Kami</h6>
                <ul class="list-unstyled d-flex flex-column gap-4 mb-0 text-white-50">
                    <li class="d-flex align-items-start gap-3">
                        <i class="bi bi-geo-alt fs-5 text-success"></i>
                        <span>Jl. KH Wahid Hasyim No.37, Kec. Tulungagung, Jawa Timur 66212</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i class="bi bi-telephone fs-5 text-success"></i>
                        <span>(0355) 321768</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i class="bi bi-envelope fs-5 text-success"></i>
                        <span>dlh@tulungagung.go.id</span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Newsletter / Quick Sub -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-uppercase fw-bold text-white mb-4 letter-spacing-1">Buletin Hijau</h6>
                <p class="text-white-50 small mb-3">Dapatkan kabar terbaru tentang inisiatif lingkungan langsung di kotak masuk Anda.</p>
                <form action="#" class="mb-4">
                    <div class="position-relative">
                        <input type="email" class="form-control rounded-pill bg-white bg-opacity-10 border-0 text-white ps-4 pe-5 py-3 shadow-none placeholder-white-50" placeholder="Alamat email..." required>
                        <button type="button" class="btn position-absolute end-0 top-50 translate-middle-y text-white hover-text-success border-0 rounded-circle me-1" style="width: 40px; height: 40px;">
                            <i class="bi bi-send-fill"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="border-top border-light border-opacity-10 pt-4 pb-2 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <small class="text-white-50 fw-medium">&copy; {{ date('Y') }} {{ $globalSettings['site_name'] ?? 'Dinas Lingkungan Hidup Tulungagung' }}. All rights reserved.</small>
            <div class="d-flex gap-4">
                <a href="{{ url('/halaman/kebijakan-privasi') }}" class="text-white-50 text-decoration-none hover-text-white small transition-all">Kebijakan Privasi</a>
                <a href="{{ url('/halaman/syarat-ketentuan') }}" class="text-white-50 text-decoration-none hover-text-white small transition-all">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

<style>
    .letter-spacing-1 { letter-spacing: 1px; }
    .transition-all { transition: all 0.3s ease; }
    .hover-text-white:hover { color: #fff !important; }
    .hover-bg-white:hover { background-color: #fff !important; }
    .hover-text-dark:hover { color: #052e16 !important; }
    .hover-text-success:hover { color: #4ade80 !important; }
    .hover-lift:hover { transform: translateY(-3px); box-shadow: 0 10px 20px -5px rgba(0,0,0,0.2) !important; }
    .group-link:hover .group-hover-translate-x { transform: translateX(8px); color: #fff !important; }
    .placeholder-white-50::placeholder { color: rgba(255,255,255,0.5); }
    .form-control:focus { background-color: rgba(255,255,255,0.15) !important; box-shadow: 0 0 0 4px rgba(74, 222, 128, 0.1) !important; }
</style>

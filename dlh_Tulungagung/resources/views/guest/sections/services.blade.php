<section class="section-spacing bg-white">
    <div class="container">
        <div class="row g-4 justify-content-center">
            
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/halaman/tupoksi') }}" class="card border-0 shadow-elevate-1 rounded-card h-100 card-lift text-decoration-none text-dark group bg-white">
                    <div class="card-body card-padding d-flex align-items-start gap-components">
                        <div class="bg-primary bg-opacity-10 text-primary icon-container-48">
                            <i class="bi bi-card-checklist fs-5"></i>
                        </div>
                        <div>
                            <h5 class="text-card-title mb-1 group-hover-text-primary transition-200">Tupoksi</h5>
                            <p class="text-muted text-small mb-0">Tugas Pokok dan Fungsi DLH</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/halaman/alur-pelayanan') }}" class="card border-0 shadow-elevate-1 rounded-card h-100 card-lift text-decoration-none text-dark group bg-white">
                    <div class="card-body card-padding d-flex align-items-start gap-components">
                        <div class="bg-primary bg-opacity-10 text-primary icon-container-48">
                            <i class="bi bi-diagram-3 fs-5"></i>
                        </div>
                        <div>
                            <h5 class="text-card-title mb-1 group-hover-text-primary transition-200">Alur Pelayanan</h5>
                            <p class="text-muted text-small mb-0">Prosedur layanan masyarakat</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/halaman/ppid') }}" class="card border-0 shadow-elevate-1 rounded-card h-100 card-lift text-decoration-none text-dark group bg-white">
                    <div class="card-body card-padding d-flex align-items-start gap-components">
                        <div class="bg-primary bg-opacity-10 text-primary icon-container-48">
                            <i class="bi bi-info-circle fs-5"></i>
                        </div>
                        <div>
                            <h5 class="text-card-title mb-1 group-hover-text-primary transition-200">PPID</h5>
                            <p class="text-muted text-small mb-0">Layanan Informasi Publik</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/halaman/struktur-organisasi') }}" class="card border-0 shadow-elevate-1 rounded-card h-100 card-lift text-decoration-none text-dark group bg-white">
                    <div class="card-body card-padding d-flex align-items-start gap-components">
                        <div class="bg-primary bg-opacity-10 text-primary icon-container-48">
                            <i class="bi bi-people fs-5"></i>
                        </div>
                        <div>
                            <h5 class="text-card-title mb-1 group-hover-text-primary transition-200">Struktur Organisasi</h5>
                            <p class="text-muted text-small mb-0">Bagan organisasi DLH</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/kontak') }}" class="card border-0 shadow-elevate-1 rounded-card h-100 card-lift text-decoration-none text-dark group bg-white">
                    <div class="card-body card-padding d-flex align-items-start gap-components">
                        <div class="bg-primary bg-opacity-10 text-primary icon-container-48">
                            <i class="bi bi-telephone fs-5"></i>
                        </div>
                        <div>
                            <h5 class="text-card-title mb-1 group-hover-text-primary transition-200">Kontak</h5>
                            <p class="text-muted text-small mb-0">Hubungi kami untuk informasi</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/halaman/maklumat-pelayanan') }}" class="card border-0 shadow-elevate-1 rounded-card h-100 card-lift text-decoration-none text-dark group bg-white">
                    <div class="card-body card-padding d-flex align-items-start gap-components">
                        <div class="bg-primary bg-opacity-10 text-primary icon-container-48">
                            <i class="bi bi-shield-check fs-5"></i>
                        </div>
                        <div>
                            <h5 class="text-card-title mb-1 group-hover-text-primary transition-200">Maklumat</h5>
                            <p class="text-muted text-small mb-0">Komitmen pelayanan publik</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<style>
    .hover-shadow:hover {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important;
        transform: translateY(-3px);
    }
    .transition-all {
        transition: all 0.3s ease;
    }
    .group:hover .group-hover-text-primary {
        color: var(--bs-primary) !important;
    }
</style>

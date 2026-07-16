<section class="position-relative bg-primary overflow-hidden section-spacing" style="background: linear-gradient(135deg, var(--bs-primary) 0%, #145c25 100%);">
    <!-- Background Pattern/Image -->
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 2px, transparent 0); background-size: 32px 32px; transform: rotate(15deg) scale(1.5);"></div>

    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 text-center text-lg-start">
                <span class="badge bg-white text-primary mb-3 px-3 py-2 fw-semibold shadow-sm text-small">Portal Resmi</span>
                <h1 class="text-hero heading-spacing text-white">
                        Dinas Lingkungan Hidup
                    <span class="d-block text-white-75">Kabupaten Tulungagung</span>
                    </h1>
                <p class="text-subtitle paragraph-spacing text-white-75 mb-5 mx-auto mx-lg-0" style="max-width: 500px;">
                    Mewujudkan lingkungan yang bersih, sehat, dan lestari melalui pelayanan prima dan pembangunan berkelanjutan.
                </p>
                <div class="d-flex flex-wrap gap-components mt-4 justify-content-center justify-content-lg-start">
                    <a href="{{ url('/halaman/pelayanan-publik') }}" class="btn btn-light text-primary fw-bold rounded-btn btn-padding shadow-elevate-2 btn-lift">Layanan Publik</a>
                    <a href="{{ url('/profil') }}" class="btn btn-outline-light fw-bold rounded-btn btn-padding btn-lift">Profil Instansi</a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center">
                <div class="position-relative d-inline-block">
                    <!-- Decorative background for image -->
                    <div class="position-absolute top-50 start-50 translate-middle bg-white rounded-circle opacity-10" style="width: 400px; height: 400px;"></div>
                    <img src="{{ asset('build/assets/TA-icon.png') }}" alt="Logo Kabupaten Tulungagung" class="img-fluid position-relative drop-shadow-2xl" style="max-height: 750px;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-spacing bg-white">
    <div class="container">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <span class="badge bg-success bg-opacity-10 text-success mb-3 px-3 py-2 fw-bold rounded-pill text-uppercase letter-spacing-1">Fokus Utama</span>
                <h2 class="display-5 fw-bolder mb-3 text-dark">Layanan Publik DLH</h2>
                <p class="text-muted mx-auto fs-5" style="max-width: 600px;">Menghadirkan layanan yang transparan, mudah diakses, dan berorientasi pada pelestarian lingkungan hidup Tulungagung.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            
            <x-guest.service-card 
                href="{{ url('/halaman/tupoksi') }}" 
                icon="bi-journal-check" 
                title="Tupoksi" 
                description="Panduan komprehensif mengenai Tugas Pokok dan Fungsi Dinas Lingkungan Hidup dalam menjaga keseimbangan ekosistem daerah." 
                image="{{ asset('images/tupoksi.png') }}"
            />

            <x-guest.service-card 
                href="{{ url('/halaman/alur-pelayanan') }}" 
                icon="bi-diagram-3" 
                title="Alur Pelayanan" 
                description="Prosedur terintegrasi layanan masyarakat mulai dari pengaduan, perizinan, hingga penanganan isu lingkungan secara responsif." 
                image="{{ asset('images/alur-pelayanan.png') }}"
            />

            <x-guest.service-card 
                href="{{ url('/halaman/ppid') }}" 
                icon="bi-info-circle" 
                title="PPID" 
                description="Pusat Informasi Publik yang menjamin transparansi data dan dokumentasi publik terkait kebijakan tata ruang hijau." 
                image="{{ asset('images/PPID.png') }}"
            />

            <x-guest.service-card 
                href="{{ url('/halaman/struktur-organisasi') }}" 
                icon="bi-people" 
                title="Struktur Organisasi" 
                description="Mengenal lebih dekat tim profesional di balik inisiatif hijau dan operasional strategis Dinas Lingkungan Hidup." 
                image="{{ asset('images/Struktur_Organisasi.png') }}"
            />

            <x-guest.service-card 
                href="{{ url('/kontak') }}" 
                icon="bi-headset" 
                title="Layanan Kontak" 
                description="Pusat bantuan responsif 24/7 untuk mendukung pelaporan masalah lingkungan dan konsultasi masyarakat." 
                image="https://images.unsplash.com/photo-1596524430615-b46475ddff6e?q=80&w=800&auto=format&fit=crop"
            />

            <x-guest.service-card 
                href="{{ url('/halaman/maklumat-pelayanan') }}" 
                icon="bi-shield-check" 
                title="Maklumat" 
                description="Komitmen teguh kami dalam menyajikan pelayanan prima, akuntabel, dan bebas pungutan liar bagi seluruh masyarakat." 
                image="{{ asset('images/Maklumat.png') }}"
            />

        </div>
    </div>
</section>

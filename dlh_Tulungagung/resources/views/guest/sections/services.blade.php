<section class="relative py-14 md:py-20 lg:py-28 bg-surface-green overflow-hidden">
    <!-- Subtle Pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-dot-pattern"></div>

    <div class="container px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <span class="inline-block px-4 py-2 bg-white text-primary font-bold text-xs uppercase tracking-widest rounded-full mb-6 shadow-sm border border-primary/10">Fokus Utama</span>
            <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-6 leading-tight">Layanan Publik DLH</h2>
            <p class="text-gray-500 text-lg leading-relaxed">Akses cepat layanan terpadu yang transparan, mudah, dan berorientasi pada pelestarian lingkungan.</p>
        </div>
        
        <!-- Adaptive Government Service Launcher Grid -->
        <div class="grid gap-3 sm:gap-4 md:gap-6 w-full max-w-7xl mx-auto place-content-center" style="grid-template-columns: repeat(auto-fit, minmax(min(100%, 140px), 1fr));">
            
            <x-guest.service-launcher-card 
                href="{{ url('/halaman/tupoksi') }}" 
                icon="bi-journal-check" 
                title="Tupoksi" 
                subtitle="Tugas Pokok & Fungsi"
            />

            <x-guest.service-launcher-card 
                href="{{ url('/layanan') }}" 
                icon="bi-diagram-3" 
                title="Alur Pelayanan" 
                subtitle="Prosedur Terpadu"
            />

            <x-guest.service-launcher-card 
                href="{{ url('http://ppid.tulungagung.go.id/') }}" 
                icon="bi-info-circle" 
                title="PPID" 
                subtitle="Informasi Publik"
            />

            <x-guest.service-launcher-card 
                href="{{ url('/halaman/struktur-organisasi') }}" 
                icon="bi-people" 
                title="Organisasi" 
                subtitle="Struktur Dinas"
            />

            <x-guest.service-launcher-card 
                href="{{ url('/kontak') }}" 
                icon="bi-headset" 
                title="Pengaduan" 
                subtitle="Laporan Masyarakat"
            />

            <x-guest.service-launcher-card 
                href="{{ url('/halaman/maklumat-pelayanan') }}" 
                icon="bi-shield-check" 
                title="Maklumat" 
                subtitle="Komitmen Kami"
            />

        </div>
    </div>
</section>

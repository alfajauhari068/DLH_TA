<section class="relative pb-16 md:pb-24 pt-8 lg:pt-12 bg-[var(--slate-50)] overflow-hidden">
    <!-- Subtle Pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-dot-pattern"></div>

    <div class="container px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <div class="inline-flex items-center gap-2.5 px-6 py-2.5 bg-white text-[var(--primary)] font-bold text-[11px] tracking-widest uppercase rounded-full mb-6 shadow-sm border border-slate-200">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--primary)]"></span>
                FOKUS UTAMA
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[var(--primary-dark)] mb-6 leading-tight">Layanan Publik DLH</h2>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-8">Akses layanan digital yang cepat, transparan, dan mudah digunakan oleh masyarakat Kabupaten Tulungagung.</p>
        </div>
        
        <!-- Services Grid Container - Bento Grid Modern Layout -->
        <div class="max-w-7xl mx-auto px-5 md:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Card 1: Tupoksi -->
                <a href="{{ url('/halaman/tupoksi') }}" class="group relative flex flex-col items-center text-center p-8 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-[var(--shadow-hover)] hover:-translate-y-1.5 transition-all duration-300">
                    <!-- Icon Area - Pastel Green Circle -->
                    <div class="w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center text-[var(--primary)] group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-300 shrink-0">
                        <i class="bi bi-journal-check text-2xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-6">
                        <h3 class="text-lg md:text-xl font-semibold text-slate-900 mb-2 group-hover:text-[var(--primary)] transition-colors duration-300">Tupoksi</h3>
                        <p class="text-slate-500 text-sm max-w-[220px] leading-6">Tugas pokok dan fungsi Dinas Lingkungan Hidup.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-[var(--primary)] text-lg transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 2: Alur Pelayanan -->
                <a href="{{ url('/layanan') }}" class="group relative flex flex-col items-center text-center p-8 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-[var(--shadow-hover)] hover:-translate-y-1.5 transition-all duration-300">
                    <!-- Icon Area - Pastel Green Circle -->
                    <div class="w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center text-[var(--primary)] group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-300 shrink-0">
                        <i class="bi bi-diagram-3 text-2xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-6">
                        <h3 class="text-lg md:text-xl font-semibold text-slate-900 mb-2 group-hover:text-[var(--primary)] transition-colors duration-300">Alur Pelayanan</h3>
                        <p class="text-slate-500 text-sm max-w-[220px] leading-6">Prosedur terpadu layanan lingkungan masyarakat.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-[var(--primary)] text-lg transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 3: PPID -->
                <a href="{{ url('http://ppid.tulungagung.go.id/') }}" class="group relative flex flex-col items-center text-center p-8 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-[var(--shadow-hover)] hover:-translate-y-1.5 transition-all duration-300">
                    <!-- Icon Area - Pastel Green Circle -->
                    <div class="w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center text-[var(--primary)] group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-300 shrink-0">
                        <i class="bi bi-info-circle text-2xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-6">
                        <h3 class="text-lg md:text-xl font-semibold text-slate-900 mb-2 group-hover:text-[var(--primary)] transition-colors duration-300">PPID</h3>
                        <p class="text-slate-500 text-sm max-w-[220px] leading-6">Informasi publik dan dokumentasi resmi instansi.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-[var(--primary)] text-lg transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 4: Organisasi -->
                <a href="{{ url('/halaman/struktur-organisasi') }}" class="group relative flex flex-col items-center text-center p-8 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-[var(--shadow-hover)] hover:-translate-y-1.5 transition-all duration-300">
                    <!-- Icon Area - Pastel Green Circle -->
                    <div class="w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center text-[var(--primary)] group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-300 shrink-0">
                        <i class="bi bi-people text-2xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-6">
                        <h3 class="text-lg md:text-xl font-semibold text-slate-900 mb-2 group-hover:text-[var(--primary)] transition-colors duration-300">Organisasi</h3>
                        <p class="text-slate-500 text-sm max-w-[220px] leading-6">Struktur kedinasan dan pembagian bidang kerja.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-[var(--primary)] text-lg transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 5: Pengaduan -->
                <a href="{{ url('/kontak') }}" class="group relative flex flex-col items-center text-center p-8 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-[var(--shadow-hover)] hover:-translate-y-1.5 transition-all duration-300">
                    <!-- Icon Area - Pastel Green Circle -->
                    <div class="w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center text-[var(--primary)] group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-300 shrink-0">
                        <i class="bi bi-headset text-2xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-6">
                        <h3 class="text-lg md:text-xl font-semibold text-slate-900 mb-2 group-hover:text-[var(--primary)] transition-colors duration-300">Pengaduan</h3>
                        <p class="text-slate-500 text-sm max-w-[220px] leading-6">Sampaikan laporan lingkungan secara daring.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-[var(--primary)] text-lg transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 6: Maklumat -->
                <a href="{{ url('/halaman/maklumat-pelayanan') }}" class="group relative flex flex-col items-center text-center p-8 bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-[var(--shadow-hover)] hover:-translate-y-1.5 transition-all duration-300">
                    <!-- Icon Area - Pastel Green Circle -->
                    <div class="w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center text-[var(--primary)] group-hover:bg-[var(--primary)] group-hover:text-white transition-all duration-300 shrink-0">
                        <i class="bi bi-shield-check text-2xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-6">
                        <h3 class="text-lg md:text-xl font-semibold text-slate-900 mb-2 group-hover:text-[var(--primary)] transition-colors duration-300">Maklumat</h3>
                        <p class="text-slate-500 text-sm max-w-[220px] leading-6">Komitmen kami dalam melayani masyarakat.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-[var(--primary)] text-lg transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </div>
                </a>

            </div>
        </div>
    </div>
    
    <!-- Organic wave transition to next section -->
    <div class="organic-divider absolute bottom-0 left-0 w-full pointer-events-none"></div>
</section>

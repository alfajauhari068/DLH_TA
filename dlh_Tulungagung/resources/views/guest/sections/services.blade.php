<section class="relative pb-16 md:pb-24 pt-8 lg:pt-12 bg-[#F8FCF9] overflow-hidden">
    <!-- Subtle Pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-dot-pattern"></div>

    <div class="container px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <div class="inline-flex items-center gap-2.5 px-6 py-2.5 bg-white text-primary font-bold text-[11px] tracking-widest uppercase rounded-full mb-6 shadow-sm border border-gray-200">
                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                FOKUS UTAMA
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-[#163020] mb-6 leading-tight">Layanan Publik DLH</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-8">Akses layanan digital yang cepat, transparan, dan mudah digunakan oleh masyarakat Kabupaten Tulungagung.</p>
        </div>
        
        <!-- Services Grid Container -->
        <div class="max-w-7xl mx-auto px-5 md:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-10 gap-x-8">
                
                <!-- Card 1: Tupoksi -->
                <a href="{{ url('/halaman/tupoksi') }}" class="group relative flex flex-col items-center text-center p-10 bg-white rounded-[32px] h-[340px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.10)] hover:-translate-y-2 transition-all duration-300">
                    <!-- Icon Area -->
                    <div class="w-20 h-20 rounded-full bg-white border border-primary/20 shadow-sm flex items-center justify-center text-primary group-hover:scale-105 transition-transform duration-300 shrink-0">
                        <i class="bi bi-journal-check text-3xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-8">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-3 group-hover:text-primary transition-colors duration-300">Tupoksi</h3>
                        <p class="text-gray-500 text-sm max-w-[220px] leading-7 line-clamp-2">Tugas pokok dan fungsi Dinas Lingkungan Hidup.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-primary text-xl transform group-hover:translate-x-1.5 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 2: Alur Pelayanan -->
                <a href="{{ url('/layanan') }}" class="group relative flex flex-col items-center text-center p-10 bg-white rounded-[32px] h-[340px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.10)] hover:-translate-y-2 transition-all duration-300">
                    <!-- Icon Area -->
                    <div class="w-20 h-20 rounded-full bg-white border border-primary/20 shadow-sm flex items-center justify-center text-primary group-hover:scale-105 transition-transform duration-300 shrink-0">
                        <i class="bi bi-diagram-3 text-3xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-8">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-3 group-hover:text-primary transition-colors duration-300">Alur Pelayanan</h3>
                        <p class="text-gray-500 text-sm max-w-[220px] leading-7 line-clamp-2">Prosedur terpadu layanan lingkungan masyarakat.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-primary text-xl transform group-hover:translate-x-1.5 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 3: PPID -->
                <a href="{{ url('http://ppid.tulungagung.go.id/') }}" class="group relative flex flex-col items-center text-center p-10 bg-white rounded-[32px] h-[340px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.10)] hover:-translate-y-2 transition-all duration-300">
                    <!-- Icon Area -->
                    <div class="w-20 h-20 rounded-full bg-white border border-primary/20 shadow-sm flex items-center justify-center text-primary group-hover:scale-105 transition-transform duration-300 shrink-0">
                        <i class="bi bi-info-circle text-3xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-8">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-3 group-hover:text-primary transition-colors duration-300">PPID</h3>
                        <p class="text-gray-500 text-sm max-w-[220px] leading-7 line-clamp-2">Informasi publik dan dokumentasi resmi instansi.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-primary text-xl transform group-hover:translate-x-1.5 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 4: Organisasi -->
                <a href="{{ url('/halaman/struktur-organisasi') }}" class="group relative flex flex-col items-center text-center p-10 bg-white rounded-[32px] h-[340px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.10)] hover:-translate-y-2 transition-all duration-300">
                    <!-- Icon Area -->
                    <div class="w-20 h-20 rounded-full bg-white border border-primary/20 shadow-sm flex items-center justify-center text-primary group-hover:scale-105 transition-transform duration-300 shrink-0">
                        <i class="bi bi-people text-3xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-8">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-3 group-hover:text-primary transition-colors duration-300">Organisasi</h3>
                        <p class="text-gray-500 text-sm max-w-[220px] leading-7 line-clamp-2">Struktur kedinasan dan pembagian bidang kerja.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-primary text-xl transform group-hover:translate-x-1.5 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 5: Pengaduan -->
                <a href="{{ url('/kontak') }}" class="group relative flex flex-col items-center text-center p-10 bg-white rounded-[32px] h-[340px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.10)] hover:-translate-y-2 transition-all duration-300">
                    <!-- Icon Area -->
                    <div class="w-20 h-20 rounded-full bg-white border border-primary/20 shadow-sm flex items-center justify-center text-primary group-hover:scale-105 transition-transform duration-300 shrink-0">
                        <i class="bi bi-headset text-3xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-8">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-3 group-hover:text-primary transition-colors duration-300">Pengaduan</h3>
                        <p class="text-gray-500 text-sm max-w-[220px] leading-7 line-clamp-2">Sampaikan laporan lingkungan secara daring.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-primary text-xl transform group-hover:translate-x-1.5 transition-transform duration-300"></i>
                    </div>
                </a>

                <!-- Card 6: Maklumat -->
                <a href="{{ url('/halaman/maklumat-pelayanan') }}" class="group relative flex flex-col items-center text-center p-10 bg-white rounded-[32px] h-[340px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.10)] hover:-translate-y-2 transition-all duration-300">
                    <!-- Icon Area -->
                    <div class="w-20 h-20 rounded-full bg-white border border-primary/20 shadow-sm flex items-center justify-center text-primary group-hover:scale-105 transition-transform duration-300 shrink-0">
                        <i class="bi bi-shield-check text-3xl"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-grow flex flex-col items-center justify-center mt-8">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-3 group-hover:text-primary transition-colors duration-300">Maklumat</h3>
                        <p class="text-gray-500 text-sm max-w-[220px] leading-7 line-clamp-2">Komitmen kami dalam melayani masyarakat.</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="mt-auto pt-4 flex items-center justify-center w-full">
                        <i class="bi bi-arrow-right text-primary text-xl transform group-hover:translate-x-1.5 transition-transform duration-300"></i>
                    </div>
                </a>

            </div>
        </div>
    </div>
    
    <!-- Organic wave transition to next section -->
    <div class="organic-divider absolute bottom-0 left-0 w-full pointer-events-none"></div>
</section>

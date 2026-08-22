<footer class="bg-[#163020] text-white py-16 md:py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-5 md:px-6 lg:px-8 relative z-10">
        
        <!-- Brand Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center border-b border-white/10 pb-12 mb-12 gap-8">
            <div class="flex items-center gap-5">
                <div class="w-16 h-16 bg-white/5 rounded-full flex items-center justify-center p-3 border border-white/10">
                    <img src="{{ asset('images/icon-dinas.png') }}" onerror="this.src='https://placehold.co/48x48/ffffff/163020?text=DLH'" alt="Logo DLH" loading="lazy" decoding="async" class="w-full h-full object-contain filter brightness-0 invert opacity-90">
                </div>
                <div>
                    <h6 class="text-white/60 text-[10px] font-bold uppercase tracking-[0.2em] mb-1">Kabupaten Tulungagung</h6>
                    <h2 class="text-3xl lg:text-4xl font-black text-white tracking-tight">Dinas Lingkungan Hidup</h2>
                </div>
            </div>
            <div class="lg:text-right">
                <a href="{{ route('services') }}" class="inline-flex items-center gap-3 px-8 py-3.5 bg-primary text-white font-bold rounded-full hover:bg-white hover:text-primary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-[#163020]">
                    Mulai Layanan <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-16 mb-16">
            
            <!-- Column 1: About & Social -->
            <div class="lg:col-span-4">
                <h5 class="text-white text-xl font-bold mb-6">Menjaga Alam, Melestarikan Kehidupan</h5>
                <p class="text-white/60 mb-8 leading-8 text-sm lg:pr-8">
                    {{ $globalSetting->site_description ?? 'Mewujudkan lingkungan yang bersih, sehat, dan lestari untuk masyarakat Tulungagung melalui pelayanan prima dan pembangunan berkelanjutan.' }}
                </p>
                <div class="flex gap-4">
                    <a href="#" aria-label="Facebook" class="w-10 h-10 rounded-full bg-white/5 hover:bg-primary border border-white/10 flex items-center justify-center transition-all duration-300">
                        <i class="bi bi-facebook text-white"></i>
                    </a>
                    <a href="#" aria-label="Twitter" class="w-10 h-10 rounded-full bg-white/5 hover:bg-primary border border-white/10 flex items-center justify-center transition-all duration-300">
                        <i class="bi bi-twitter-x text-white"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="w-10 h-10 rounded-full bg-white/5 hover:bg-primary border border-white/10 flex items-center justify-center transition-all duration-300">
                        <i class="bi bi-instagram text-white"></i>
                    </a>
                    <a href="#" aria-label="YouTube" class="w-10 h-10 rounded-full bg-white/5 hover:bg-primary border border-white/10 flex items-center justify-center transition-all duration-300">
                        <i class="bi bi-youtube text-white"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="lg:col-span-3 lg:col-start-6">
                <h6 class="text-white/40 text-[11px] font-bold uppercase tracking-widest mb-6">Tautan Cepat</h6>
                <ul class="flex flex-col gap-4">
                    <li><a href="{{ url('/profil') }}" class="text-white/70 hover:text-white transition-colors text-sm font-medium">Profil Instansi</a></li>
                    <li><a href="{{ route('services') }}" class="text-white/70 hover:text-white transition-colors text-sm font-medium">Layanan Publik</a></li>
                    <li><a href="{{ url('/berita') }}" class="text-white/70 hover:text-white transition-colors text-sm font-medium">Kabar Berita</a></li>
                    <li><a href="{{ url('/galeri') }}" class="text-white/70 hover:text-white transition-colors text-sm font-medium">Galeri Visual</a></li>
                    <li><a href="http://ppid.tulungagung.go.id" class="text-white/70 hover:text-white transition-colors text-sm font-medium">PPID</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="lg:col-span-4">
                <h6 class="text-white/40 text-[11px] font-bold uppercase tracking-widest mb-6">Hubungi Kami</h6>
                <ul class="flex flex-col gap-5 text-sm text-white/70">
                    <li class="flex items-start gap-4">
                        <i class="bi bi-geo-alt mt-1 text-white/40"></i>
                        <span class="leading-relaxed">Jl. KH Wahid Hasyim No.37, Kec. Tulungagung, Jawa Timur 66212</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <i class="bi bi-telephone text-white/40"></i>
                        <span class="font-medium">(0355) 321768</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <i class="bi bi-envelope text-white/40"></i>
                        <span class="font-medium">dlh@tulungagung.go.id</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <small class="text-white/40 text-xs font-medium tracking-wide">&copy; {{ date('Y') }} {{ $globalSettings['site_name'] ?? 'Dinas Lingkungan Hidup Tulungagung' }}. Hak Cipta Dilindungi.</small>
            <div class="flex gap-6">
                <a href="{{ url('/halaman/kebijakan-privasi') }}" class="text-white/40 hover:text-white text-xs font-medium transition-colors">Kebijakan Privasi</a>
                <a href="{{ url('/halaman/syarat-ketentuan') }}" class="text-white/40 hover:text-white text-xs font-medium transition-colors">Syarat & Ketentuan</a>
            </div>
        </div>
        
    </div>
</footer>

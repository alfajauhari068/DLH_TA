<footer class="text-white pt-28 pb-10 relative overflow-hidden bg-gradient-to-b from-gray-900 to-primary-dark border-t border-white/10 shadow-[0_-10px_40px_rgba(0,0,0,0.05)]">
    <!-- Topographic / Map Pattern Background -->
    <div class="absolute inset-0 opacity-[0.03] mix-blend-overlay pointer-events-none bg-topo-pattern"></div>
    
    <!-- Deep Gradient for Depth -->
    <div class="absolute inset-0 pointer-events-none bg-gradient-to-tr from-primary-green/30 to-transparent"></div>

    <div class="container relative z-10 px-4">
        
        <!-- Massive Brand Header in Footer -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center border-b border-white/10 pb-12 mb-12 gap-8">
            <div>
                <div class="flex items-center mb-4 gap-4">
                    <div class="w-16 h-16 bg-white/15 rounded-2xl flex items-center justify-center p-3 border border-white/20">
                        <img src="{{ asset('images/icon-dinas.png') }}" onerror="this.src='https://placehold.co/48x48/146C43/ffffff?text=DLH'" alt="Logo" loading="lazy" decoding="async" class="w-full h-full object-contain filter brightness-0 invert opacity-90">
                    </div>
                    <div>
                        <h6 class="text-accent text-xs font-bold uppercase tracking-[0.2em] mb-1">Kabupaten Tulungagung</h6>
                        <h2 class="text-4xl lg:text-5xl font-black text-white tracking-tight">Dinas Lingkungan Hidup</h2>
                    </div>
                </div>
            </div>
            <div class="lg:text-right">
                <a href="{{ route('services') }}" class="group inline-flex items-center gap-3 bg-gradient-to-r from-accent to-light-green text-primary font-black rounded-full px-8 py-4 shadow-elevation-1 hover:shadow-elevation-2 hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary-dark">
                    Mulai Layanan <i class="bi bi-arrow-right transform group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-16 mb-20">
            <!-- Column 1: Info & Social -->
            <div class="lg:col-span-4">
                <h5 class="text-white text-xl font-black mb-6">Membangun Ekosistem Berkelanjutan</h5>
                <p class="text-white/60 mb-8 leading-relaxed text-sm lg:pr-8">
                    {{ $globalSetting->site_description ?? 'Mewujudkan lingkungan yang bersih, sehat, dan lestari untuk masyarakat Tulungagung melalui pelayanan prima dan pembangunan berkelanjutan.' }}
                </p>
                <div class="flex gap-3">
                    <a href="#" aria-label="Facebook" class="group w-12 h-12 rounded-full bg-white/10 hover:bg-accent border border-white/10 flex items-center justify-center transition-all duration-300 hover:-translate-y-2 hover:shadow-elevation-1 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary-dark">
                        <i class="bi bi-facebook text-lg text-white group-hover:text-primary transition-colors"></i>
                    </a>
                    <a href="#" aria-label="Twitter / X" class="group w-12 h-12 rounded-full bg-white/10 hover:bg-accent border border-white/10 flex items-center justify-center transition-all duration-300 hover:-translate-y-2 hover:shadow-elevation-1 delay-75 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary-dark">
                        <i class="bi bi-twitter-x text-lg text-white group-hover:text-primary transition-colors"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="group w-12 h-12 rounded-full bg-white/10 hover:bg-accent border border-white/10 flex items-center justify-center transition-all duration-300 hover:-translate-y-2 hover:shadow-elevation-1 delay-100 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary-dark">
                        <i class="bi bi-instagram text-lg text-white group-hover:text-primary transition-colors"></i>
                    </a>
                    <a href="#" aria-label="YouTube" class="group w-12 h-12 rounded-full bg-white/10 hover:bg-accent border border-white/10 flex items-center justify-center transition-all duration-300 hover:-translate-y-2 hover:shadow-elevation-1 delay-150 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary-dark">
                        <i class="bi bi-youtube text-lg text-white group-hover:text-primary transition-colors"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="lg:col-span-2">
                <h6 class="text-white/50 text-xs font-bold uppercase tracking-widest mb-6">Tautan Cepat</h6>
                <ul class="flex flex-col gap-4">
                    <li><a href="{{ url('/profil') }}" class="group flex items-center text-white/70 hover:text-white transition-colors text-sm font-medium focus:outline-none focus:ring-2 focus:ring-accent rounded px-1 -ml-1"><i class="bi bi-chevron-right text-xs text-accent opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 mr-2 transition-all" aria-hidden="true"></i> Profil Instansi</a></li>
                    <li><a href="{{ route('services') }}" class="group flex items-center text-white/70 hover:text-white transition-colors text-sm font-medium focus:outline-none focus:ring-2 focus:ring-accent rounded px-1 -ml-1"><i class="bi bi-chevron-right text-xs text-accent opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 mr-2 transition-all" aria-hidden="true"></i> Layanan Publik</a></li>
                    <li><a href="{{ url('/berita') }}" class="group flex items-center text-white/70 hover:text-white transition-colors text-sm font-medium focus:outline-none focus:ring-2 focus:ring-accent rounded px-1 -ml-1"><i class="bi bi-chevron-right text-xs text-accent opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 mr-2 transition-all" aria-hidden="true"></i> Kabar Berita</a></li>
                    <li><a href="{{ url('/galeri') }}" class="group flex items-center text-white/70 hover:text-white transition-colors text-sm font-medium focus:outline-none focus:ring-2 focus:ring-accent rounded px-1 -ml-1"><i class="bi bi-chevron-right text-xs text-accent opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 mr-2 transition-all" aria-hidden="true"></i> Galeri Visual</a></li>
                    <li><a href="http://ppid.tulungagung.go.id" class="group flex items-center text-white/70 hover:text-white transition-colors text-sm font-medium focus:outline-none focus:ring-2 focus:ring-accent rounded px-1 -ml-1"><i class="bi bi-chevron-right text-xs text-accent opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 mr-2 transition-all" aria-hidden="true"></i> PPID</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="lg:col-span-3">
                <h6 class="text-white/50 text-xs font-bold uppercase tracking-widest mb-6">Hubungi Kami</h6>
                <ul class="flex flex-col gap-5 text-sm text-white/70">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center flex-shrink-0 text-accent">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <span class="pt-2 leading-relaxed">Jl. KH Wahid Hasyim No.37, Kec. Tulungagung, Jawa Timur 66212</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center flex-shrink-0 text-accent">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <span class="font-medium">(0355) 321768</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center flex-shrink-0 text-accent">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <span class="font-medium">dlh@tulungagung.go.id</span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Newsletter -->
            <div class="lg:col-span-3">
                <h6 class="text-white/50 text-xs font-bold uppercase tracking-widest mb-6">Buletin Hijau</h6>
                <p class="text-white/60 text-sm mb-6 leading-relaxed">Dapatkan kabar terbaru tentang inisiatif lingkungan langsung di kotak masuk Anda.</p>
                <form action="#" class="relative">
                    <input type="email" class="w-full bg-white/10 border border-white/20 text-white placeholder-white/40 rounded-full py-3.5 pl-6 pr-14 outline-none focus:bg-white/20 focus:border-accent transition-all text-sm" placeholder="Alamat email Anda..." required>
                    <button type="submit" class="absolute right-1.5 top-1.5 w-10 h-10 rounded-full bg-accent text-primary flex items-center justify-center hover:bg-white hover:-translate-y-0.5 transition-all shadow-sm">
                        <i class="bi bi-send-fill"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <small class="text-white/40 font-normal tracking-wide">&copy; {{ date('Y') }} {{ $globalSettings['site_name'] ?? 'Dinas Lingkungan Hidup Tulungagung' }}. All rights reserved.</small>
            <div class="flex gap-6">
                <a href="{{ url('/halaman/kebijakan-privasi') }}" class="text-white/50 hover:text-white text-xs font-medium transition-colors">Kebijakan Privasi</a>
                <a href="{{ url('/halaman/syarat-ketentuan') }}" class="text-white/50 hover:text-white text-xs font-medium transition-colors">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

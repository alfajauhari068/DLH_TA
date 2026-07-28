<section class="relative min-h-[700px] lg:min-h-[760px] flex flex-col justify-center pt-0 lg:pt-[120px] pb-20 lg:pb-40 overflow-hidden shadow-elevation-1 bg-gray-900">
    <!-- Layer 1: Base Background (Fade Animation) -->
    <div class="absolute inset-0 bg-gray-900 z-0 animate-fade-in"></div>

    <!-- Layer 2: Image Carousel Background -->
    <div class="absolute inset-0 z-0" id="hero-carousel">
        <!-- <img src="{{ asset('images/Apel-Pagi.jpeg') }}" alt="Apel Pagi DLH" fetchpriority="high" decoding="async" class="carousel-img absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-[2000ms] ease-in-out">
        <img src="{{ asset('images/DLH-Depan.jpeg') }}" alt="Gedung DLH" fetchpriority="low" decoding="async" class="carousel-img absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-[2000ms] ease-in-out"> -->
    </div>
    
    <!-- Layer 3: Contrast Gradients (Poin 2) -->
    <!-- Gradient overlay: primary-dark/80 -> transparent -->
    <div class="absolute inset-0 z-10 bg-primary-dark/80 lg:bg-transparent lg:bg-gradient-to-r lg:from-primary-dark/90 lg:via-primary-dark/60 lg:to-transparent"></div>
    <div class="absolute inset-0 z-10 bg-gradient-to-t from-[#F0FDF4] via-transparent to-transparent opacity-100"></div>
    
    <!-- Layer 4: Organic Textures & Depth -->
    <div class="absolute inset-0 z-20 opacity-10 pointer-events-none mix-blend-overlay bg-noise-pattern"></div>
    
    <!-- Layer 5: Dynamic Ambient Glows (Depth) -->
    <div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-accent/20 rounded-full blur-[120px] z-20 pointer-events-none"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-light-green/20 rounded-full blur-[100px] z-20 pointer-events-none animate-pulse-slow"></div>

    <!-- Layer 6: Content Architecture (Container 1440px) -->
    <div class="container max-w-[1440px] px-6 lg:px-12 mx-auto relative z-30 mt-8 md:mt-0">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Typography Column -->
            <div class="lg:col-span-7 text-center lg:text-left">
                
                <!-- Eyebrow Identity (Storytelling 1) -->
                <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-full p-1.5 pr-5 mb-6 shadow-glass animate-fade-down">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/Lambang-tulungagung.png') }}" alt="Logo" class="h-5 w-auto object-contain">
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-white/80 text-[9px] font-bold tracking-widest uppercase leading-none">Pemerintah Kab. Tulungagung</span>
                        <span class="text-white font-black text-xs tracking-widest uppercase mt-0.5 leading-none">Dinas Lingkungan Hidup</span>
                    </div>
                </div>
                
                <!-- H1 Display Typography (Headline Dominan) -->
                <h1 class="text-[38px] md:text-[52px] lg:text-[64px] font-[800] text-white mb-6 leading-[1.05] tracking-tight drop-shadow-lg animate-fade-up" style="animation-delay: 150ms;">
                    Menjaga Alam, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-light-green drop-shadow-sm">
                        Melestarikan Kehidupan.
                    </span>
                </h1>
                
                <!-- Body Copy (Description) -->
                <p class="text-white/90 text-lg md:text-xl font-medium mb-8 mx-auto lg:mx-0 max-w-xl leading-relaxed animate-fade-up drop-shadow-md" style="animation-delay: 300ms;">
                    Dinas Lingkungan Hidup Tulungagung hadir untuk mewujudkan ekosistem yang sehat, asri, dan berkelanjutan melalui transparansi dan pelayanan prima.
                </p>
                
                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mx-auto lg:mx-0 max-w-xl mb-8 animate-fade-up" style="animation-delay: 450ms;">
                    <!-- Primary Solid CTA -->
                    <a href="{{ route('services') }}" class="group relative inline-flex items-center justify-center gap-3 bg-primary text-white font-bold text-base px-8 min-h-[52px] rounded-full shadow-lg shadow-primary/30 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-accent">
                        <div class="absolute inset-0 bg-white/10 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out"></div>
                        <span class="relative z-10 tracking-wide">Layanan Publik</span>
                        <div class="relative z-10 w-7 h-7 rounded-full bg-white/20 flex items-center justify-center group-hover:bg-white group-hover:text-primary transition-colors shrink-0">
                            <i class="bi bi-arrow-right text-sm"></i>
                        </div>
                    </a>
                    
                    <!-- Secondary Glass CTA -->
                    <a href="{{ route('profile') }}" class="group inline-flex items-center justify-center gap-3 text-white font-bold text-base px-8 min-h-[52px] rounded-full border border-white/40 bg-white/10 backdrop-blur-md hover:border-white hover:bg-white/25 shadow-glass hover:shadow-glass-hover transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white">
                        <i class="bi bi-play-circle-fill text-xl opacity-90 group-hover:opacity-100 transition-opacity shrink-0"></i>
                        <span class="tracking-wide">Profil DLH</span>
                    </a>
                </div>

                <!-- Quick Information & Trust Indicators -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6 sm:gap-10 animate-fade-up" style="animation-delay: 600ms;">
                    <!-- Trust Indicator -->
                    <div class="flex items-center gap-2 text-white/80">
                        <i class="bi bi-check-circle-fill text-accent text-lg"></i>
                        <span class="text-sm font-semibold tracking-wide">Portal Resmi Pemerintah</span>
                    </div>
                    <!-- Quick Stats -->
                    <div class="flex gap-6 border-l-0 sm:border-l border-white/20 pl-0 sm:pl-10">
                        <div class="text-left">
                            <h4 class="text-white font-black text-xl leading-none mb-1">450<span class="text-accent">+</span></h4>
                            <p class="text-white/70 text-[10px] font-bold tracking-widest uppercase">Layanan</p>
                        </div>
                        <div class="text-left">
                            <h4 class="text-white font-black text-xl leading-none mb-1">120<span class="text-accent">+</span></h4>
                            <p class="text-white/70 text-[10px] font-bold tracking-widest uppercase">Publikasi</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Right Eco Dashboard Column -->
            <div class="lg:col-span-5 relative w-full max-w-[500px] mx-auto hidden lg:block">
                
                <div class="relative w-full rounded-[32px] p-8 bg-white/10 backdrop-blur-xl border border-white/20 shadow-2xl animate-fade-up" style="animation-delay: 800ms;">
                    <!-- Ambient Glow behind card -->
                    <div class="absolute -inset-1 bg-gradient-to-br from-white/20 to-transparent rounded-[34px] blur-sm -z-10"></div>
                    
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-8 border-b border-white/10 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/40 flex items-center justify-center">
                                <i class="bi bi-geo-alt-fill text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-lg leading-tight">Tulungagung</h3>
                                <p class="text-white/70 text-xs" id="eco-time">Hari ini</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <img src="{{ asset('images/berakhlak.png') }}" alt="Berakhlak" class="h-6 w-auto opacity-80">
                        </div>
                    </div>

                    <!-- Main Stats Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Cuaca -->
                        <div class="bg-black/20 rounded-2xl p-4 border border-white/5 hover:bg-black/30 transition-colors">
                            <div class="flex justify-between items-start mb-2">
                                <i class="bi bi-cloud-sun-fill text-3xl text-yellow-400 drop-shadow-md"></i>
                                <span class="bg-white/20 text-white text-[10px] px-2 py-1 rounded-full">Cuaca</span>
                            </div>
                            <h4 class="text-white text-2xl font-black mt-2">28°C</h4>
                            <p class="text-white/60 text-xs mt-1">Cerah Berawan</p>
                        </div>
                        
                        <!-- AQI -->
                        <div class="bg-black/20 rounded-2xl p-4 border border-white/5 hover:bg-black/30 transition-colors">
                            <div class="flex justify-between items-start mb-2">
                                <i class="bi bi-wind text-3xl text-green-400 drop-shadow-md"></i>
                                <span class="bg-success/80 text-white text-[10px] px-2 py-1 rounded-full">AQI</span>
                            </div>
                            <h4 class="text-white text-2xl font-black mt-2">42</h4>
                            <p class="text-white/60 text-xs mt-1">Kualitas Baik</p>
                        </div>
                        
                        <!-- Kelembapan -->
                        <div class="bg-black/20 rounded-2xl p-4 border border-white/5 hover:bg-black/30 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center shrink-0">
                                    <i class="bi bi-droplet-half text-xl text-blue-400"></i>
                                </div>
                                <div>
                                    <p class="text-white/60 text-[10px] uppercase tracking-widest">Kelembapan</p>
                                    <h4 class="text-white font-bold text-lg">75%</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Ruang Terbuka Hijau -->
                        <div class="bg-black/20 rounded-2xl p-4 border border-white/5 hover:bg-black/30 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-emerald-500/20 flex items-center justify-center shrink-0">
                                    <i class="bi bi-tree-fill text-xl text-emerald-400"></i>
                                </div>
                                <div>
                                    <p class="text-white/60 text-[10px] uppercase tracking-widest">RTH Kota</p>
                                    <h4 class="text-white font-bold text-lg">32.4%</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Layered SVG Bottom Wave for smoother transition -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-20 pointer-events-none">
        <!-- Soft blur wave behind -->
        <svg class="relative block w-[calc(100%+1.3px)] h-[80px] md:h-[120px] lg:h-[160px] opacity-60 blur-[8px] translate-y-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="#ffffff"></path>
        </svg>
        <!-- Sharp front wave -->
        <svg class="absolute bottom-[-1px] left-0 block w-[calc(100%+1.3px)] h-[80px] md:h-[120px] lg:h-[160px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="#FCFDFC"></path>
        </svg>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-40 flex flex-col items-center opacity-70 hover:opacity-100 transition-opacity animate-fade-up" style="animation-delay: 1000ms;">
        <span class="text-white/80 text-[10px] font-bold tracking-widest uppercase mb-2 animate-bounce-slow">Scroll</span>
        <div class="w-6 h-10 rounded-full border-2 border-white/30 flex justify-center p-1">
            <div class="w-1.5 h-2.5 bg-white rounded-full animate-scroll-down"></div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Carousel Logic
        const carousel = document.getElementById('hero-carousel');
        if(carousel) {
            const images = carousel.querySelectorAll('.carousel-img');
            if(images.length >= 2) {
                let currentIndex = 0;
                setInterval(() => {
                    images[currentIndex].classList.remove('opacity-100');
                    images[currentIndex].classList.add('opacity-0');
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.remove('opacity-0');
                    images[currentIndex].classList.add('opacity-100');
                }, 5000);
            }
        }

        // Update Eco Time
        const timeEl = document.getElementById('eco-time');
        if(timeEl) {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            timeEl.textContent = now.toLocaleDateString('id-ID', options);
        }
    });
</script>

<style>
    @keyframes scroll-down {
        0% { transform: translateY(0); opacity: 1; }
        100% { transform: translateY(14px); opacity: 0; }
    }
    .animate-scroll-down {
        animation: scroll-down 1.5s infinite;
    }
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(-10%); animation-timing-function: cubic-bezier(0.8, 0, 1, 1); }
        50% { transform: translateY(0); animation-timing-function: cubic-bezier(0, 0, 0.2, 1); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 2s infinite;
    }
    .shadow-glass {
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.15);
    }
    .shadow-glass-hover {
        box-shadow: 0 12px 40px 0 rgba(0, 0, 0, 0.25);
    }
    /* Add basic fade animation classes for storytelling sequence */
    @keyframes fade-in {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    .animate-fade-in {
        animation: fade-in 1s ease-out forwards;
    }
    @keyframes fade-down {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-down {
        animation: fade-down 0.8s ease-out forwards;
        opacity: 0;
    }
    @keyframes fade-up {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-up {
        animation: fade-up 0.8s ease-out forwards;
        opacity: 0;
    }
</style>
@endpush

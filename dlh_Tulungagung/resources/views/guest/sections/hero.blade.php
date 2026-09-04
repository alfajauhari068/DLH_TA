@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    /* Styling adjustments to prevent Swiper from breaking text heights and animations */
    .heroSwiper {
        width: 100%;
        height: auto;
    }
    .heroSwiper .swiper-slide {
        display: flex;
        flex-direction: column;
        height: auto;
        opacity: 0 !important;
        transition-property: opacity;
    }
    .heroSwiper .swiper-slide-active {
        opacity: 1 !important;
    }
</style>
@endpush

<section class="relative bg-white overflow-hidden">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
            @forelse($heroes as $hero)
                <div class="swiper-slide relative">
                    <!-- Visual Hero Area (Top) -->
                    <div class="relative w-full h-[45vh] md:h-[52vh] lg:h-[520px] lg:min-h-[580px]">
                        
                        <!-- SVG Animated Masking Frame Overlay -->
                        <svg class="absolute inset-0 w-full h-full pointer-events-none z-25" viewBox="0 0 1440 900" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="frameGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#10B981;stop-opacity:0.4" />
                                    <stop offset="100%" style="stop-color:#0F3D2E;stop-opacity:0.3" />
                                </linearGradient>
                            </defs>
                            <!-- Organic curved frame border -->
                            <path d="M 30,30 L 1410,30 Q 1425,30 1425,45 L 1425,855 Q 1425,870 1410,870 L 30,870 Q 15,870 15,855 L 15,45 Q 15,30 30,30 Z" 
                                  fill="none" 
                                  stroke="url(#frameGradient)" 
                                  stroke-width="3" 
                                  stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  class="animate-svg-intro"/>
                        </svg>
                        
                        <!-- Image Background -->
                        <picture>
                            <source srcset="{{ asset('storage/'.$hero->image) }}" type="image/webp">
                            <img 
                                src="{{ asset('storage/'.$hero->image) }}" 
                                alt="{{ $hero->title }}" 
                                class="absolute inset-0 w-full h-full object-cover object-top"
                                width="1920"
                                height="1080"
                                fetchpriority="high"
                                loading="eager"
                                decoding="async"
                            >
                        </picture>
                        
                        <!-- Strong Dark Emerald Gradient Overlay for Text Contrast -->
                        <div class="absolute inset-0 z-10 pointer-events-none bg-gradient-to-b md:bg-gradient-to-r from-emerald-950/90 via-emerald-900/80 md:via-emerald-900/75 to-emerald-950/60 md:to-transparent"></div>
                        
                        <!-- Text Content Overlay (DESKTOP ONLY) -->
                        <div class="absolute inset-0 z-20 hidden sm:flex flex-col items-start justify-center pt-24 md:pt-32 pb-36 md:pb-48 pointer-events-none">
                            <div class="container max-w-[1440px] px-8 md:px-16 lg:px-24 mx-auto w-full">
                                <div class="w-full lg:w-1/2">
                                    
                                    <!-- Badge with Glassmorphism Effect -->
                                    @if($hero->badge)
                                        <div class="inline-flex items-center gap-2.5 mb-2 lg:mb-3 bg-black/30 backdrop-blur-md px-3.5 py-1.5 rounded-full shadow-lg border border-white/20 pointer-events-auto">
                                            <span class="text-base leading-none">🌿</span>
                                            <span class="text-emerald-300 font-bold text-xs lg:text-sm tracking-wide">{{ $hero->badge }}</span>
                                        </div>
                                    @endif
                                    
                                    <!-- H1 Display Typography - Modern & Bold -->
                                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 lg:mb-6 leading-tight lg:leading-tight tracking-tight drop-shadow-md max-w-3xl">
                                        {{ $hero->title }}
                                    </h1>
                                    
                                    <!-- Body Copy -->
                                    @if($hero->subtitle)
                                        <p class="text-white/90 text-sm md:text-base max-w-xl leading-relaxed drop-shadow mb-8 lg:mb-10">
                                            {{ $hero->subtitle }}
                                        </p>
                                    @endif
                                    
                                    <!-- CTAs -->
                                    <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto pointer-events-auto">
                                        <!-- Primary Solid CTA -->
                                        @if($hero->button_1_text && $hero->button_1_url)
                                            <a href="{{ $hero->button_1_url }}" class="group w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-emerald-500 hover:bg-emerald-400 text-emerald-950 font-bold text-[15px] lg:text-base px-6 py-3 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                                                <span>{{ $hero->button_1_text }}</span>
                                                <div class="w-5 h-5 rounded-full bg-emerald-600/30 flex items-center justify-center text-emerald-950 group-hover:scale-110 transition-transform">
                                                    <i class="bi bi-arrow-right text-xs font-bold"></i>
                                                </div>
                                            </a>
                                        @endif
                                        
                                        <!-- Secondary Outline CTA -->
                                        @if($hero->button_2_text && $hero->button_2_url)
                                            <a href="{{ $hero->button_2_url }}" class="group w-full sm:w-auto inline-flex items-center justify-center gap-3 text-white font-medium text-[15px] lg:text-base px-6 py-3 rounded-xl border border-white/30 bg-white/10 hover:bg-white/20 backdrop-blur-sm transition-all duration-300">
                                                <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                    <i class="bi bi-play-fill text-xs"></i>
                                                </div>
                                                <span>{{ $hero->button_2_text }}</span>
                                            </a>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Custom Organic Wave Divider (Mobile) -->
                    <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden leading-none z-10 block sm:hidden">
                        <svg class="relative block w-full h-8 text-[#072219]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.92,126.15,114.51,192,108.7,235.63,104.85,279.37,80,321.39,56.44Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    
                    <!-- Modern Surface Card Container (Mobile Only) -->
                    <div class="block sm:hidden relative w-full bg-[#072219] text-white px-6 py-6 rounded-t-[2.5rem] -mt-4 z-20 shadow-2xl border-t border-emerald-500/20">
                        <div class="max-w-xl">
                            <!-- Badge -->
                            @if($hero->badge)
                                <div class="inline-flex items-center gap-1.5 mb-2 bg-emerald-500/20 border border-emerald-500/30 px-2.5 py-1 rounded-full text-[10px] font-medium text-emerald-300 pointer-events-auto">
                                    <span>🌿</span>
                                    <span>{{ $hero->badge }}</span>
                                </div>
                            @endif
                            
                            <!-- H1 Title (Mobile Compact) -->
                            <h1 class="text-lg font-bold leading-snug text-white mb-2 max-w-full">
                                {{ $hero->title }}
                            </h1>
                            
                            <!-- Description (Line Clamp) -->
                            @if($hero->subtitle)
                                <p class="text-xs text-emerald-100/80 line-clamp-2 mb-4">
                                    {{ $hero->subtitle }}
                                </p>
                            @endif
                            
                            <!-- Compact CTAs -->
                            <div class="flex flex-col gap-2.5 w-full pointer-events-auto">
                                <!-- Primary Compact CTA -->
                                @if($hero->button_1_text && $hero->button_1_url)
                                    <a href="{{ $hero->button_1_url }}" class="group w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 text-xs font-semibold rounded-xl bg-emerald-500 hover:bg-emerald-400 text-emerald-950 shadow-lg shadow-emerald-950/50 transition-all hover:shadow-xl hover:-translate-y-0.5">
                                        <span>{{ $hero->button_1_text }}</span>
                                        <div class="w-3.5 h-3.5 rounded-full bg-emerald-600/40 flex items-center justify-center text-emerald-950 group-hover:scale-110 transition-transform">
                                            <i class="bi bi-arrow-right text-[8px] font-bold"></i>
                                        </div>
                                    </a>
                                @endif
                                
                                <!-- Secondary Compact CTA -->
                                @if($hero->button_2_text && $hero->button_2_url)
                                    <a href="{{ $hero->button_2_url }}" class="group w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 text-xs font-medium rounded-xl border border-emerald-500/40 bg-emerald-500/10 hover:bg-emerald-500/20 text-emerald-300 transition-all">
                                        <div class="w-3.5 h-3.5 rounded-full bg-emerald-500/30 flex items-center justify-center text-emerald-300 group-hover:scale-110 transition-transform">
                                            <i class="bi bi-play-fill text-[8px]"></i>
                                        </div>
                                        <span>{{ $hero->button_2_text }}</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <!-- White Background Section Below Wave (Desktop) -->
                    <div class="hidden sm:block relative w-full bg-white pt-0 pb-6">
                        <!-- Empty section for spacing below wave -->
                    </div>
                </div>
            @empty
                <!-- Fallback Slide if database has no active slides -->
                <div class="swiper-slide relative">
                    <!-- Visual Hero Area (Top) -->
                    <div class="relative w-full h-[45vh] md:h-[52vh] lg:h-[520px] lg:min-h-[580px]">
                        
                        <!-- SVG Animated Masking Frame Overlay -->
                        <svg class="absolute inset-0 w-full h-full pointer-events-none z-25" viewBox="0 0 1440 900" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="frameGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#10B981;stop-opacity:0.4" />
                                    <stop offset="100%" style="stop-color:#0F3D2E;stop-opacity:0.3" />
                                </linearGradient>
                            </defs>
                            <!-- Organic curved frame border -->
                            <path d="M 30,30 L 1410,30 Q 1425,30 1425,45 L 1425,855 Q 1425,870 1410,870 L 30,870 Q 15,870 15,855 L 15,45 Q 15,30 30,30 Z" 
                                  fill="none" 
                                  stroke="url(#frameGradient2)" 
                                  stroke-width="3" 
                                  stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  class=\"animate-svg-intro\"/>
                        </svg>
                        <picture>
                            <source srcset="{{ asset('build/assets/cropped-WhatsApp-Image-2026-07-17-at-11.01.42-1-1.jpeg') }}" type="image/jpeg">
                            <img 
                                src="{{ asset('build/assets/cropped-WhatsApp-Image-2026-07-17-at-11.01.42-1-1.jpeg') }}" 
                                alt="Hero DLH" 
                                class="absolute inset-0 w-full h-full object-cover object-top"
                                width="1920"
                                height="1080"
                                fetchpriority="high"
                                loading="eager"
                                decoding="async"
                            >
                        </picture>
                        
                        <!-- Strong Dark Emerald Gradient Overlay for Text Contrast -->
                        <div class="absolute inset-0 z-10 pointer-events-none bg-gradient-to-b md:bg-gradient-to-r from-emerald-950/90 via-emerald-900/80 md:via-emerald-900/75 to-emerald-950/60 md:to-transparent"></div>
                        
                        <!-- Text Content Overlay (DESKTOP ONLY) -->
                        <div class="absolute inset-0 z-20 hidden sm:flex flex-col items-start justify-center pt-24 md:pt-32 pb-36 md:pb-48 pointer-events-none">
                            <div class="container max-w-[1440px] px-8 md:px-16 lg:px-24 mx-auto w-full">
                                <div class="w-full lg:w-1/2">
                                    
                                    <!-- Badge with Glassmorphism Effect -->
                                    <div class="inline-flex items-center gap-2.5 mb-2 lg:mb-3 bg-black/30 backdrop-blur-md px-3.5 py-1.5 rounded-full shadow-lg border border-white/20 pointer-events-auto">
                                        <span class="text-base leading-none">🌿</span>
                                        <span class="text-emerald-300 font-bold text-xs lg:text-sm tracking-wide">DLH Kabupaten Tulungagung</span>
                                    </div>
                                    
                                    <!-- H1 Display Typography - Modern & Bold -->
                                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 lg:mb-6 leading-tight lg:leading-tight tracking-tight drop-shadow-md max-w-3xl">
                                        Menjaga Alam, Melestarikan Kehidupan.
                                    </h1>
                                    
                                    <!-- Body Copy -->
                                    <p class="text-white/90 text-sm md:text-base max-w-xl leading-relaxed drop-shadow mb-8 lg:mb-10">
                                        Dinas Lingkungan Hidup Tulungagung hadir untuk mewujudkan ekosistem yang sehat, asri, dan berkelanjutan melalui transparansi dan pelayanan prima.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Custom Organic Wave Divider (Mobile) -->
                    <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden leading-none z-10 block sm:hidden">
                        <svg class="relative block w-full h-8 text-[#072219]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.92,126.15,114.51,192,108.7,235.63,104.85,279.37,80,321.39,56.44Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    
                    <!-- Modern Surface Card Container (Mobile Only) -->
                    <div class="block sm:hidden relative w-full bg-[#072219] text-white px-6 py-6 rounded-t-[2.5rem] -mt-4 z-20 shadow-2xl border-t border-emerald-500/20">
                        <div class="max-w-xl">
                            <!-- Badge -->
                            <div class="inline-flex items-center gap-1.5 mb-2 bg-emerald-500/20 border border-emerald-500/30 px-2.5 py-1 rounded-full text-[10px] font-medium text-emerald-300 pointer-events-auto">
                                <span>🌿</span>
                                <span>DLH Kabupaten Tulungagung</span>
                            </div>
                            
                            <!-- H1 Title (Mobile Compact) -->
                            <h1 class="text-lg font-bold leading-snug text-white mb-2 max-w-full">
                                Menjaga Alam, Melestarikan Kehidupan.
                            </h1>
                            
                            <!-- Description (Line Clamp) -->
                            <p class="text-xs text-emerald-100/80 line-clamp-2 mb-4">
                                Dinas Lingkungan Hidup Tulungagung hadir untuk mewujudkan ekosistem yang sehat, asri, dan berkelanjutan melalui transparansi dan pelayanan prima.
                            </p>
                            
                            <!-- Compact CTAs -->
                            <div class="flex flex-col gap-2.5 w-full pointer-events-auto">
                                <!-- Primary Compact CTA -->
                                <a href="/" class="group w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 text-xs font-semibold rounded-xl bg-emerald-500 hover:bg-emerald-400 text-emerald-950 shadow-lg shadow-emerald-950/50 transition-all hover:shadow-xl hover:-translate-y-0.5">
                                    <span>Ajukan Layanan</span>
                                    <div class="w-3.5 h-3.5 rounded-full bg-emerald-600/40 flex items-center justify-center text-emerald-950 group-hover:scale-110 transition-transform">
                                        <i class="bi bi-arrow-right text-[8px] font-bold"></i>
                                    </div>
                                </a>
                                
                                <!-- Secondary Compact CTA -->
                                <a href="/" class="group w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 text-xs font-medium rounded-xl border border-emerald-500/40 bg-emerald-500/10 hover:bg-emerald-500/20 text-emerald-300 transition-all">
                                    <div class="w-3.5 h-3.5 rounded-full bg-emerald-500/30 flex items-center justify-center text-emerald-300 group-hover:scale-110 transition-transform">
                                        <i class="bi bi-play-fill text-[8px]"></i>
                                    </div>
                                    <span>Pelajari Lebih Lanjut</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- White Background Section Below Wave (Desktop) -->
                    <div class="hidden sm:block relative w-full bg-white pt-0 pb-6">
                        <!-- Empty section for spacing below wave -->
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper(".heroSwiper", {
                loop: true,
                speed: 900,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                effect: "fade",
                fadeEffect: {
                    crossFade: true
                }
            });
        }
    });
</script>
@endpush

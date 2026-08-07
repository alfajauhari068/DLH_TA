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
                <div class="swiper-slide">
                    <!-- Visual Hero Area (Top) -->
                    <div class="relative w-full h-[45vh] md:h-[52vh] lg:h-[520px] lg:min-h-[580px]">
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
                        
                        <!-- Premium green tinted overlay for color consistency -->
                        <div class="absolute inset-0 z-10 bg-[rgba(16,95,56,0.18)] mix-blend-multiply pointer-events-none"></div>
                        <div class="absolute inset-0 z-10 bg-gradient-to-b from-transparent via-transparent to-black/10 pointer-events-none"></div>
                    </div>
                    
                    <!-- Content Panel Area (Bottom Section) -->
                    <div class="relative z-30 w-full -mt-16 md:-mt-24 lg:-mt-36" style="filter: drop-shadow(0 -15px 30px rgba(16,95,56,0.06));">
                        <!-- Organic SVG Wave Divider -->
                        <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] transform -translate-y-[99%] pointer-events-none">
                            <svg class="relative block w-full h-[50px] md:h-[75px] lg:h-[100px]" viewBox="0 0 1440 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0,0 C300,60 650,100 1000,95 C1180,92 1320,88 1440,85 L1440,100 L0,100 Z" fill="#ffffff"></path>
                            </svg>
                        </div>

                        <div class="w-full pb-12 lg:pb-20 pt-2 md:pt-4 lg:pt-4 bg-white" 
                             style="background-image: 
                                    url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E&quot;),
                                    radial-gradient(circle at 10% 0%, rgba(15, 118, 110, 0.12) 0%, transparent 60%),
                                    radial-gradient(circle at 90% 100%, rgba(56, 189, 248, 0.08) 0%, transparent 60%),
                                    linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(34, 197, 94, 0.08) 35%, rgba(34, 197, 94, 0.03) 75%, #ffffff 100%);">
                        
                            <!-- Optional Leaf Watermark Decoration on the right -->
                            <div class="absolute bottom-0 right-0 opacity-[0.07] pointer-events-none w-1/3 max-w-[380px] z-0">
                                <img src="{{ asset('images/leaf-pattern.png') }}" alt="Leaf Pattern" class="w-full h-auto object-cover" onerror="this.style.display='none'">
                            </div>

                            <div class="container max-w-[1440px] px-8 md:px-16 lg:px-24 mx-auto relative z-10">
                                <div class="flex flex-col lg:flex-row items-start justify-between gap-0 lg:gap-2">
                                    
                                    <!-- Left Typography Column -->
                                    <div class="w-full lg:w-1/2 flex flex-col items-start text-left lg:-mt-20 xl:-mt-24 relative z-20">
                                        
                                        <!-- Badge -->
                                        @if($hero->badge)
                                            <div class="inline-flex items-center gap-2.5 mb-2 mt-0 lg:mb-3 bg-emerald-50/80 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm border border-emerald-100/60 relative z-10">
                                                <span class="text-base leading-none">🌿</span>
                                                <span class="text-emerald-900 font-bold text-[12px] lg:text-sm tracking-wide">{{ $hero->badge }}</span>
                                            </div>
                                        @endif
                                        
                                        <!-- H1 Display Typography -->
                                        <h1 class="text-[34px] md:text-5xl lg:text-[54px] font-black text-gray-900 mb-4 lg:mb-6 leading-[1.15] lg:leading-[1.1] tracking-tight relative z-10">
                                            {{ $hero->title }}
                                        </h1>
                                        
                                        <!-- Body Copy -->
                                        @if($hero->subtitle)
                                            <p class="text-gray-600 text-[15px] md:text-lg lg:text-xl font-normal mb-8 lg:mb-10 max-w-lg leading-relaxed relative z-10">
                                                {{ $hero->subtitle }}
                                            </p>
                                        @endif
                                        
                                        <!-- CTAs -->
                                        <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto relative z-10">
                                            <!-- Primary Solid CTA -->
                                            @if($hero->button_1_text && $hero->button_1_url)
                                                <a href="{{ $hero->button_1_url }}" class="group w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-primary text-white font-medium text-[15px] lg:text-base px-8 py-3.5 rounded-full shadow-lg shadow-primary/30 hover:bg-primary-dark hover:shadow-xl transition-all duration-300">
                                                    <span>{{ $hero->button_1_text }}</span>
                                                    <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
                                                        <i class="bi bi-arrow-right text-xs font-bold"></i>
                                                    </div>
                                                </a>
                                            @endif
                                            
                                            <!-- Secondary Outline CTA -->
                                            @if($hero->button_2_text && $hero->button_2_url)
                                                <a href="{{ $hero->button_2_url }}" class="group w-full sm:w-auto inline-flex items-center justify-center gap-3 text-primary font-medium text-[15px] lg:text-base px-8 py-3.5 rounded-full border border-primary hover:bg-primary/5 transition-all duration-300">
                                                    <div class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                        <i class="bi bi-play-fill text-xs"></i>
                                                    </div>
                                                    <span>{{ $hero->button_2_text }}</span>
                                                </a>
                                            @endif
                                        </div>
                                        
                                    </div>
                                    
                                    <!-- Right Empty Space -->
                                    <div class="w-full lg:w-1/2 hidden lg:block"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Fallback Slide if database has no active slides -->
                <div class="swiper-slide">
                    <!-- Visual Hero Area (Top) -->
                    <div class="relative w-full h-[45vh] md:h-[52vh] lg:h-[520px] lg:min-h-[580px]">
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
                        <div class="absolute inset-0 z-10 bg-[rgba(16,95,56,0.18)] mix-blend-multiply pointer-events-none"></div>
                        <div class="absolute inset-0 z-10 bg-gradient-to-b from-transparent via-transparent to-black/10 pointer-events-none"></div>
                    </div>
                    
                    <!-- Content Panel Area (Bottom Section) -->
                    <div class="relative z-30 w-full -mt-16 md:-mt-24 lg:-mt-36" style="filter: drop-shadow(0 -15px 30px rgba(16,95,56,0.06));">
                        <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] transform -translate-y-[99%] pointer-events-none">
                            <svg class="relative block w-full h-[50px] md:h-[75px] lg:h-[100px]" viewBox="0 0 1440 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0,0 C300,60 650,100 1000,95 C1180,92 1320,88 1440,85 L1440,100 L0,100 Z" fill="#ffffff"></path>
                            </svg>
                        </div>
                        <div class="w-full pb-12 lg:pb-20 pt-2 md:pt-4 lg:pt-4 bg-white" 
                             style="background-image: 
                                    radial-gradient(circle at 10% 0%, rgba(15, 118, 110, 0.12) 0%, transparent 60%),
                                    radial-gradient(circle at 90% 100%, rgba(56, 189, 248, 0.08) 0%, transparent 60%),
                                    linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(34, 197, 94, 0.08) 35%, rgba(34, 197, 94, 0.03) 75%, #ffffff 100%);">
                            <div class="container max-w-[1440px] px-8 md:px-16 lg:px-24 mx-auto relative z-10">
                                <div class="flex flex-col lg:flex-row items-start justify-between">
                                    <div class="w-full lg:w-1/2 flex flex-col items-start text-left lg:-mt-20 xl:-mt-24 relative z-20">
                                        <div class="inline-flex items-center gap-2.5 mb-2 bg-emerald-50/80 px-4 py-2 rounded-full border border-emerald-100/60">
                                            <span class="text-base leading-none">🌿</span>
                                            <span class="text-emerald-900 font-bold text-[12px] tracking-wide">DLH Kabupaten Tulungagung</span>
                                        </div>
                                        <h1 class="text-[34px] md:text-5xl lg:text-[54px] font-black text-gray-900 mb-4 leading-[1.15]">
                                            Menjaga Alam, Melestarikan Kehidupan.
                                        </h1>
                                        <p class="text-gray-600 text-[15px] md:text-lg mb-8 max-w-lg">
                                            Dinas Lingkungan Hidup Tulungagung hadir untuk mewujudkan ekosistem yang sehat, asri, dan berkelanjutan melalui transparansi dan pelayanan prima.
                                        </p>
                                    </div>
                                    <div class="w-full lg:w-1/2 hidden lg:block"></div>
                                </div>
                            </div>
                        </div>
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

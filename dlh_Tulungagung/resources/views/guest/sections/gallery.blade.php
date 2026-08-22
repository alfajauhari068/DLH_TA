<section class="relative py-16 md:py-24 bg-[#F8FCF9] overflow-hidden">
    
    <!-- Subtle Ambient Glow -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-5 md:px-6 lg:px-8 relative z-10">
        
        <!-- HEADER SECTION -->
        <div class="max-w-3xl mx-auto text-center mb-12 md:mb-16">
            <div class="inline-flex items-center gap-2.5 px-6 py-2.5 bg-white text-primary font-bold text-[11px] tracking-widest uppercase rounded-full mb-6 shadow-sm border border-gray-200">
                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                GALERI VISUAL
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-[#163020] mb-6 leading-tight">Bingkai Lestari</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-8">Dokumentasi langkah nyata dan momen inspiratif kami untuk bumi Tulungagung.</p>
        </div>

        @php
            $displayGalleries = collect([]);
            if (isset($galleries) && $galleries->count() > 0) {
                $displayGalleries = $galleries->take(5);
            }
            
            $demoImages = [
                'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1200&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1518173946687-a4c8892bbd9f?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1448375240586-882707db888b?q=80&w=800&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1503756234508-e32369269deb?q=80&w=800&auto=format&fit=crop'
            ];

            $needed = 5 - $displayGalleries->count();
            if ($needed > 0) {
                for ($i = 0; $i < $needed; $i++) {
                    $displayGalleries->push((object)[
                        'title' => 'Inisiatif Lingkungan ' . ($i + 1),
                        'album_name' => 'Program Hijau',
                        'image_url' => $demoImages[$i],
                        'photos_count' => rand(5, 24)
                    ]);
                }
            }
        @endphp

        <!-- Asymmetric Gallery Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
            
            <!-- Large Featured Image -->
            @php $first = $displayGalleries->first(); @endphp
            <a href="{{ url('/galeri') }}" aria-label="Buka galeri {{ $first->title }}" class="block group relative rounded-[32px] overflow-hidden cursor-pointer shadow-[0_15px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.10)] transition-all duration-300 hover:-translate-y-2 h-[400px] lg:h-[600px] focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                <img src="{{ $first->image_url }}" alt="{{ $first->title }}" loading="lazy" decoding="async" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out">
                
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-300"></div>
                
                <!-- Hover Counter & Icon -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-95 group-hover:scale-100 z-20">
                    <div class="w-20 h-20 bg-white/20 rounded-full flex flex-col items-center justify-center text-white border border-white/30 backdrop-blur-md shadow-sm">
                        <i class="bi bi-images text-xl mb-1" aria-hidden="true"></i>
                        <span class="text-[10px] font-bold tracking-widest">{{ $first->photos_count ?? rand(5,15) }} FOTO</span>
                    </div>
                </div>

                <div class="absolute inset-0 z-10 p-10 flex flex-col justify-end transform transition-transform duration-300">
                    <span class="inline-block px-4 py-1.5 bg-primary text-white text-xs font-bold uppercase tracking-widest rounded-full mb-4 self-start shadow-sm">{{ $first->album_name ?? 'Dokumentasi' }}</span>
                    <h3 class="text-3xl lg:text-4xl font-black text-white leading-tight transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">{{ $first->title }}</h3>
                </div>
            </a>

            <!-- Grid 2x2 -->
            <div class="grid grid-cols-2 gap-6 lg:gap-8 h-[400px] lg:h-[600px]">
                @foreach($displayGalleries->skip(1)->take(4) as $item)
                <a href="{{ url('/galeri') }}" aria-label="Buka galeri {{ $item->title }}" class="block group relative rounded-3xl overflow-hidden cursor-pointer shadow-sm hover:shadow-[0_15px_40px_rgba(0,0,0,0.10)] transition-all duration-300 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" loading="lazy" decoding="async" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500 ease-out">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-300"></div>

                    <!-- Hover Counter -->
                    <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-md px-3 py-1.5 rounded-full text-white text-xs font-bold border border-white/30 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-20 shadow-sm">
                        <i class="bi bi-camera" aria-hidden="true"></i> {{ $item->photos_count ?? rand(3,10) }}
                    </div>
                    
                    <div class="absolute inset-0 z-10 p-6 flex flex-col justify-end transform transition-transform duration-300">
                        <h4 class="text-lg lg:text-xl font-bold text-white leading-tight transform translate-y-1 group-hover:translate-y-0 transition-transform duration-300 line-clamp-2">{{ $item->title }}</h4>
                        <div class="overflow-hidden max-h-0 group-hover:max-h-10 transition-all duration-300 opacity-0 group-hover:opacity-100 mt-2">
                            <span class="text-white/80 text-xs font-medium uppercase tracking-wider"><i class="bi bi-folder2-open me-1" aria-hidden="true"></i> {{ $item->album_name ?? 'Dokumentasi' }}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            
        </div>
        
        <!-- BOTTOM CTA -->
        <div class="mt-16 text-center">
            <a href="{{ url('/galeri') }}" class="inline-flex items-center justify-center gap-3 px-8 py-3.5 bg-white text-primary font-medium text-base rounded-full border border-gray-200 shadow-sm hover:border-primary hover:bg-primary/5 hover:-translate-y-1 transition-all duration-300">
                Jelajahi Semua Album
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        
    </div>
</section>

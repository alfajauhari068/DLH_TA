<section class="relative overflow-hidden py-14 md:py-20 lg:py-28 bg-[#F8FAFC]">
    
    <!-- Top SVG Divider (Organic Wave) -->
    <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] z-0 pointer-events-none rotate-180">
        <svg class="relative block w-full h-[40px] md:h-[60px] lg:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="#ffffff"></path>
        </svg>
    </div>

    <!-- Ambient Glow Top Left -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px] -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

    <div class="container relative z-10 px-4 mt-8">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-gray-200 text-gray-700 text-xs font-bold uppercase tracking-widest mb-4 shadow-sm">
                    <i class="bi bi-images text-primary" aria-hidden="true"></i> Galeri Visual
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">Bingkai Lestari</h2>
                <p class="text-gray-500 text-lg md:text-xl font-medium">Dokumentasi langkah nyata kami untuk bumi Tulungagung.</p>
            </div>
            <a href="{{ url('/galeri') }}" class="group inline-flex items-center gap-2 px-8 py-3.5 bg-gray-900 text-white font-black rounded-full hover:bg-primary transition-colors duration-300 shadow-elevation-1 hover:shadow-elevation-2 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                Lihat Semua <i class="bi bi-arrow-right transform group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
            </a>
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

        <!-- Masonry Grid 1 Hero + 4 Small -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            
            <!-- Large Featured Image -->
            @php $first = $displayGalleries->first(); @endphp
            <a href="{{ url('/galeri') }}" aria-label="Buka galeri {{ $first->title }}" class="block group relative rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition-all duration-500 hover:-translate-y-1 h-[400px] lg:h-[600px] focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                <img src="{{ $first->image_url }}" alt="{{ $first->title }}" loading="lazy" decoding="async" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-500"></div>
                
                <!-- Hover Counter & Icon -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform scale-90 group-hover:scale-100 z-20">
                    <div class="w-24 h-24 bg-white/30 rounded-full flex flex-col items-center justify-center text-white border border-white/30 shadow-glass backdrop-blur-sm">
                        <i class="bi bi-images text-2xl mb-1" aria-hidden="true"></i>
                        <span class="text-xs font-bold tracking-widest">{{ $first->photos_count ?? rand(5,15) }} FOTO</span>
                    </div>
                </div>

                <div class="absolute inset-0 z-10 p-8 flex flex-col justify-end transform transition-transform duration-500">
                    <span class="inline-block px-4 py-1.5 bg-primary text-white text-xs font-bold rounded-full mb-3 self-start shadow-sm">{{ $first->album_name ?? 'Dokumentasi' }}</span>
                    <h3 class="text-3xl lg:text-4xl font-black text-white leading-tight transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">{{ $first->title }}</h3>
                </div>
            </a>

            <!-- Grid 2x2 -->
            <div class="grid grid-cols-2 gap-4 h-[400px] lg:h-[600px]">
                @foreach($displayGalleries->skip(1)->take(4) as $item)
                <a href="{{ url('/galeri') }}" aria-label="Buka galeri {{ $item->title }}" class="block group relative rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition-all duration-500 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" loading="lazy" decoding="async" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-500"></div>

                    <!-- Hover Counter -->
                    <div class="absolute top-4 right-4 bg-white/30 backdrop-blur-sm px-3 py-1.5 rounded-full text-white text-xs font-bold border border-white/30 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-20 shadow-glass">
                        <i class="bi bi-camera" aria-hidden="true"></i> {{ $item->photos_count ?? rand(3,10) }}
                    </div>
                    
                    <div class="absolute inset-0 z-10 p-5 flex flex-col justify-end transform transition-transform duration-500">
                        <h4 class="text-lg lg:text-xl font-bold text-white leading-tight transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 line-clamp-2">{{ $item->title }}</h4>
                        <div class="overflow-hidden max-h-0 group-hover:max-h-10 transition-all duration-300 opacity-0 group-hover:opacity-100 mt-2">
                            <span class="text-white/70 text-xs font-medium"><i class="bi bi-folder2-open me-1" aria-hidden="true"></i> {{ $item->album_name ?? 'Dokumentasi' }}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            
        </div>
    </div>
</section>

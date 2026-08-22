<section class="relative py-16 md:py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-5 md:px-6 lg:px-8 relative z-10">
        
        <!-- HEADER SECTION -->
        <div class="max-w-3xl mx-auto text-center mb-12 md:mb-16">
            <div class="inline-flex items-center gap-2.5 px-6 py-2.5 bg-white text-primary font-bold text-[11px] tracking-widest uppercase rounded-full mb-6 shadow-sm border border-gray-200">
                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                JENDELA INFORMASI
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-[#163020] mb-6 leading-tight">Kabar & Publikasi</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-8">Rangkuman peristiwa, inovasi, dan langkah nyata kami dalam pelestarian lingkungan.</p>
        </div>

        <!-- CONTENT GRID -->
        @if(isset($latestNews) && $latestNews->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-10 gap-x-8">
                @foreach($latestNews->take(3) as $item)
                    <!-- Premium News Card -->
                    <a href="{{ url('/berita/' . ($item->slug ?? '')) }}" class="group relative flex flex-col bg-white rounded-[32px] shadow-[0_15px_40px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.10)] transition-all duration-300 hover:-translate-y-2 overflow-hidden border border-gray-100 h-full">
                        
                        <!-- Image Area -->
                        <div class="w-full h-[240px] relative overflow-hidden shrink-0">
                            <img src="{{ $item->featured_image ? asset('storage/' . $item->featured_image) : asset('images/default-news.jpg') }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            
                            <!-- Category Badge inside Image -->
                            @if(isset($item->categories) && $item->categories->count() > 0)
                                <div class="absolute top-5 left-5">
                                    <span class="bg-white/90 backdrop-blur text-primary text-[10px] font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm">
                                        {{ $item->categories->first()->name }}
                                    </span>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Content Area -->
                        <div class="p-8 flex-grow flex flex-col">
                            <div class="flex items-center gap-2 text-gray-400 text-xs mb-4 font-medium tracking-wide uppercase">
                                <i class="bi bi-calendar3"></i>
                                <span>{{ isset($item->published_at) ? \Carbon\Carbon::parse($item->published_at)->translatedFormat('d M Y') : '-' }}</span>
                            </div>
                            
                            <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-3 group-hover:text-primary transition-colors duration-300 line-clamp-2 leading-snug">
                                {{ $item->title }}
                            </h3>
                            
                            <p class="text-gray-500 text-sm leading-7 line-clamp-3 mb-8">
                                {{ Str::limit($item->summary ?? strip_tags($item->content ?? ''), 120) }}
                            </p>
                            
                            <!-- Footer Action -->
                            <div class="mt-auto flex items-center gap-2 text-primary text-sm font-bold uppercase tracking-widest">
                                Baca <i class="bi bi-arrow-right transform group-hover:translate-x-1.5 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            
            <!-- BOTTOM CTA -->
            <div class="mt-16 text-center">
                <a href="{{ url('/berita') }}" class="inline-flex items-center justify-center gap-3 px-8 py-3.5 bg-white text-primary font-medium text-base rounded-full border border-gray-200 shadow-sm hover:border-primary hover:bg-primary/5 hover:-translate-y-1 transition-all duration-300">
                    Arsip Berita
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        @else
            <!-- Empty State -->
            <div class="bg-white rounded-[32px] p-12 text-center flex flex-col justify-center items-center border border-gray-100 shadow-[0_15px_40px_rgba(0,0,0,0.05)] min-h-[300px]">
                <div class="w-16 h-16 rounded-full bg-gray-50 border border-gray-100 flex items-center justify-center mb-6">
                    <i class="bi bi-journal-x text-gray-400 text-2xl"></i>
                </div>
                <h4 class="text-gray-900 font-semibold text-xl mb-2">Belum Ada Publikasi</h4>
                <p class="text-gray-500 text-sm">Informasi terbaru akan segera diperbarui.</p>
            </div>
        @endif
        
    </div>
</section>

<section class="relative py-14 md:py-20 lg:py-28 bg-[#F8FAFC] overflow-hidden">
    <div class="container px-4 relative z-10">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
            <div class="max-w-2xl">
                <span class="inline-block px-4 py-2 bg-white text-primary font-bold text-xs uppercase tracking-widest rounded-full mb-6 shadow-sm border border-gray-100">Jendela Informasi</span>
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-4 leading-tight">Kabar & Publikasi</h2>
                <p class="text-gray-500 text-lg leading-relaxed">Rangkuman peristiwa, inovasi, dan langkah nyata kami dalam pelestarian lingkungan.</p>
            </div>
            <a href="{{ url('/berita') }}" class="group inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-700 font-bold rounded-full border border-gray-200 hover:border-primary hover:text-primary transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                Arsip Berita <i class="bi bi-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        @if(isset($latestNews) && $latestNews->count() > 0)
            @php $featured = $latestNews->first(); @endphp
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Massive Featured Article (Left Side - 8 cols) -->
                <div class="lg:col-span-8">
                    <a href="{{ url('/berita/' . ($featured->slug ?? '')) }}" class="group relative block w-full h-[500px] lg:h-full min-h-[500px] rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        <!-- Full bleed background -->
                        <div class="absolute inset-0 z-0 bg-gray-100">
                            <img src="{{ $featured->featured_image ? asset('storage/' . $featured->featured_image) : asset('images/default-news.jpg') }}" alt="{{ $featured->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                        </div>
                        
                        <!-- Rich Gradient Overlay -->
                        <div class="absolute inset-0 z-10 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent opacity-85 group-hover:opacity-95 transition-opacity duration-500"></div>

                        <!-- Content -->
                        <div class="absolute inset-0 z-20 p-8 md:p-10 flex flex-col justify-end">
                            <div class="flex items-center gap-4 mb-4">
                                @if(isset($featured->categories) && $featured->categories->count() > 0)
                                    <span class="bg-primary text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">{{ $featured->categories->first()->name }}</span>
                                @endif
                                <span class="text-white/80 font-medium text-sm flex items-center gap-2">
                                    <i class="bi bi-calendar3" aria-hidden="true"></i> 
                                    {{ isset($featured->published_at) ? \Carbon\Carbon::parse($featured->published_at)->translatedFormat('d F Y') : '-' }}
                                </span>
                            </div>
                            
                            <h3 class="text-3xl md:text-4xl font-black text-white mb-4 leading-tight group-hover:text-light-green transition-colors duration-300 drop-shadow-md">
                                {{ $featured->title }}
                            </h3>
                            
                            <p class="text-white/80 text-lg line-clamp-2 md:line-clamp-3 leading-relaxed mb-6 max-w-2xl">
                                {{ Str::limit($featured->summary ?? strip_tags($featured->content ?? ''), 180) }}
                            </p>
                            
                            <div class="inline-flex items-center gap-2 text-light-green font-bold uppercase tracking-widest text-xs group-hover:text-white transition-colors">
                                Baca Artikel <i class="bi bi-arrow-right transform group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Secondary News Stack (Right Side - 4 cols) -->
                <div class="lg:col-span-4 flex flex-col gap-6">
                    @if($latestNews->count() > 1)
                        @foreach($latestNews->skip(1)->take(3) as $item)
                            <x-guest.news-card-mini 
                                href="{{ url('/berita/' . ($item->slug ?? '')) }}"
                                image="{{ $item->featured_image ? asset('storage/' . $item->featured_image) : asset('images/default-news.jpg') }}"
                                title="{{ $item->title }}"
                                publishedAt="{{ isset($item->published_at) ? \Carbon\Carbon::parse($item->published_at)->diffForHumans() : '-' }}"
                                summary="{{ Str::limit($item->summary ?? strip_tags($item->content ?? ''), 80) }}"
                            />
                        @endforeach
                    @endif
                </div>
            </div>

        @else
            <!-- Empty State -->
            <div class="bg-white rounded-[32px] p-12 text-center flex flex-col justify-center items-center border border-gray-100 shadow-sm min-h-[400px]">
                <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mb-6 shadow-sm">
                    <i class="bi bi-journal-x text-gray-400 text-4xl"></i>
                </div>
                <h4 class="text-gray-900 font-black text-2xl mb-2">Belum Ada Publikasi</h4>
                <p class="text-gray-500 text-lg">Informasi terbaru akan segera diperbarui.</p>
            </div>
        @endif
        
    </div>
</section>

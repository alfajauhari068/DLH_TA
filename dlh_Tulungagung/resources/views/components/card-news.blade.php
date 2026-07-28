@props(['news'])

<div class="bg-white rounded-2xl shadow-elevation-1 hover:shadow-elevation-2 transition-all duration-300 hover:-translate-y-1 overflow-hidden border border-gray-100 flex flex-col h-full group relative">
    <!-- Image -->
    <a href="{{ $news->url ?? '#' }}" class="block aspect-[16/10] overflow-hidden relative">
        <div class="absolute inset-0 z-10 bg-gradient-to-t from-gray-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        
        @if(isset($news->category_name))
            <span class="absolute top-4 left-4 bg-white/95 text-primary text-xs font-bold px-3 py-1.5 rounded-full z-20 shadow-sm">
                {{ $news->category_name }}
            </span>
        @endif
        
        <!-- Share Action on Hover -->
        <button class="absolute top-4 right-4 w-8 h-8 bg-white/95 text-gray-500 hover:text-primary rounded-full z-20 shadow-sm flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0" title="Share">
            <i class="bi bi-share-fill text-xs"></i>
        </button>

        <img src="{{ $news->image_url ?? asset('images/default-news.jpg') }}" alt="{{ $news->title }}" loading="lazy" decoding="async" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
    </a>

    <!-- Content -->
    <div class="p-6 flex flex-col flex-grow relative z-20 bg-white">
        <!-- Metadata: Date & Read Time -->
        <div class="flex items-center text-xs font-medium text-gray-400 mb-3 gap-4">
            <div class="flex items-center gap-1.5">
                <i class="bi bi-calendar3"></i>
                <span>{{ isset($news->published_at) ? \Carbon\Carbon::parse($news->published_at)->translatedFormat('d F Y') : '-' }}</span>
            </div>
            <div class="flex items-center gap-1.5">
                <i class="bi bi-clock"></i>
                <span>{{ rand(3, 8) }} min read</span>
            </div>
        </div>

        <!-- Title -->
        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight group-hover:text-primary transition-colors">
            <a href="{{ $news->url ?? '#' }}">{{ Str::limit($news->title, 65) }}</a>
        </h3>

        <!-- Excerpt -->
        <p class="text-sm text-gray-500 mb-6 flex-grow leading-relaxed">
            {{ Str::limit($news->excerpt ?? strip_tags($news->content ?? ''), 110) }}
        </p>

        <!-- Footer: Author & CTA -->
        <div class="flex items-center justify-between pt-4 border-t border-gray-100 mt-auto">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-light-green flex items-center justify-center text-primary font-bold text-xs">
                    {{ substr($news->author->name ?? 'A', 0, 1) }}
                </div>
                <span class="text-xs font-semibold text-gray-600">{{ $news->author->name ?? 'Administrator' }}</span>
            </div>
            
            <a href="{{ $news->url ?? '#' }}" class="text-primary text-sm font-bold inline-flex items-center gap-1 group/cta px-4 py-2 bg-light-green rounded-full hover:bg-primary hover:text-white transition-colors duration-300">
                Baca 
                <i class="bi bi-arrow-right transform group-hover/cta:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
</div>

@props([
    'url',
    'title',
    'summary' => null,
    'thumbnail' => null,
    'badge' => null,
    'date' => null,
    'author' => null,
    'fallbackIcon' => 'bi-file-text'
])

<a href="{{ $url }}" class="group bg-white/60 backdrop-blur-sm rounded-[24px] border border-white hover:border-white/50 hover:bg-white/90 hover:soft-shadow hover-lift overflow-hidden flex flex-col transition-all duration-300 h-full focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2">
    <div class="relative h-48 bg-gray-50 overflow-hidden flex-shrink-0">
        @php
            $resolvedThumbnail = $thumbnail ?: asset('images/placeholder-news.svg');
        @endphp
        @if($thumbnail)
            <img src="{{ $thumbnail }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null;this.src='{{ asset('images/placeholder-news.svg') }}';">
        @else
            <img src="{{ $resolvedThumbnail }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" onerror="this.onerror=null;this.src='{{ asset('images/placeholder-news.svg') }}';">
        @endif

        @if($badge)
            <div class="absolute top-3 left-3 flex z-10">
                <span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full border border-gray-200 bg-white/90 backdrop-blur-sm text-gray-600 shadow-sm">
                    {{ $badge }}
                </span>
            </div>
        @endif
        
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    </div>

    <div class="p-5 flex-1 flex flex-col">
        <h4 class="text-lg font-bold text-slate-900 line-clamp-2 mb-2 group-hover:text-primary-green transition-colors">
            {{ $title }}
        </h4>
        
        @if($summary)
            <p class="text-sm text-gray-500 line-clamp-2 mb-4 flex-1">
                {{ $summary }}
            </p>
        @else
            <div class="flex-1"></div>
        @endif
        
        @if($date || $author)
            <div class="text-xs text-gray-400 mt-auto pt-4 border-t border-gray-50 flex items-center justify-between">
                @if($author)
                    <div class="flex items-center gap-1.5 truncate pr-2">
                        <i class="bi bi-person-circle"></i>
                        <span class="truncate">{{ $author }}</span>
                    </div>
                @endif
                @if($date)
                    <div class="flex items-center gap-1.5 shrink-0">
                        <i class="bi bi-calendar3"></i>
                        <span>{{ $date }}</span>
                    </div>
                @endif
            </div>
        @endif
    </div>
</a>

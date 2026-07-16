@props(['news'])

<div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col h-full">
    <!-- Image -->
    <a href="{{ $news->url ?? '#' }}" class="block aspect-video overflow-hidden relative">
        @if(isset($news->category_name))
            <span class="absolute top-3 left-3 bg-secondary text-white text-xs font-semibold px-2.5 py-1 rounded-md z-10">
                {{ $news->category_name }}
            </span>
        @endif
        <img src="{{ $news->image_url ?? asset('images/default-news.jpg') }}" alt="{{ $news->title }}" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
    </a>

    <!-- Content -->
    <div class="p-5 flex flex-col flex-grow">
        <!-- Date -->
        <div class="flex items-center text-xs text-gray-500 mb-3 gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span>{{ isset($news->published_at) ? \Carbon\Carbon::parse($news->published_at)->translatedFormat('d F Y') : '-' }}</span>
        </div>

        <!-- Title -->
        <h3 class="text-lg font-bold text-gray-800 mb-2 leading-tight hover:text-primary transition-colors">
            <a href="{{ $news->url ?? '#' }}">{{ Str::limit($news->title, 60) }}</a>
        </h3>

        <!-- Excerpt -->
        <p class="text-sm text-gray-600 mb-4 flex-grow">
            {{ Str::limit($news->excerpt ?? strip_tags($news->content ?? ''), 100) }}
        </p>

        <!-- Read More -->
        <a href="{{ $news->url ?? '#' }}" class="text-primary text-sm font-semibold inline-flex items-center gap-1 group mt-auto">
            Selengkapnya 
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>
</div>

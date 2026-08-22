@props(['href', 'image', 'title', 'publishedAt', 'summary'])

<a href="{{ $href }}" class="group bg-transparent p-3 rounded-[24px] hover:bg-white/80 hover:backdrop-blur-sm hover:soft-shadow hover-lift border border-transparent hover:border-white transition-all flex items-center gap-5 focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2">
    <div class="w-[120px] h-[120px] flex-shrink-0 rounded-[16px] overflow-hidden relative shadow-sm">
        <div class="absolute inset-0 bg-gray-900/10 group-hover:bg-transparent transition-colors z-10"></div>
        <img src="{{ $image }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="{{ $title }}">
    </div>
    <div class="flex flex-col flex-grow py-1">
        <span class="text-primary-green font-bold text-[10px] uppercase tracking-widest mb-1.5 flex items-center gap-1.5">
            <i class="bi bi-clock" aria-hidden="true"></i> {{ $publishedAt }}
        </span>
        <h4 class="text-gray-900 font-bold text-base leading-snug group-hover:text-primary-green transition-colors line-clamp-2 mb-2">
            {{ $title }}
        </h4>
        <p class="text-gray-500 text-sm line-clamp-2 leading-relaxed">
            {{ $summary }}
        </p>
    </div>
</a>

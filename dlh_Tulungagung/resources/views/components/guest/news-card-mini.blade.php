@props(['href', 'image', 'title', 'publishedAt', 'summary'])

<a href="{{ $href }}" class="group bg-white rounded-[24px] p-5 shadow-md hover:shadow-xl hover:shadow-primary/5 transition-all duration-300 hover:-translate-y-1.5 border border-gray-100 flex flex-col gap-4 flex-grow focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
    <div class="w-full h-[140px] flex-shrink-0 rounded-[16px] overflow-hidden relative">
        <div class="absolute inset-0 bg-gray-900/10 group-hover:bg-transparent transition-colors z-10"></div>
        <img src="{{ $image }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="{{ $title }}">
    </div>
    <div class="flex flex-col flex-grow">
        <h4 class="text-gray-900 font-bold text-base leading-snug group-hover:text-primary transition-colors line-clamp-2 mb-2">
            {{ $title }}
        </h4>
        <span class="text-primary font-bold text-[10px] uppercase tracking-widest mb-3 flex items-center gap-1.5">
            <i class="bi bi-clock" aria-hidden="true"></i> {{ $publishedAt }}
        </span>
        <p class="text-gray-500 text-sm line-clamp-2 leading-relaxed">
            {{ $summary }}
        </p>
    </div>
</a>

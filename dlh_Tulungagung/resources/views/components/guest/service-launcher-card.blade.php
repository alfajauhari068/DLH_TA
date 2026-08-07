@props(['href', 'icon', 'title', 'subtitle' => null])

<a href="{{ $href }}" class="group flex flex-col items-center justify-center text-center w-full p-4 sm:p-6 md:p-8 bg-white rounded-3xl border border-gray-100 soft-shadow hover-lift transition-all duration-300 cursor-pointer focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2 min-w-0 break-words relative overflow-hidden z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-light-green/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></div>
    <!-- Icon Container -->
    <div class="flex items-center justify-center w-14 h-14 md:w-20 md:h-20 lg:w-24 lg:h-24 mb-4 text-primary-green group-hover:text-primary-dark transition-colors duration-200" aria-hidden="true">
        <i class="bi {{ $icon }} text-4xl md:text-5xl lg:text-6xl group-hover:scale-110 transition-transform duration-300 drop-shadow-sm"></i>
    </div>
    
    <!-- Title -->
    <h4 class="text-sm md:text-base lg:text-lg font-bold text-gray-900 leading-tight group-hover:text-primary transition-colors duration-200 line-clamp-2">
        {{ $title }}
    </h4>
    
    <!-- Optional Subtitle -->
    @if($subtitle)
    <p class="text-xs md:text-sm text-gray-500 mt-2 line-clamp-1 group-hover:text-gray-600 transition-colors">
        {{ $subtitle }}
    </p>
    @endif
</a>

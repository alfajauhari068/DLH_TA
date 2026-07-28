@props([
    'src',
    'alt' => '',
    'caption' => null,
    'aspect' => 'aspect-video', // aspect-square, aspect-video, aspect-[3/4]
    'rounded' => 'rounded-2xl',
])

<figure class="w-full m-0 group">
    <div class="{{ $aspect }} {{ $rounded }} overflow-hidden bg-gray-100 relative shadow-sm border border-gray-100">
        <!-- Blur Placeholder -->
        <div class="absolute inset-0 bg-gray-200 animate-pulse"></div>
        
        <img 
            src="{{ $src }}" 
            alt="{{ $alt }}" 
            loading="lazy"
            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-0 transition-opacity duration-300"
            onload="this.classList.remove('opacity-0'); this.previousElementSibling.remove();"
        >
        
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
    </div>
    
    @if($caption)
        <figcaption class="mt-3 text-sm text-gray-500 text-center italic px-4">
            {{ $caption }}
        </figcaption>
    @endif
</figure>

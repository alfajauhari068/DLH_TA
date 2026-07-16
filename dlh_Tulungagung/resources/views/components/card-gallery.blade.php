@props(['item'])

<div class="group relative rounded-2xl overflow-hidden shadow-sm cursor-pointer aspect-square bg-gray-100">
    <!-- Image -->
    <img src="{{ $item->image_url ?? asset('images/default-gallery.jpg') }}" alt="{{ $item->title ?? 'Galeri' }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
        <h3 class="text-white font-semibold text-lg leading-tight mb-1">{{ Str::limit($item->title ?? 'Tanpa Judul', 50) }}</h3>
        @if(isset($item->album_name))
            <p class="text-gray-300 text-xs">{{ $item->album_name }}</p>
        @endif
    </div>
</div>

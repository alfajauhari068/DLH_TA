@props(['item'])

@if(isset($item->slug))
<a href="{{ route('galleries.detail', $item->slug) }}" class="d-block w-100 h-100 text-decoration-none">
@endif
<div class="position-relative overflow-hidden bg-dark group cursor-pointer w-100 h-100 rounded-4 shadow-sm" style="min-height: 250px;">
    <img src="{{ $item->image_url ?? asset('images/default-gallery.jpg') }}" alt="{{ $item->title ?? 'Galeri' }}" class="w-100 h-100 object-fit-cover group-hover-scale transition-all opacity-75">
    
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4 transition-all group-hover-overlay" style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 60%);">
        <h4 class="text-white fs-5 fw-bold mb-1 text-shadow group-hover-translate-up transition-all">{{ Str::limit($item->title ?? 'Tanpa Judul', 50) }}</h4>
        @if(isset($item->album_name))
            <p class="text-white-50 small mb-0 fw-medium group-hover-translate-up-delay transition-all"><i class="bi bi-folder2-open me-1"></i> {{ $item->album_name }}</p>
        @endif
    </div>
</div>
@if(isset($item->slug))
</a>
@endif

<style>
    .transition-all { transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1); }
    .group-hover-scale { transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
    .group:hover .group-hover-scale { transform: scale(1.08); filter: brightness(1.1); }
    .group:hover .group-hover-overlay { background: linear-gradient(to top, rgba(20, 92, 37, 0.95) 0%, rgba(0,0,0,0) 70%) !important; }
    
    .group-hover-translate-up { transform: translateY(10px); }
    .group-hover-translate-up-delay { transform: translateY(15px); opacity: 0; }
    
    .group:hover .group-hover-translate-up { transform: translateY(0); }
    .group:hover .group-hover-translate-up-delay { transform: translateY(0); opacity: 1; transition-delay: 0.1s; }
    
    .text-shadow { text-shadow: 0 4px 10px rgba(0,0,0,0.5); }
</style>

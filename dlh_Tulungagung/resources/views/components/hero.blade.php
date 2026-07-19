@props([
    'title' => '',
    'subtitle' => null,
    'breadcrumbs' => [],
    'bgImage' => null
])

<section class="position-relative pt-5 pb-4 bg-dark overflow-hidden">
    <!-- Background Image with Overlay -->
    @php
        $defaultBg = 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=2000&auto=format&fit=crop';
        $bg = $bgImage ? asset('storage/' . $bgImage) : $defaultBg;
    @endphp
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-50" style="background-image: url('{{ $bg }}'); background-size: cover; background-position: center;"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(20, 92, 37, 0.95) 0%, rgba(13, 75, 34, 0.8) 100%);"></div>
    
    <div class="container position-relative z-3 pt-5 mt-5 pb-5 text-center text-md-start">
        @if(!empty($breadcrumbs))
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb bg-white bg-opacity-10 d-inline-flex px-4 py-2 rounded-pill shadow-sm" style="backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-white text-decoration-none d-flex align-items-center gap-2">
                            <i class="bi bi-house-door-fill"></i> Beranda
                        </a>
                    </li>
                    @foreach($breadcrumbs as $breadcrumb)
                        <li class="breadcrumb-item active text-white fw-bold d-flex align-items-center before-none" aria-current="page">
                            <i class="bi bi-chevron-right mx-2 text-white-50" style="font-size: 0.75rem;"></i>
                            @if(isset($breadcrumb['url']))
                                <a href="{{ $breadcrumb['url'] }}" class="text-white text-decoration-none">{{ $breadcrumb['label'] }}</a>
                            @else
                                {{ $breadcrumb['label'] }}
                            @endif
                        </li>
                    @endforeach
                </ol>
            </nav>
            <style>
                .breadcrumb-item + .breadcrumb-item::before { display: none; }
            </style>
        @endif

        <h1 class="display-4 fw-bolder text-white mb-3 text-shadow">{{ $title }}</h1>
        
        @if($subtitle)
            <p class="text-white-75 fs-5" style="max-width: 700px;">{{ $subtitle }}</p>
        @endif
    </div>
</section>

<style>
    .text-shadow { text-shadow: 0 4px 10px rgba(0,0,0,0.3); }
</style>

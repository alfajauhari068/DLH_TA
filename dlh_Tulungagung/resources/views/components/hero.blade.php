@props([
    'title' => '',
    'subtitle' => null,
    'breadcrumbs' => [],
    'bgImage' => null
])

<section class="relative pt-28 pb-20 overflow-hidden rounded-b-3xl shadow-elevation-1 mb-12">
    <!-- Layer 1: Forest Image -->
    @php
        $defaultBg = 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=2000&auto=format&fit=crop';
        $bg = $bgImage ? asset('storage/' . $bgImage) : $defaultBg;
    @endphp
    <div class="absolute inset-0 z-0">
        <img src="{{ $bg }}" alt="Hero Background" class="w-full h-full object-cover">
    </div>

    <!-- Layer 2: Green Gradient -->
    <div class="absolute inset-0 z-10 bg-gradient-to-br from-primary/95 via-primary-green/85 to-secondary/90"></div>
    
    <!-- Layer 3: Noise Texture -->
    <div class="absolute inset-0 z-20 opacity-20 mix-blend-overlay pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>
    
    <!-- Layer 4: Floating Blur Circle -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-accent/30 rounded-full blur-3xl z-20 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-light-green/20 rounded-full blur-3xl z-20 pointer-events-none"></div>

    <!-- Layer 5: Leaves Decoration (Abstract Grid/Dots) -->
    <div class="absolute inset-0 z-20 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;"></div>
    
    <!-- Layer 6: Content -->
    <div class="container relative z-30 pt-10 text-center md:text-left px-4">
        @if(!empty($breadcrumbs))
            <nav aria-label="breadcrumb" class="mb-6 animate-fade-down">
                <ol class="breadcrumb bg-white/20 backdrop-blur-md inline-flex px-5 py-2.5 rounded-full shadow-glass border border-white/20">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-white hover:text-accent transition-colors flex items-center gap-2 font-bold text-sm">
                            <i class="bi bi-house-door-fill"></i> Beranda
                        </a>
                    </li>
                    @foreach($breadcrumbs as $breadcrumb)
                        <li class="breadcrumb-item active text-white font-bold flex items-center before:hidden text-sm" aria-current="page">
                            <i class="bi bi-chevron-right mx-3 text-white/50 text-[10px]"></i>
                            @if(isset($breadcrumb['url']))
                                <a href="{{ $breadcrumb['url'] }}" class="text-white hover:text-accent transition-colors">{{ $breadcrumb['label'] }}</a>
                            @else
                                <span class="text-white/90">{{ $breadcrumb['label'] }}</span>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </nav>
        @endif

        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-4 tracking-tight drop-shadow-md animate-fade-up">
                {{ $title }}
            </h1>
            
            @if($subtitle)
                <p class="text-white/80 text-lg md:text-xl font-medium max-w-2xl leading-relaxed animate-fade-up" style="animation-delay: 100ms;">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    </div>
</section>

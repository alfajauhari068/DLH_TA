@props([
    'title' => '',
    'subtitle' => null,
    'breadcrumbs' => []
])

<div class="bg-primary relative overflow-hidden py-16 md:py-20 lg:py-24" style="background-image: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
    <!-- Decorative patterns -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-white opacity-10 rounded-full blur-3xl translate-y-1/3 -translate-x-1/4"></div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 drop-shadow-sm">{{ $title }}</h1>
        
        @if($subtitle)
            <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto mb-8">{{ $subtitle }}</p>
        @endif

        @if(!empty($breadcrumbs))
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 bg-white/10 px-4 py-2 rounded-full backdrop-blur-md border border-white/20">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-white/90 hover:text-white transition-colors">
                            <i class="bi bi-house-door-fill mr-2"></i>
                            Beranda
                        </a>
                    </li>
                    @foreach($breadcrumbs as $breadcrumb)
                        <li>
                            <div class="flex items-center">
                                <i class="bi bi-chevron-right text-white/60 mx-1 text-xs"></i>
                                @if(isset($breadcrumb['url']))
                                    <a href="{{ $breadcrumb['url'] }}" class="text-sm font-medium text-white/90 hover:text-white transition-colors ms-1 md:ms-2">{{ $breadcrumb['label'] }}</a>
                                @else
                                    <span class="text-sm font-semibold text-white ms-1 md:ms-2">{{ $breadcrumb['label'] }}</span>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ol>
            </nav>
        @endif
    </div>
</div>

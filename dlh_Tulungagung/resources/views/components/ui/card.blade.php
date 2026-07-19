@props([
    'title' => null,
    'subtitle' => null,
    'padding' => 'p-5',
    'noPadding' => false,
    'loading' => false,
    'empty' => false,
    'emptyTitle' => 'Belum ada data',
    'emptyDesc' => 'Data untuk bagian ini belum tersedia.',
])

<div {{ $attributes->merge(['class' => 'bg-white/95 backdrop-blur-sm rounded-2xl shadow-sm border border-gray-100 flex flex-col transition-all duration-300 hover:shadow-md hover:-translate-y-0.5 overflow-hidden relative']) }}>
    
    @if($loading)
        <div class="absolute inset-0 bg-white/70 backdrop-blur-[2px] z-20 flex items-center justify-center">
            <svg class="animate-spin h-8 w-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
    @endif

    @if($title || isset($header))
        <div class="px-5 py-4 border-b border-gray-100 flex items-center justify-between gap-4 bg-white z-10">
            @if(isset($header))
                {{ $header }}
            @else
                <div>
                    <h3 class="text-lg font-bold text-gray-900 m-0 leading-tight">{{ $title }}</h3>
                    @if($subtitle)
                        <p class="text-sm text-gray-500 mt-1 mb-0">{{ $subtitle }}</p>
                    @endif
                </div>
                
                @if(isset($headerActions))
                    <div class="flex items-center gap-2">
                        {{ $headerActions }}
                    </div>
                @endif
            @endif
        </div>
    @endif
    
    @if(isset($toolbar))
        <div class="px-5 py-3 border-b border-gray-100 bg-gray-50/50">
            {{ $toolbar }}
        </div>
    @endif

    <div class="{{ $noPadding ? '' : $padding }} flex-1 relative">
        @if($empty)
            <x-ui.empty :title="$emptyTitle" :description="$emptyDesc" />
        @else
            {{ $slot }}
        @endif
    </div>

    @if(isset($footer))
        <div class="px-5 py-4 border-t border-gray-100 bg-gray-50 mt-auto">
            {{ $footer }}
        </div>
    @endif
</div>

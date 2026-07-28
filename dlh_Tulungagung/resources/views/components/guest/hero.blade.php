@props([
    'title',
    'subtitle' => null,
    'badge' => null,
    'breadcrumbs' => [],
    'metadata' => [],
    'action' => null, // ['url' => '', 'label' => '', 'icon' => '']
    'bgImage' => null
])

<div class="relative w-full overflow-hidden bg-emerald-900 min-h-[260px] md:min-h-[320px] lg:min-h-[420px] flex items-center">
    <!-- Background Layer -->
    @if($bgImage)
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ $bgImage }}" alt="" class="w-full h-full object-cover object-center" />
            <div class="absolute inset-0 bg-emerald-900/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-emerald-900/60 to-transparent"></div>
        </div>
    @else
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-emerald-800 to-green-900"></div>
        <!-- Decorative SVG Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 24px 24px;"></div>
    @endif

    <!-- Content -->
    <div class="relative w-full max-w-[1440px] 2xl:max-w-[1560px] w-[95%] lg:w-[96%] mx-auto py-12 md:py-16">
        
        @if(count($breadcrumbs) > 0)
            <div class="mb-6 md:mb-8">
                <x-guest.breadcrumb :items="$breadcrumbs" />
            </div>
        @endif

        <div class="max-w-4xl space-y-4 md:space-y-6">
            @if($badge)
                <span class="inline-block px-3 py-1 bg-emerald-500/20 text-emerald-100 border border-emerald-500/30 rounded-full text-xs md:text-sm font-semibold tracking-wider uppercase">
                    {{ $badge }}
                </span>
            @endif

            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight md:leading-tight lg:leading-tight">
                {{ $title }}
            </h1>

            @if($subtitle)
                <p class="text-base md:text-lg lg:text-xl text-emerald-50 leading-relaxed max-w-3xl">
                    {{ $subtitle }}
                </p>
            @endif

            @if(count($metadata) > 0)
                <div class="flex flex-wrap items-center gap-4 md:gap-6 pt-2">
                    @foreach($metadata as $meta)
                        <div class="flex items-center text-sm text-emerald-100/90 gap-2">
                            @if(isset($meta['icon']))
                                <i class="bi {{ $meta['icon'] }}"></i>
                            @endif
                            <span>{{ $meta['value'] }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            @if($action)
                <div class="pt-4">
                    <a href="{{ $action['url'] }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-50 text-emerald-900 font-semibold rounded-xl transition-all shadow-lg shadow-black/10 hover:shadow-xl hover:-translate-y-0.5">
                        @if(isset($action['icon']))
                            <i class="bi {{ $action['icon'] }}"></i>
                        @endif
                        {{ $action['label'] }}
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

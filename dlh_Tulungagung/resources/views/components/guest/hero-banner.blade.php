@props([
    'title',
    'subtitle' => null,
    'background' => null,
    'badge' => null,
    'breadcrumbs' => [],
    'metadata' => [],
    'primaryAction' => null, // ['url' => '', 'label' => '', 'icon' => '']
    'secondaryAction' => null,
    'overlay' => true,
    'pattern' => true
])

<div class="relative w-full overflow-hidden bg-primary-dark min-h-[280px] md:min-h-[340px] lg:min-h-[420px] flex items-center group">
    <!-- Background Layer -->
    @if($background)
        <div class="absolute inset-0 w-full h-full transform transition-transform duration-1000 group-hover:scale-105">
            <img src="{{ $background }}" alt="" class="w-full h-full object-cover object-center" />
            @if($overlay)
                <div class="absolute inset-0 bg-primary-dark/80 mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-primary-dark via-primary/60 to-transparent"></div>
            @endif
        </div>
    @else
        <div class="absolute inset-0 bg-gradient-to-br from-primary-dark via-primary-dark to-primary"></div>
    @endif

    @if($pattern)
        <!-- Decorative SVG Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 32px 32px;"></div>
    @endif

    <!-- Content -->
    <div class="relative w-full max-w-[1440px] 2xl:max-w-[1560px] w-[95%] lg:w-[96%] mx-auto py-12 md:py-16 mt-8">
        
        @if(count($breadcrumbs) > 0)
            <div class="mb-6 md:mb-8 animate-[fadeIn_0.5s_ease-out]">
                <x-guest.breadcrumb :items="$breadcrumbs" />
            </div>
        @endif

        <div class="max-w-4xl space-y-4 md:space-y-6">
            @if($badge)
                <div class="animate-[slideUp_0.5s_ease-out_0.1s_both]">
                    <x-guest.badge :label="$badge" color="green" />
                </div>
            @endif

            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight md:leading-tight lg:leading-tight animate-[slideUp_0.5s_ease-out_0.2s_both]">
                {{ $title }}
            </h1>

            @if($subtitle)
                <p class="text-base md:text-lg lg:text-xl text-emerald-50 leading-relaxed max-w-3xl animate-[slideUp_0.5s_ease-out_0.3s_both]">
                    {{ $subtitle }}
                </p>
            @endif

            @if(count($metadata) > 0)
                <div class="flex flex-wrap items-center gap-4 md:gap-6 pt-2 animate-[slideUp_0.5s_ease-out_0.4s_both]">
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

            @if($primaryAction || $secondaryAction)
                <div class="pt-6 flex flex-wrap gap-4 animate-[slideUp_0.5s_ease-out_0.5s_both]">
                    @if($primaryAction)
                        <x-guest.button :href="$primaryAction['url']" variant="primary" :icon="$primaryAction['icon'] ?? null">
                            {{ $primaryAction['label'] }}
                        </x-guest.button>
                    @endif
                    @if($secondaryAction)
                        <x-guest.button :href="$secondaryAction['url']" variant="ghost" :icon="$secondaryAction['icon'] ?? null">
                            {{ $secondaryAction['label'] }}
                        </x-guest.button>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>

<style>
@keyframes slideUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
</style>

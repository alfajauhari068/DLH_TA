@props([
    'title',
    'subtitle' => null,
    'primaryAction' => null, // ['url' => '', 'label' => '', 'icon' => '']
    'secondaryAction' => null,
    'bgColor' => 'bg-emerald-900',
    'pattern' => true
])

<section class="py-12 md:py-20 px-4">
    <div class="max-w-[1440px] 2xl:max-w-[1560px] w-[95%] lg:w-[96%] mx-auto">
        <div class="relative rounded-3xl overflow-hidden {{ $bgColor }} shadow-2xl">
            @if($pattern)
                <!-- Animated Background Pattern -->
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 2px, transparent 2px); background-size: 32px 32px; animation: moveBg 30s linear infinite;"></div>
                <style>
                    @keyframes moveBg {
                        0% { background-position: 0 0; }
                        100% { background-position: 1000px 1000px; }
                    }
                </style>
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-white/5 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-light-green/20 blur-3xl"></div>
            @endif

            <div class="relative px-6 py-12 md:py-16 md:px-12 lg:px-20 flex flex-col md:flex-row items-center justify-between gap-10">
                <div class="max-w-2xl text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 md:mb-6 leading-tight">
                        {{ $title }}
                    </h2>
                    @if($subtitle)
                        <p class="text-lg md:text-xl text-light-green font-medium">
                            {{ $subtitle }}
                        </p>
                    @endif
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-4 w-full md:w-auto shrink-0">
                    @if($primaryAction)
                        <a href="{{ $primaryAction['url'] }}" class="w-full sm:w-auto flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-dark hover:bg-gray-50 hover-lift soft-shadow transition-all rounded-xl font-bold text-lg">
                            @if(isset($primaryAction['icon']))
                                <i class="bi {{ $primaryAction['icon'] }}"></i>
                            @endif
                            {{ $primaryAction['label'] }}
                        </a>
                    @endif

                    @if($secondaryAction)
                        <a href="{{ $secondaryAction['url'] }}" class="w-full sm:w-auto flex items-center justify-center gap-2 px-8 py-4 bg-white/10 hover:bg-white/20 text-white border border-white/30 backdrop-blur-sm transition-all rounded-xl font-bold text-lg">
                            @if(isset($secondaryAction['icon']))
                                <i class="bi {{ $secondaryAction['icon'] }}"></i>
                            @endif
                            {{ $secondaryAction['label'] }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

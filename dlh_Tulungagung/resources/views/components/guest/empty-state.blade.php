@props([
    'icon' => 'bi-inbox',
    'title' => 'Tidak Ada Data',
    'description' => 'Belum ada data yang tersedia untuk ditampilkan saat ini.',
    'primaryAction' => null, // ['url' => '', 'label' => '']
    'secondaryAction' => null
])

<div class="w-full bg-white rounded-2xl border border-gray-100 shadow-sm p-12 md:p-20 text-center flex flex-col items-center justify-center animate-[fadeIn_0.5s_ease-out]">
    <div class="w-24 h-24 mb-6 rounded-full bg-emerald-50 text-emerald-300 flex items-center justify-center">
        <i class="bi {{ $icon }} text-5xl"></i>
    </div>
    
    <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $title }}</h3>
    
    <p class="text-lg text-gray-500 max-w-md mx-auto mb-8">
        {{ $description }}
    </p>
    
    @if($primaryAction || $secondaryAction)
        <div class="flex flex-wrap items-center justify-center gap-4">
            @if($primaryAction)
                <x-guest.button :href="$primaryAction['url']" variant="primary">
                    {{ $primaryAction['label'] }}
                </x-guest.button>
            @endif
            @if($secondaryAction)
                <x-guest.button :href="$secondaryAction['url']" variant="outline">
                    {{ $secondaryAction['label'] }}
                </x-guest.button>
            @endif
        </div>
    @endif
</div>

@props(['title', 'icon' => null])

<div {{ $attributes->merge(['class' => 'bg-white/90 backdrop-blur-xl rounded-[24px] soft-shadow border border-white/50 overflow-hidden']) }}>
    @if(isset($title))
        <div class="px-6 py-4 border-b border-gray-100/50 flex items-center gap-2">
            @if($icon)
                <i class="bi {{ $icon }} text-primary-green drop-shadow-sm"></i>
            @endif
            <h3 class="text-base font-bold text-gray-900">{{ $title }}</h3>
        </div>
    @endif
    <div class="p-6">
        {{ $slot }}
    </div>
</div>

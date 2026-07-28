@props(['title', 'icon' => null])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden']) }}>
    @if(isset($title))
        <div class="px-6 py-4 border-b border-gray-50 flex items-center gap-2">
            @if($icon)
                <i class="bi {{ $icon }} text-emerald-600"></i>
            @endif
            <h3 class="text-base font-bold text-gray-900">{{ $title }}</h3>
        </div>
    @endif
    <div class="p-6">
        {{ $slot }}
    </div>
</div>

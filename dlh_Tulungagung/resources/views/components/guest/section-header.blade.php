@props(['title', 'subtitle' => null, 'icon' => null, 'action' => null])

<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
    <div class="space-y-2">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 flex items-center gap-2">
            @if($icon)
                <i class="bi {{ $icon }} text-emerald-600"></i>
            @endif
            {{ $title }}
        </h2>
        @if($subtitle)
            <p class="text-gray-500 text-lg">{{ $subtitle }}</p>
        @endif
    </div>
    
    @if($action)
        <div>
            <a href="{{ $action['url'] }}" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-semibold text-emerald-700 bg-emerald-50 hover:bg-emerald-100 rounded-lg transition-colors">
                {{ $action['label'] }}
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    @endif
</div>

@props([
    'title',
    'value',
    'description' => null,
    'icon' => null,
    'variant' => 'primary', // primary, success, warning, danger, info
    'color' => null, // fallback for index.blade.php bug
    'trend' => null, // 'up', 'down', or null
    'trendValue' => null,
])

@php
    $selectedVariant = $color ?? $variant ?? 'primary';
    $colorClasses = [
        'primary' => 'text-primary bg-primary/10 border-primary/20',
        'success' => 'text-success bg-success/10 border-success/20',
        'warning' => 'text-warning bg-warning/10 border-warning/20',
        'danger' => 'text-danger bg-danger/10 border-danger/20',
        'info' => 'text-info bg-info/10 border-info/20',
    ][$selectedVariant] ?? 'text-primary bg-primary/10 border-primary/20';
@endphp

<div {{ $attributes->merge(['class' => 'bg-white border border-gray-100 rounded-3xl p-6 shadow-soft hover:shadow-hover hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between gap-4 overflow-hidden relative group min-h-[160px] max-h-[240px]']) }}>
    <div class="flex justify-between items-start w-full">
        <div class="flex-grow min-w-0">
            <h4 class="text-sm font-medium text-gray-500 mb-2 truncate" title="{{ $title }}">{{ $title }}</h4>
            <div class="text-4xl font-bold text-gray-900 leading-none tracking-tight truncate" title="{{ $value }}">{{ $value }}</div>
        </div>

        @if($icon)
            <div class="w-12 h-12 rounded-2xl flex items-center justify-center shrink-0 border transition-transform duration-300 group-hover:scale-110 {{ $colorClasses }}">
                <i class="bi bi-{{ $icon }} text-xl"></i>
            </div>
        @endif
    </div>

    @if(($trend && $trendValue) || $description)
        <div class="flex items-center justify-between border-t border-gray-50 pt-3 mt-1 text-xs">
            @if($description)
                <span class="text-gray-500 truncate">{{ $description }}</span>
            @endif
            @if($trend && $trendValue)
                <div class="flex items-center gap-1 font-semibold shrink-0 px-2 py-0.5 rounded-full {{ $trend === 'up' ? 'text-success bg-success/5' : 'text-danger bg-danger/5' }}">
                    <i class="bi bi-arrow-{{ $trend === 'up' ? 'up' : 'down' }}-short"></i>
                    <span>{{ $trendValue }}</span>
                </div>
            @endif
        </div>
    @endif
</div>

@props([
    'title',
    'value',
    'description' => null,
    'icon' => null,
    'variant' => 'primary', // primary, success, warning, danger, info
    'trend' => null, // 'up', 'down', or null
    'trendValue' => null,
])

@php
    $colorClasses = [
        'primary' => 'text-primary bg-primary/10',
        'success' => 'text-success bg-success/10',
        'warning' => 'text-warning bg-warning/10',
        'danger' => 'text-danger bg-danger/10',
        'info' => 'text-info bg-info/10',
    ][$variant] ?? 'text-primary bg-primary/10';
@endphp

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-sm border border-gray-100 p-4 hover:shadow-md transition-shadow duration-200 h-[88px] flex items-center justify-between overflow-hidden relative']) }}>
    <div class="flex items-center gap-3 w-full">
        @if($icon)
            <div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0 {{ $colorClasses }}">
                <i class="bi bi-{{ $icon }} text-xl"></i>
            </div>
        @endif
        
        <div class="flex-grow min-w-0 flex flex-col justify-center">
            <h4 class="text-[14px] font-semibold text-gray-500 mb-0.5 truncate" title="{{ $title }}">{{ $title }}</h4>
            <div class="text-[24px] font-bold text-gray-900 leading-none truncate" title="{{ $value }}">{{ $value }}</div>
        </div>

        @if($trend && $trendValue)
            <div class="flex items-center gap-1 text-xs font-medium shrink-0 px-2 py-1 rounded-full {{ $trend === 'up' ? 'text-success bg-success/10' : 'text-danger bg-danger/10' }}">
                <i class="bi bi-arrow-{{ $trend === 'up' ? 'up' : 'down' }}-short"></i>
                <span>{{ $trendValue }}</span>
            </div>
        @endif
    </div>
</div>

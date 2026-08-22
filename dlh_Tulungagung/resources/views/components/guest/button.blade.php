@props([
    'variant' => 'primary', // primary, secondary, outline, ghost, success, danger
    'href' => null,
    'icon' => null,
    'iconPosition' => 'left',
    'type' => 'button',
    'disabled' => false,
    'block' => false,
    'size' => 'md', // sm, md, lg
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold rounded-xl transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed group';
    
    $variants = [
        'primary' => 'bg-emerald-600 hover:bg-emerald-700 text-white shadow-lg shadow-emerald-600/20 hover:shadow-emerald-600/40 hover:-translate-y-0.5 focus:ring-emerald-500',
        'secondary' => 'bg-gray-800 hover:bg-gray-900 text-white shadow-lg shadow-gray-800/20 hover:shadow-gray-800/40 hover:-translate-y-0.5 focus:ring-gray-500',
        'outline' => 'bg-transparent border-2 border-emerald-600 text-emerald-700 hover:bg-emerald-50 focus:ring-emerald-500',
        'ghost' => 'bg-transparent text-white hover:bg-white/10 border border-white/20 focus:ring-white',
        'success' => 'bg-green-500 hover:bg-green-600 text-white shadow-lg shadow-green-500/20 hover:-translate-y-0.5 focus:ring-green-400',
        'danger' => 'bg-red-500 hover:bg-red-600 text-white shadow-lg shadow-red-500/20 hover:-translate-y-0.5 focus:ring-red-400',
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-base',
        'lg' => 'px-8 py-4 text-lg',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']) . ($block ? ' w-full' : '');
@endphp

@if($href)
    <a href="{{ $disabled ? '#' : $href }}" {{ $attributes->merge(['class' => $classes]) }} @if($disabled) tabindex="-1" aria-disabled="true" @endif>
        @if($icon && $iconPosition === 'left')
            <i class="bi {{ $icon }} mr-2 group-hover:scale-110 transition-transform"></i>
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'right')
            <i class="bi {{ $icon }} ml-2 group-hover:translate-x-1 transition-transform"></i>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }} @if($disabled) disabled @endif>
        @if($icon && $iconPosition === 'left')
            <i class="bi {{ $icon }} mr-2 group-hover:scale-110 transition-transform"></i>
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'right')
            <i class="bi {{ $icon }} ml-2 group-hover:translate-x-1 transition-transform"></i>
        @endif
    </button>
@endif

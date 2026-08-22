@props([
    'type' => 'text', // text, rounded, circle, card
    'w' => 'w-full',
    'h' => 'h-4',
    'animate' => true,
])

@php
    $baseClasses = 'bg-gray-200';
    
    if ($animate) {
        $baseClasses .= ' animate-pulse';
    }

    $typeClasses = match($type) {
        'circle' => 'rounded-full',
        'rounded' => 'rounded-xl',
        'text' => 'rounded',
        'card' => 'rounded-2xl h-48',
        default => 'rounded',
    };

    if ($type === 'card') {
        $h = '';
    }
@endphp

<div {{ $attributes->merge(['class' => "{$baseClasses} {$typeClasses} {$w} {$h}"]) }}></div>

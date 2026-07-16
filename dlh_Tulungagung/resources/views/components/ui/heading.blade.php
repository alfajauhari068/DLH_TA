@props([
    'as' => 'h2',
    'size' => 'title', // display, title, subtitle, heading
    'color' => 'text-gray-900',
    'weight' => 'font-semibold',
])

@php
    $sizeClasses = [
        'display' => 'text-4xl md:text-5xl font-bold tracking-tight',
        'title' => 'text-2xl md:text-3xl font-bold',
        'heading' => 'text-xl md:text-2xl font-semibold',
        'subtitle' => 'text-lg font-medium',
    ][$size] ?? 'text-2xl font-bold';

    $classes = "{$sizeClasses} {$color} {$weight} leading-tight mb-2";
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>

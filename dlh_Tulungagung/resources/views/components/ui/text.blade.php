@props([
    'as' => 'p',
    'size' => 'body', // body, caption, small
    'color' => 'text-gray-600',
    'weight' => 'font-normal',
])

@php
    $sizeClasses = [
        'body' => 'text-base',
        'caption' => 'text-sm',
        'small' => 'text-xs',
    ][$size] ?? 'text-base';

    $classes = "{$sizeClasses} {$color} {$weight} leading-relaxed";
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>

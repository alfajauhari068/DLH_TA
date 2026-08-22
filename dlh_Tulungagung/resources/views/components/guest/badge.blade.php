@props([
    'label',
    'color' => 'green', // green, blue, yellow, red, gray
])

@php
    $colors = [
        'green' => 'bg-emerald-100 text-emerald-800 border-emerald-200',
        'blue' => 'bg-blue-100 text-blue-800 border-blue-200',
        'yellow' => 'bg-amber-100 text-amber-800 border-amber-200',
        'red' => 'bg-red-100 text-red-800 border-red-200',
        'gray' => 'bg-gray-100 text-gray-800 border-gray-200',
    ];

    $classes = $colors[$color] ?? $colors['gray'];
@endphp

<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold uppercase tracking-wider border {{ $classes }}">
    {{ $label }}
</span>

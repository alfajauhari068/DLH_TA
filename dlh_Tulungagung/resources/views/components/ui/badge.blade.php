@props([
    'variant' => 'primary', // primary, secondary, success, warning, danger, info, gray
])

@php
    $baseClasses = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium';
    
    $variantClasses = [
        'primary' => 'bg-primary/10 text-primary',
        'secondary' => 'bg-secondary/10 text-secondary',
        'success' => 'bg-success/10 text-success',
        'warning' => 'bg-warning/10 text-warning',
        'danger' => 'bg-danger/10 text-danger',
        'info' => 'bg-info/10 text-info',
        'gray' => 'bg-gray-100 text-gray-800',
        'published' => 'bg-success/10 text-success',
        'draft' => 'bg-gray-100 text-gray-600',
        'pending' => 'bg-warning/10 text-warning',
    ][$variant] ?? 'bg-gray-100 text-gray-800';

    $classes = "{$baseClasses} {$variantClasses}";
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>

@props(['variant' => 'primary', 'size' => 'md', 'href' => null])
@php
    $sizeClass = $size === 'sm' ? 'btn-sm' : ($size === 'lg' ? 'btn-lg' : '');
    $variantClass = 'btn-' . $variant;
    $buttonClass = trim("btn {$variantClass} {$sizeClass}");
@endphp
@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $buttonClass]) }}>{{ $slot }}</a>
@else
    <button type="{{ $attributes->get('type', 'button') }}" {{ $attributes->merge(['class' => $buttonClass]) }}>{{ $slot }}</button>
@endif

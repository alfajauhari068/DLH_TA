@props(['maxWidth' => 'max-w-7xl'])

<div {{ $attributes->merge(['class' => 'container mx-auto px-4 ' . $maxWidth]) }}>
    {{ $slot }}
</div>

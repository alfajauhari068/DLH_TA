@props(['cols' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3', 'gap' => 'gap-8'])

<div {{ $attributes->merge(['class' => 'grid ' . $cols . ' ' . $gap]) }}>
    {{ $slot }}
</div>

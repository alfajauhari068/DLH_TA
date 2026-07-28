@props(['cols' => 'lg:grid-cols-3'])

<div class="grid grid-cols-1 md:grid-cols-2 {{ $cols }} gap-6">
    {{ $slot }}
</div>

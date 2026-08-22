@props([
    'title' => null,
    'subtitle' => null,
    'padding' => 'p-5',
    'noPadding' => false,
])

<x-ui.card :title="$title" :subtitle="$subtitle" :padding="$padding" :noPadding="$noPadding" {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}

    @if(isset($footer))
        <x-slot name="footer">
            {{ $footer }}
        </x-slot>
    @endif
    @if(isset($headerActions))
        <x-slot name="headerActions">
            {{ $headerActions }}
        </x-slot>
    @endif
</x-ui.card>

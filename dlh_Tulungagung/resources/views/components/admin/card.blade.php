@props(['title' => null, 'subtitle' => null, 'actions' => null, 'class' => ''])

<x-ui.card :title="$title" :subtitle="$subtitle" class="{{ $class }}">
    @if($actions)
        <x-slot name="headerActions">
            {{ $actions }}
        </x-slot>
    @endif

    {{ $slot }}
</x-ui.card>

@props(['type' => 'info', 'message'])

@php
    $uiType = $type === 'danger' ? 'error' : $type;
@endphp

<x-ui.alert :type="$uiType" :dismissible="true">
    {{ $message }}
</x-ui.alert>

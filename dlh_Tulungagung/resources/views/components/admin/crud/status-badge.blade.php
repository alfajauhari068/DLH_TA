@php
$map = config('cms.status');
$label = array_search($status ?? null, $map, true) ?: 'unknown';
@endphp
<span class="px-2 py-1 rounded text-sm bg-gray-100">{{ ucfirst($label) }}</span>

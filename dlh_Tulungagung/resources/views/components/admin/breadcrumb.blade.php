@props(['items' => []])
<nav aria-label="breadcrumb" class="admin-breadcrumb mb-4">
    <ol class="breadcrumb mb-0">
        @foreach($items as $index => $item)
            @if(!empty($item['url']) && $index < count($items) - 1)
                <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $item['label'] }}</li>
            @endif
        @endforeach
    </ol>
</nav>

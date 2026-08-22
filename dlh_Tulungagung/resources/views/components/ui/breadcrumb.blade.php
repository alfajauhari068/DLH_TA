@props(['items' => []])
<nav aria-label="breadcrumb">
    <ol class="flex items-center space-x-2 text-sm text-muted">
        @foreach($items as $index => $item)
            @if(!empty($item['url']) && $index < count($items) - 1)
                <li>
                    <a href="{{ $item['url'] }}" class="text-primary hover:text-primary-dark transition-colors">{{ $item['label'] }}</a>
                </li>
                <li>
                    <i class="bi bi-chevron-right text-gray-400 text-[10px]"></i>
                </li>
            @else
                <li class="text-gray-900 font-medium" aria-current="page">{{ $item['label'] }}</li>
            @endif
        @endforeach
    </ol>
</nav>

@props(['items' => []])

<nav aria-label="Breadcrumb" class="flex items-center text-sm font-medium text-white/80">
    <ol class="flex items-center space-x-2 md:space-x-3">
        @foreach($items as $index => $item)
            <li class="flex items-center">
                @if(!$loop->first)
                    <i class="bi bi-chevron-right text-[10px] mx-2 text-white/50"></i>
                @endif
                
                @if(isset($item['url']) && !$loop->last)
                    <a href="{{ $item['url'] }}" class="hover:text-white transition-colors duration-200 truncate max-w-[150px] md:max-w-[300px]">
                        {{ $item['label'] }}
                    </a>
                @else
                    <span class="text-white truncate max-w-[150px] md:max-w-[300px]" aria-current="page">
                        {{ $item['label'] }}
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>

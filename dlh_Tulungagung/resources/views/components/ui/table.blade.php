@props([
    'headers' => [],
    'sticky' => false,
    'hover' => true,
    'striped' => false,
    'loading' => false,
])

<div class="overflow-hidden shadow-sm border border-gray-100 rounded-2xl bg-white flex flex-col">
    <div class="overflow-x-auto relative flex-1">
        @if($loading)
            <div class="absolute inset-0 bg-white/60 backdrop-blur-[1px] z-20 flex items-center justify-center">
                <svg class="animate-spin h-8 w-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </div>
        @endif

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50 {{ $sticky ? 'sticky top-0 z-10 shadow-sm' : '' }}">
                <tr>
                    @foreach($headers as $header)
                        <th scope="col" class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider whitespace-nowrap">
                            {{ $header }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100 {{ $hover ? '[&_tr]:hover:bg-gray-50 [&_tr]:transition-colors [&_tr]:duration-200' : '' }} {{ $striped ? '[&_tr:nth-child(even)]:bg-gray-50' : '' }}">
                @if(isset($empty) && $empty->isNotEmpty())
                    <tr>
                        <td colspan="{{ count($headers) ?: 100 }}" class="p-0">
                            {{ $empty }}
                        </td>
                    </tr>
                @else
                    {{ $slot }}
                @endif
            </tbody>
        </table>
    </div>
    
    @if(isset($pagination))
        <div class="bg-white px-5 py-3 border-t border-gray-100">
            {{ $pagination }}
        </div>
    @elseif(isset($footer))
        <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
            {{ $footer }}
        </div>
    @endif
</div>

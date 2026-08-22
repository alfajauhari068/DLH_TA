@props(['items' => []])

@if(count($items) > 0)
<div class="max-w-[1440px] 2xl:max-w-[1560px] w-[95%] lg:w-[96%] mx-auto -mt-8 relative z-20">
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 md:p-8">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 md:gap-8 divide-x-0 md:divide-x divide-y md:divide-y-0 divide-gray-100">
            @foreach($items as $index => $item)
                <div class="flex items-start gap-4 {{ $index > 0 ? 'pt-4 md:pt-0 md:pl-8' : '' }} {{ $index > 1 && $index % 2 == 0 ? 'pt-4 md:pt-0' : '' }}">
                    @if(isset($item['icon']))
                        <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 flex-shrink-0">
                            <i class="bi {{ $item['icon'] }} text-lg"></i>
                        </div>
                    @endif
                    <div>
                        <div class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">{{ $item['label'] }}</div>
                        <div class="text-sm md:text-base font-semibold text-gray-900">{{ $item['value'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif

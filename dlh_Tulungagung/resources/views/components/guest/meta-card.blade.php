@props(['items' => []])

@if(count($items) > 0)
<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-6 md:p-8 transition-shadow duration-300']) }}>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 md:gap-8">
        @foreach($items as $item)
            @if(isset($item['value']) && $item['value'])
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2 text-emerald-600">
                        @if(isset($item['icon']))
                            <i class="bi {{ $item['icon'] }} text-xl"></i>
                        @endif
                        <span class="text-xs font-bold uppercase tracking-wider text-gray-500">{{ $item['label'] }}</span>
                    </div>
                    <div class="text-sm md:text-base font-semibold text-gray-900 break-words">
                        {{ $item['value'] }}
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endif

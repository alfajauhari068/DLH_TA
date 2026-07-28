@props(['items' => []])

<div {{ $attributes->merge(['class' => 'relative border-l-2 border-primary/20 ml-4 pl-6 flex flex-col gap-8']) }}>
    @foreach($items as $item)
        <div class="relative group">
            <div class="absolute -left-[31px] top-1.5 w-4 h-4 rounded-full bg-white border-4 border-primary group-hover:scale-125 transition-transform"></div>
            <span class="text-xs font-bold text-primary uppercase tracking-widest">{{ $item['date'] ?? '' }}</span>
            <h4 class="text-lg font-bold text-gray-900 mt-1">{{ $item['title'] ?? '' }}</h4>
            <p class="text-sm text-gray-500 mt-2 leading-relaxed">{{ $item['description'] ?? '' }}</p>
        </div>
    @endforeach
</div>

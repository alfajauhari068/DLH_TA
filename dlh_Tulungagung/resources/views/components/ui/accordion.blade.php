@props(['items' => []])

<div {{ $attributes->merge(['class' => 'flex flex-col gap-4 w-full']) }}>
    @foreach($items as $index => $item)
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden" x-data="{ open: false }">
            <button @click="open = !open" class="w-full p-6 text-left flex justify-between items-center font-bold text-gray-900 hover:text-primary transition-colors">
                <span>{{ $item['question'] ?? '' }}</span>
                <i class="bi bi-chevron-down transform transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
            </button>
            <div x-show="open" x-collapse class="px-6 pb-6 text-sm text-gray-500 leading-relaxed border-t border-gray-50 pt-4">
                {{ $item['answer'] ?? '' }}
            </div>
        </div>
    @endforeach
</div>

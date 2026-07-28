@props(['tabs' => []])

<div x-data="{ activeTab: 0 }" {{ $attributes->merge(['class' => 'w-full']) }}>
    <div class="flex gap-2 border-b border-gray-100 mb-6">
        @foreach($tabs as $index => $tab)
            <button @click="activeTab = {{ $index }}" 
                    :class="activeTab === {{ $index }} ? 'border-primary text-primary bg-light-green' : 'border-transparent text-gray-500 hover:text-gray-900'"
                    class="px-6 py-3 font-bold text-sm rounded-t-2xl border-b-2 transition-all">
                {{ $tab['label'] ?? '' }}
            </button>
        @endforeach
    </div>
    <div class="p-4 bg-white rounded-2xl border border-gray-50">
        {{ $slot }}
    </div>
</div>

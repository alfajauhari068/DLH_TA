@props([
    'url',
    'title' => 'Pratinjau Dokumen',
    'height' => 'h-[500px] md:h-[600px] lg:h-[800px]'
])

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 md:p-6 lg:p-8 flex flex-col">
    <div class="flex items-center justify-between mb-4 md:mb-6">
        <h3 class="text-base md:text-lg font-bold text-gray-900 flex items-center gap-2">
            <i class="bi bi-file-earmark-text text-emerald-600"></i>
            {{ $title }}
        </h3>
        
        <x-guest.button :href="$url" variant="outline" size="sm" icon="bi-arrows-fullscreen" target="_blank" title="Buka Layar Penuh">
            Layar Penuh
        </x-guest.button>
    </div>
    
    <div class="w-full {{ $height }} rounded-xl overflow-hidden bg-gray-100 border border-gray-200 relative">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-gray-400">
            <i class="bi bi-arrow-repeat animate-spin text-3xl mb-2"></i>
            <span class="text-sm">Memuat dokumen...</span>
        </div>
        
        <iframe 
            src="{{ $url }}#toolbar=0" 
            class="absolute inset-0 w-full h-full border-0 z-10 bg-white" 
            title="{{ $title }}"
            onload="this.previousElementSibling.style.display='none';"
        ></iframe>
    </div>
</div>

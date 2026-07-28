@props([
    'title',
    'type' => 'PDF',
    'size' => null,
    'pages' => null,
    'downloads' => null,
    'updatedAt' => null,
    'downloadUrl',
    'previewUrl' => null,
    'thumbnail' => null,
    'icon' => 'bi-file-earmark-pdf'
])

<div class="bg-white rounded-2xl shadow-sm hover:shadow-lg border border-gray-100 p-6 transition-all duration-300 group flex flex-col md:flex-row gap-6 items-center">
    
    @if($thumbnail)
        <div class="w-full md:w-32 h-40 md:h-32 bg-gray-50 rounded-xl overflow-hidden shrink-0 border border-gray-200">
            <img src="{{ $thumbnail }}" alt="Thumbnail" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        </div>
    @else
        <div class="w-16 h-16 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
            <i class="bi {{ $icon }} text-3xl"></i>
        </div>
    @endif

    <div class="flex-1 text-center md:text-left space-y-2">
        <h3 class="text-lg font-bold text-gray-900 line-clamp-2 group-hover:text-emerald-700 transition-colors">
            {{ $title }}
        </h3>
        <div class="flex flex-wrap justify-center md:justify-start items-center gap-3 text-sm text-gray-500">
            <span class="inline-flex items-center gap-1 font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-md">
                {{ $type }}
            </span>
            @if($size)
                <span class="inline-flex items-center gap-1"><i class="bi bi-hdd"></i> {{ $size }}</span>
            @endif
            @if($pages)
                <span class="inline-flex items-center gap-1"><i class="bi bi-files"></i> {{ $pages }} Halaman</span>
            @endif
            @if($downloads !== null)
                <span class="inline-flex items-center gap-1"><i class="bi bi-download"></i> {{ $downloads }} Diunduh</span>
            @endif
            @if($updatedAt)
                <span class="inline-flex items-center gap-1"><i class="bi bi-clock"></i> {{ $updatedAt }}</span>
            @endif
        </div>
    </div>

    <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto shrink-0 mt-4 md:mt-0">
        @if($previewUrl)
            <x-guest.button :href="$previewUrl" variant="outline" icon="bi-eye" target="_blank" class="w-full sm:w-auto">
                Pratinjau
            </x-guest.button>
        @endif
        <x-guest.button :href="$downloadUrl" variant="primary" icon="bi-cloud-arrow-down" class="w-full sm:w-auto">
            Unduh
        </x-guest.button>
    </div>
</div>

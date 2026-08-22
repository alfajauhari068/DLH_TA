@props([
    'url',
    'title',
    'image' => null,
    'icon' => null,
    'status' => null,
    'badge' => null,
])

<div class="relative bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group">
    
    <!-- Clickable Overlay for entire card -->
    <a href="{{ $url }}" class="absolute inset-0 z-0" aria-label="View {{ $title }}">
        <span class="sr-only">View {{ $title }}</span>
    </a>

    <!-- Image / Thumbnail -->
    <div class="relative h-48 bg-gray-50 overflow-hidden flex-shrink-0">
        @if($image && !str_contains($image, '<svg'))
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        @elseif($image && str_contains($image, '<svg'))
            <!-- Render SVG directly if passed -->
            <div class="w-full h-full flex flex-col items-center justify-center text-gray-400 bg-gradient-to-br from-green-50 to-green-100/50 group-hover:scale-105 transition-transform duration-500">
                {!! str_replace('<svg ', '<svg class="w-16 h-16 mb-2 text-green-600" ', $image) !!}
            </div>
        @else
            <!-- Elegant Placeholder -->
            <div class="w-full h-full flex flex-col items-center justify-center text-gray-300 bg-gradient-to-br from-gray-50 to-gray-100 group-hover:scale-105 transition-transform duration-500">
                <i class="bi {{ $icon ?? 'bi-image' }} text-4xl mb-2 text-gray-400"></i>
                <span class="text-xs font-medium text-gray-400">No Image</span>
            </div>
        @endif

        <div class="absolute top-3 left-3 flex gap-2 z-10 pointer-events-none">
            @if($status)
                @php
                    $statusStr = is_string($status) ? strtolower($status) : (is_bool($status) ? ($status ? 'published' : 'draft') : 'draft');
                    if (is_bool($status)) $status = $status ? 'Published' : 'Draft';
                    
                    $statusColor = match($statusStr) {
                        'public', 'published', 'active', '1' => 'bg-green-100 text-green-700 border-green-200',
                        'draft', 'inactive', '0' => 'bg-gray-100 text-gray-700 border-gray-200',
                        'archived' => 'bg-yellow-100 text-yellow-700 border-yellow-200',
                        default => 'bg-gray-100 text-gray-700 border-gray-200'
                    };
                @endphp
                <span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full border bg-white/90 backdrop-blur-sm {{ $statusColor }}">
                    {{ ucfirst(is_string($status) && in_array($status, ['0', '1']) ? ($status === '1' ? 'Published' : 'Draft') : $status) }}
                </span>
            @endif
            @if($badge)
                <span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full border border-gray-200 bg-white/90 backdrop-blur-sm text-gray-600">
                    {{ $badge }}
                </span>
            @endif
        </div>
    </div>

    <!-- Content -->
    <div class="p-5 flex-1 flex flex-col relative z-10 pointer-events-none">
        <h4 class="text-lg font-bold text-gray-900 line-clamp-2 mb-2 group-hover:text-green-600 transition-colors" title="{{ $title }}">
            {{ $title }}
        </h4>
        
        <!-- Description / Excerpt -->
        @if(isset($description))
            <div class="text-sm text-gray-500 line-clamp-2 mb-4 flex-1">
                {{ $description }}
            </div>
        @else
            <div class="flex-1"></div>
        @endif
        
        <!-- Metadata -->
        @if(isset($meta))
            <div class="text-xs text-gray-400 mt-auto pt-4 border-t border-gray-50 flex items-center justify-between">
                {{ $meta }}
            </div>
        @endif
    </div>

    <!-- Hover Reveal Action Buttons -->
    <div class="px-3 py-2.5 bg-gray-50 border-t border-gray-100 flex items-center justify-between relative z-20">
        {{ $actions }}
    </div>
</div>

@props(['title', 'subtitle', 'actionUrl' => null, 'actionText' => null, 'actionIcon' => 'bi-plus-lg'])

<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-2">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">{{ $title }}</h1>
        @if($subtitle)
            <p class="mt-1 text-sm text-gray-500">{{ $subtitle }}</p>
        @endif
    </div>
    @if($actionUrl && $actionText)
        <div class="flex-shrink-0">
            <a href="{{ $actionUrl }}" class="group inline-flex items-center justify-center px-5 py-2.5 border border-transparent rounded-xl shadow-sm text-sm font-semibold text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-300 hover:shadow-md">
                <i class="bi {{ $actionIcon }} -ml-1 mr-2 text-lg transform group-hover:scale-110 transition-transform"></i>
                {{ $actionText }}
            </a>
        </div>
    @endif
</div>

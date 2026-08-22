@props(['title' => 'No Data Available', 'description' => 'Get started by creating your first record.', 'actionUrl' => null, 'actionText' => 'Create Record', 'icon' => 'bi-inbox'])

<div class="bg-white rounded-2xl border border-gray-100 shadow-sm text-center py-20 px-4">
    <div class="mx-auto w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mb-4">
        <i class="bi {{ $icon }} text-4xl text-gray-400"></i>
    </div>
    <h3 class="text-lg font-bold text-gray-900">{{ $title }}</h3>
    <p class="mt-2 text-sm text-gray-500 max-w-sm mx-auto">{{ $description }}</p>
    
    @if($actionUrl && $actionText)
    <div class="mt-8">
        <a href="{{ $actionUrl }}" class="inline-flex items-center px-6 py-3 border border-transparent shadow-sm text-sm font-semibold rounded-xl text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all hover:-translate-y-0.5">
            <i class="bi bi-plus-lg mr-2"></i>
            {{ $actionText }}
        </a>
    </div>
    @endif
</div>

@props(['title', 'value', 'icon', 'color' => 'blue', 'trend' => null, 'trendText' => null])

@php
    $colorMap = [
        'blue' => ['bg' => 'bg-blue-50', 'text' => 'text-blue-600', 'from' => 'from-blue-50', 'to' => 'to-blue-100'],
        'green' => ['bg' => 'bg-green-50', 'text' => 'text-green-600', 'from' => 'from-green-50', 'to' => 'to-green-100'],
        'yellow' => ['bg' => 'bg-yellow-50', 'text' => 'text-yellow-600', 'from' => 'from-yellow-50', 'to' => 'to-yellow-100'],
        'purple' => ['bg' => 'bg-purple-50', 'text' => 'text-purple-600', 'from' => 'from-purple-50', 'to' => 'to-purple-100'],
        'red' => ['bg' => 'bg-red-50', 'text' => 'text-red-600', 'from' => 'from-red-50', 'to' => 'to-red-100'],
        'gray' => ['bg' => 'bg-gray-50', 'text' => 'text-gray-600', 'from' => 'from-gray-50', 'to' => 'to-gray-100'],
    ];
    $c = $colorMap[$color] ?? $colorMap['blue'];
@endphp

<div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
    <div class="absolute right-0 top-0 w-24 h-24 bg-gradient-to-br {{ $c['from'] }} {{ $c['to'] }} rounded-bl-full opacity-50 transition-transform group-hover:scale-110"></div>
    <div class="relative z-10 flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-gray-500">{{ $title }}</p>
            <p class="text-3xl font-bold text-gray-900 mt-1">{{ $value }}</p>
        </div>
        <div class="w-12 h-12 rounded-xl {{ $c['bg'] }} flex items-center justify-center {{ $c['text'] }}">
            <i class="bi {{ $icon }} text-xl"></i>
        </div>
    </div>
    @if($trend || $trendText)
    <div class="relative z-10 mt-4 flex items-center text-sm">
        @if($trend)
            <span class="{{ str_starts_with($trend, '+') ? 'text-green-600' : (str_starts_with($trend, '-') ? 'text-red-600' : 'text-gray-500') }} font-medium flex items-center">
                @if(str_starts_with($trend, '+')) <i class="bi bi-arrow-up-short text-lg mr-0.5"></i>
                @elseif(str_starts_with($trend, '-')) <i class="bi bi-arrow-down-short text-lg mr-0.5"></i>
                @endif
                {{ ltrim($trend, '+-') }}
            </span>
        @endif
        @if($trendText)
            <span class="{{ $trend ? 'text-gray-400 ml-2' : 'text-gray-500 font-medium' }}">{{ $trendText }}</span>
        @endif
    </div>
    @endif
</div>

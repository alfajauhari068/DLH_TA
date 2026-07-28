@props(['type' => 'success', 'message' => ''])

<div {{ $attributes->merge(['class' => 'fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-white p-4 rounded-2xl shadow-xl border-l-4 ' . ($type === 'error' ? 'border-danger' : 'border-primary')]) }}>
    <div class="w-8 h-8 rounded-full flex items-center justify-center {{ $type === 'error' ? 'bg-danger/10 text-danger' : 'bg-light-green text-primary' }}">
        <i class="bi {{ $type === 'error' ? 'bi-x-circle-fill' : 'bi-check-circle-fill' }}"></i>
    </div>
    <span class="text-sm font-medium text-gray-800">{{ $message ?: $slot }}</span>
</div>

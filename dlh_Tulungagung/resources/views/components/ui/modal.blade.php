@props([
    'id',
    'title' => null,
    'size' => 'md', // sm, md, lg, xl
    'static' => false,
])

@php
    $sizeClasses = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
    ][$size] ?? 'max-w-md';
@endphp

<div 
    x-data="{ show: false }"
    x-show="show"
    x-on:open-modal.window="if ($event.detail === '{{ $id }}') show = true"
    x-on:close-modal.window="if ($event.detail === '{{ $id }}') show = false"
    x-on:keydown.escape.window="show = false"
    style="display: none;"
    class="fixed inset-0 z-50 overflow-y-auto"
    aria-labelledby="{{ $id }}Label"
    role="dialog"
    aria-modal="true"
>
    <!-- Backdrop -->
    <div 
        x-show="show"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm transition-opacity"
        @if(!$static) x-on:click="show = false" @endif
    ></div>

    <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
        <!-- Modal Panel -->
        <div 
            x-show="show"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative transform overflow-hidden rounded-xl bg-white text-left shadow-hover transition-all w-full {{ $sizeClasses }} sm:my-8"
        >
            @if($title || isset($header))
                <div class="border-b border-gray-100 bg-white px-6 py-4 flex items-center justify-between">
                    @if($title)
                        <h3 class="font-semibold text-lg text-gray-900" id="{{ $id }}Label">{{ $title }}</h3>
                    @endif
                    
                    @if(isset($header))
                        {{ $header }}
                    @endif

                    <button type="button" x-on:click="show = false" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2 rounded-md transition-colors" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            @endif

            <div class="px-6 py-5 bg-white">
                {{ $slot }}
            </div>

            @if(isset($footer))
                <div class="border-t border-gray-100 bg-gray-50 px-6 py-4 flex items-center justify-end gap-3">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>

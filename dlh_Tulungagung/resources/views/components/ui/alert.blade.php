@props([
    'type' => 'info', // success, error, info, warning
    'title' => null,
    'dismissible' => false,
])

@php
    $typeClasses = [
        'success' => 'bg-success/10 text-success-800 border-success/20',
        'error' => 'bg-danger/10 text-danger-800 border-danger/20',
        'info' => 'bg-info/10 text-info-800 border-info/20',
        'warning' => 'bg-warning/10 text-warning-800 border-warning/20',
    ][$type] ?? 'bg-info/10 text-info-800 border-info/20';

    $iconClasses = [
        'success' => 'text-success',
        'error' => 'text-danger',
        'info' => 'text-info',
        'warning' => 'text-warning',
    ][$type] ?? 'text-info';

    $iconType = [
        'success' => 'check-circle-fill',
        'error' => 'x-circle-fill',
        'info' => 'info-circle-fill',
        'warning' => 'exclamation-triangle-fill',
    ][$type] ?? 'info-circle-fill';
@endphp

<div 
    {{ $attributes->merge(['class' => "rounded-xl border p-4 mb-4 animate-fade-in relative {$typeClasses}"]) }}
    role="alert"
    @if($dismissible) x-data="{ show: true }" x-show="show" x-transition.opacity.duration.300ms @endif
>
    <div class="flex">
        <div class="flex-shrink-0">
            <i class="bi bi-{{ $iconType }} text-xl {{ $iconClasses }}"></i>
        </div>
        <div class="ml-3">
            @if($title)
                <h3 class="text-sm font-medium">{{ $title }}</h3>
            @endif
            <div class="text-sm {{ $title ? 'mt-1' : '' }} opacity-90">
                {{ $slot }}
            </div>
        </div>
        
        @if($dismissible)
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button 
                        type="button" 
                        @click="show = false"
                        class="inline-flex rounded-md p-1.5 focus:outline-none focus:ring-2 focus:ring-offset-2 opacity-70 hover:opacity-100 transition-opacity"
                    >
                        <span class="sr-only">Dismiss</span>
                        <i class="bi bi-x text-lg"></i>
                    </button>
                </div>
            </div>
        @endif
    </div>
</div>

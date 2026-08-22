@props([
    'type' => 'text',
    'name',
    'id' => null,
    'label' => null,
    'placeholder' => null,
    'value' => null,
    'required' => false,
    'disabled' => false,
    'help' => null,
    'icon' => null,
])

@php
    $id = $id ?? $name;
    $hasError = $errors->has($name);
    
    $baseClasses = 'block w-full rounded-xl border border-gray-300 px-3 py-2 shadow-sm transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary disabled:bg-gray-50 disabled:text-gray-500 sm:text-sm bg-white';
    
    if ($icon) {
        $baseClasses .= ' pl-10';
    }
    
    if ($hasError) {
        $baseClasses = str_replace(['border-gray-300', 'focus:ring-primary/20', 'focus:border-primary'], ['border-danger text-danger', 'focus:ring-danger/20', 'focus:border-danger'], $baseClasses);
    }
@endphp

<div class="mb-4">
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-1.5">
            {{ $label }} @if($required) <span class="text-danger">*</span> @endif
        </label>
    @endif

    <div class="relative">
        @if($icon)
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="bi bi-{{ $icon }} {{ $hasError ? 'text-danger' : 'text-gray-400' }}"></i>
            </div>
        @endif

        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $id }}" 
            value="{{ old($name, $value) }}" 
            placeholder="{{ $placeholder }}"
            {{ $attributes->merge(['class' => $baseClasses]) }}
            @if($required) required @endif
            @if($disabled) disabled @endif
        >
    </div>

    @if($hasError)
        <p class="mt-1.5 text-sm text-danger animate-fade-in">{{ $errors->first($name) }}</p>
    @elseif($help)
        <p class="mt-1.5 text-sm text-muted">{{ $help }}</p>
    @endif
</div>

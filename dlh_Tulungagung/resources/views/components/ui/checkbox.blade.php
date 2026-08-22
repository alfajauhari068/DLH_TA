@props([
    'name',
    'id' => null,
    'label' => null,
    'checked' => false,
    'disabled' => false,
    'help' => null,
])

@php
    $id = $id ?? $name;
    $hasError = $errors->has($name);
    
    $baseClasses = 'h-4 w-4 rounded border border-gray-300 text-primary focus:ring-primary disabled:bg-gray-100 disabled:border-gray-200 mt-0.5';
    
    if ($hasError) {
        $baseClasses .= ' border-danger text-danger focus:ring-danger';
    }
@endphp

<div class="mb-4">
    <div class="relative flex items-start">
        <div class="flex h-5 items-center">
            <input 
                type="checkbox" 
                name="{{ $name }}" 
                id="{{ $id }}" 
                value="1"
                {{ $attributes->merge(['class' => $baseClasses]) }}
                @if(old($name, $checked)) checked @endif
                @if($disabled) disabled @endif
            >
        </div>
        <div class="ml-3 text-sm">
            @if($label)
                <label for="{{ $id }}" class="font-medium {{ $disabled ? 'text-gray-400' : 'text-gray-700' }}">{{ $label }}</label>
            @endif
            @if($help)
                <p class="{{ $disabled ? 'text-gray-400' : 'text-muted' }}">{{ $help }}</p>
            @endif
            
            @if($hasError)
                <p class="mt-1 text-sm text-danger animate-fade-in">{{ $errors->first($name) }}</p>
            @endif
        </div>
    </div>
</div>

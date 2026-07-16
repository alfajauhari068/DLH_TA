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
@endphp

<div class="mb-4">
    <div class="relative flex items-center">
        <div class="flex items-center">
            <label for="{{ $id }}" class="flex items-center cursor-pointer relative">
                <input 
                    type="checkbox" 
                    name="{{ $name }}" 
                    id="{{ $id }}" 
                    value="1"
                    class="sr-only peer"
                    @if(old($name, $checked)) checked @endif
                    @if($disabled) disabled @endif
                    {{ $attributes }}
                >
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary @if($disabled) opacity-50 cursor-not-allowed @endif"></div>
            </label>
        </div>
        <div class="ml-3 text-sm flex-1">
            @if($label)
                <label for="{{ $id }}" class="font-medium {{ $disabled ? 'text-gray-400' : 'text-gray-700' }} cursor-pointer">{{ $label }}</label>
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

@props([
    'name',
    'id' => null,
    'label' => null,
    'options' => [], // ['value' => 'label']
    'value' => null,
    'required' => false,
    'disabled' => false,
    'help' => null,
    'placeholder' => 'Pilih salah satu...',
])

@php
    $id = $id ?? $name;
    $hasError = $errors->has($name);
    
    $baseClasses = 'block w-full rounded-xl border border-gray-300 px-3 py-2 shadow-sm transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary disabled:bg-gray-50 disabled:text-gray-500 sm:text-sm bg-white';
    
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

    <select 
        name="{{ $name }}" 
        id="{{ $id }}" 
        {{ $attributes->merge(['class' => $baseClasses]) }}
        @if($required) required @endif
        @if($disabled) disabled @endif
    >
        @if($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif
        
        @foreach($options as $val => $text)
            <option value="{{ $val }}" @if(old($name, $value) == $val) selected @endif>
                {{ $text }}
            </option>
        @endforeach
        
        {{ $slot }}
    </select>

    @if($hasError)
        <p class="mt-1.5 text-sm text-danger animate-fade-in">{{ $errors->first($name) }}</p>
    @elseif($help)
        <p class="mt-1.5 text-sm text-muted">{{ $help }}</p>
    @endif
</div>

@props([
    'as' => 'button',
    'variant' => 'primary', // primary, secondary, outline, ghost, danger, success, warning, link
    'size' => 'md', // sm, md, lg
    'icon' => null,
    'iconPosition' => 'left', // left, right
    'loading' => false,
    'disabled' => false,
    'fullWidth' => false,
])

@php
    if ($attributes->has('href')) {
        $as = 'a';
    }

    $baseClasses = 'inline-flex items-center justify-center font-medium rounded-xl transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $sizeClasses = [
        'sm' => 'text-xs px-3 py-1.5 gap-1.5',
        'md' => 'text-sm px-4 py-2 gap-2',
        'lg' => 'text-base px-6 py-3 gap-2',
    ][$size] ?? 'text-sm px-4 py-2 gap-2';

    if ($variant === 'link') {
        $sizeClasses = 'text-sm gap-1.5 p-0';
    }

    $variantClasses = [
        'primary' => 'bg-primary text-white hover:bg-primary-dark focus:ring-primary/50 shadow-soft hover:shadow-hover hover:-translate-y-0.5',
        'secondary' => 'bg-secondary text-white hover:bg-secondary-dark focus:ring-secondary/50 shadow-soft hover:shadow-hover hover:-translate-y-0.5',
        'outline' => 'bg-transparent border border-gray-300 text-gray-700 hover:bg-gray-50 focus:ring-gray-200',
        'ghost' => 'bg-transparent text-gray-700 hover:bg-gray-100 focus:ring-gray-200',
        'danger' => 'bg-danger text-white hover:opacity-90 focus:ring-danger/50 shadow-soft hover:shadow-hover',
        'success' => 'bg-success text-white hover:opacity-90 focus:ring-success/50 shadow-soft hover:shadow-hover',
        'warning' => 'bg-warning text-white hover:opacity-90 focus:ring-warning/50 shadow-soft hover:shadow-hover',
        'link' => 'bg-transparent text-primary hover:text-primary-dark hover:underline focus:ring-0 focus:ring-offset-0',
    ][$variant] ?? 'bg-primary text-white hover:bg-primary-dark focus:ring-primary/50';

    if ($disabled || $loading) {
        $variantClasses .= ' opacity-60 cursor-not-allowed pointer-events-none hover:translate-y-0 hover:shadow-soft hover:no-underline';
    }

    $widthClass = $fullWidth ? 'w-full' : '';

    $classes = trim("{$baseClasses} {$sizeClasses} {$variantClasses} {$widthClass}");
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }} @if($disabled || $loading) disabled @endif>
    @if($loading)
        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
    @elseif($icon && $iconPosition === 'left')
        <i class="bi bi-{{ $icon }}"></i>
    @endif

    {{ $slot }}

    @if($icon && $iconPosition === 'right' && !$loading)
        <i class="bi bi-{{ $icon }}"></i>
    @endif
</{{ $as }}>

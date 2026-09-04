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

    $baseClasses = 'inline-flex items-center justify-center font-medium transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $sizeClasses = [
        'sm' => 'text-xs px-3 py-1.5 gap-1.5 rounded-lg',
        'md' => 'text-sm px-4 py-2 gap-2 rounded-xl',
        'lg' => 'text-base px-6 py-3 gap-2 rounded-xl',
    ][$size] ?? 'text-sm px-4 py-2 gap-2 rounded-xl';

    if ($variant === 'link') {
        $sizeClasses = 'text-sm gap-1.5 p-0 rounded-none';
    }

    // Token-based color variants using CSS custom properties
    $variantClasses = [
        'primary' => 'bg-[var(--primary)] text-white hover:bg-[var(--primary-dark)] focus:ring-[var(--primary-green)]/50 shadow-[var(--shadow-card)] hover:shadow-[var(--shadow-hover)] hover:-translate-y-1',
        'secondary' => 'bg-[var(--primary-green)] text-white hover:opacity-90 focus:ring-[var(--primary-green)]/50 shadow-[var(--shadow-card)] hover:shadow-[var(--shadow-hover)] hover:-translate-y-1',
        'outline' => 'bg-transparent border border-slate-300 text-slate-700 hover:bg-slate-50 focus:ring-[var(--primary-green)]/30',
        'ghost' => 'bg-transparent text-slate-700 hover:bg-slate-100 focus:ring-[var(--primary-green)]/30',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500/50 shadow-[var(--shadow-card)] hover:shadow-[var(--shadow-hover)]',
        'success' => 'bg-emerald-600 text-white hover:bg-emerald-700 focus:ring-emerald-500/50 shadow-[var(--shadow-card)] hover:shadow-[var(--shadow-hover)]',
        'warning' => 'bg-amber-600 text-white hover:bg-amber-700 focus:ring-amber-500/50 shadow-[var(--shadow-card)] hover:shadow-[var(--shadow-hover)]',
        'link' => 'bg-transparent text-[var(--primary)] hover:text-[var(--primary-dark)] hover:underline focus:ring-0 focus:ring-offset-0',
    ][$variant] ?? 'bg-[var(--primary)] text-white hover:bg-[var(--primary-dark)] focus:ring-[var(--primary-green)]/50';

    if ($disabled || $loading) {
        $variantClasses .= ' opacity-60 cursor-not-allowed pointer-events-none hover:translate-y-0 hover:shadow-[var(--shadow-card)] hover:no-underline';
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

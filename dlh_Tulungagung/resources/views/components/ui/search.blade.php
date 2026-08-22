@props(['placeholder' => 'Cari informasi...', 'action' => '/search'])

<form action="{{ $action }}" method="GET" {{ $attributes->merge(['class' => 'relative w-full max-w-md']) }}>
    <input type="search" name="q" placeholder="{{ $placeholder }}" 
           class="w-full bg-gray-50 border border-gray-100 rounded-full py-3 ps-6 pe-12 text-sm text-gray-800 focus:bg-white focus:border-primary/30 focus:outline-none transition-all shadow-none">
    <button type="submit" class="absolute end-1.5 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-transparent text-gray-400 hover:text-primary flex items-center justify-center transition-colors" aria-label="Search">
        <i class="bi bi-search text-base"></i>
    </button>
</form>

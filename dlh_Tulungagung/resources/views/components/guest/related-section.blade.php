<div class="pt-8 md:pt-12 mt-8 md:mt-12 border-t border-gray-100">
    @if(isset($header))
        {{ $header }}
    @endif
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
        {{ $slot }}
    </div>
</div>

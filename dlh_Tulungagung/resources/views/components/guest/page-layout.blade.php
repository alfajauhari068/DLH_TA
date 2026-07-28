@props(['hasSidebar' => true])

<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
    <div class="{{ $hasSidebar ? 'lg:col-span-8' : 'lg:col-span-12' }} space-y-8">
        {{ $main ?? $slot }}
    </div>

    @if($hasSidebar && isset($sidebar))
        <div class="lg:col-span-4 space-y-6">
            {{ $sidebar }}
        </div>
    @endif
</div>

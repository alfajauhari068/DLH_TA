<div class="space-y-6 pb-12">
    <!-- Breadcrumb -->
    @if(isset($breadcrumb))
        <div class="mb-4">
            {{ $breadcrumb }}
        </div>
    @endif

    <!-- Header -->
    @if(isset($header))
        {{ $header }}
    @endif

    <!-- Statistics -->
    @if(isset($stats))
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            {{ $stats }}
        </div>
    @endif

    <!-- Toolbar -->
    @if(isset($toolbar))
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
            {{ $toolbar }}
        </div>
    @endif

    <!-- Content -->
    {{ $slot }}

    <!-- Pagination -->
    @if(isset($pagination) && trim($pagination) !== '')
        <div class="mt-8 flex justify-center">
            <div class="bg-white rounded-2xl px-4 py-2 border border-gray-100 shadow-sm inline-block w-full">
                {{ $pagination }}
            </div>
        </div>
    @endif
</div>

<!-- Extra styles if needed for standard pagination overriding -->
<style>
    /* Making default tailwind pagination look a bit more rounded/modern within the container */
    nav[aria-label="Pagination"] .rounded-l-md { border-top-left-radius: 0.75rem; border-bottom-left-radius: 0.75rem; }
    nav[aria-label="Pagination"] .rounded-r-md { border-top-right-radius: 0.75rem; border-bottom-right-radius: 0.75rem; }
</style>

@props(['paginator'])

@if ($paginator && $paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between border-t border-gray-100 px-4 py-3 sm:px-6">
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-500">
                    Menampilkan <span class="font-bold text-gray-900">{{ $paginator->firstItem() }}</span> sampai <span class="font-bold text-gray-900">{{ $paginator->lastItem() }}</span> dari <span class="font-bold text-gray-900">{{ $paginator->total() }}</span> data
                </p>
            </div>
            <div>
                <span class="relative z-0 inline-flex rounded-full shadow-sm">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-300 bg-white border border-gray-100 rounded-l-full cursor-default">
                            <i class="bi bi-chevron-left me-1"></i> Sebelum
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-100 rounded-l-full hover:bg-light-green hover:text-primary transition-colors">
                            <i class="bi bi-chevron-left me-1"></i> Sebelum
                        </a>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-100 rounded-r-full hover:bg-light-green hover:text-primary transition-colors">
                            Berikut <i class="bi bi-chevron-right ms-1"></i>
                        </a>
                    @else
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-300 bg-white border border-gray-100 rounded-r-full cursor-default">
                            Berikut <i class="bi bi-chevron-right ms-1"></i>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif

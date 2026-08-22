@props([
    'type' => 'card', // hero, card, article, sidebar
])

@if($type === 'hero')
    <div class="w-full bg-gray-200 animate-pulse min-h-[280px] md:min-h-[340px] lg:min-h-[420px] flex items-center">
        <div class="max-w-[1440px] w-[95%] mx-auto py-16">
            <div class="h-4 bg-gray-300 rounded w-48 mb-8"></div>
            <div class="h-10 bg-gray-300 rounded w-3/4 max-w-2xl mb-6"></div>
            <div class="h-4 bg-gray-300 rounded w-full max-w-xl mb-4"></div>
            <div class="h-4 bg-gray-300 rounded w-5/6 max-w-lg mb-8"></div>
            <div class="flex gap-4">
                <div class="h-12 bg-gray-300 rounded w-32"></div>
                <div class="h-12 bg-gray-300 rounded w-32"></div>
            </div>
        </div>
    </div>

@elseif($type === 'card')
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="w-full h-48 bg-gray-200 animate-pulse"></div>
        <div class="p-5">
            <div class="h-5 bg-gray-200 animate-pulse rounded w-3/4 mb-3"></div>
            <div class="h-4 bg-gray-200 animate-pulse rounded w-full mb-2"></div>
            <div class="h-4 bg-gray-200 animate-pulse rounded w-5/6 mb-6"></div>
            
            <div class="pt-4 border-t border-gray-50 flex justify-between">
                <div class="h-3 bg-gray-200 animate-pulse rounded w-20"></div>
                <div class="h-3 bg-gray-200 animate-pulse rounded w-20"></div>
            </div>
        </div>
    </div>

@elseif($type === 'article')
    <div class="space-y-6 max-w-4xl">
        <div class="h-6 bg-gray-200 animate-pulse rounded w-1/4 mb-10"></div>
        
        <div class="h-4 bg-gray-200 animate-pulse rounded w-full"></div>
        <div class="h-4 bg-gray-200 animate-pulse rounded w-[95%]"></div>
        <div class="h-4 bg-gray-200 animate-pulse rounded w-[90%]"></div>
        <div class="h-4 bg-gray-200 animate-pulse rounded w-full"></div>
        <div class="h-4 bg-gray-200 animate-pulse rounded w-[85%]"></div>
        
        <div class="w-full h-80 bg-gray-200 animate-pulse rounded-2xl my-8"></div>
        
        <div class="h-4 bg-gray-200 animate-pulse rounded w-[92%]"></div>
        <div class="h-4 bg-gray-200 animate-pulse rounded w-full"></div>
        <div class="h-4 bg-gray-200 animate-pulse rounded w-[88%]"></div>
    </div>

@elseif($type === 'sidebar')
    <div class="space-y-6">
        <div class="bg-white rounded-2xl border border-gray-100 p-6">
            <div class="h-4 bg-gray-200 animate-pulse rounded w-1/3 mb-6"></div>
            <div class="space-y-4">
                <div class="flex gap-4">
                    <div class="w-16 h-16 bg-gray-200 animate-pulse rounded-xl"></div>
                    <div class="flex-1 space-y-2 py-1">
                        <div class="h-3 bg-gray-200 animate-pulse rounded w-full"></div>
                        <div class="h-3 bg-gray-200 animate-pulse rounded w-3/4"></div>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-16 h-16 bg-gray-200 animate-pulse rounded-xl"></div>
                    <div class="flex-1 space-y-2 py-1">
                        <div class="h-3 bg-gray-200 animate-pulse rounded w-5/6"></div>
                        <div class="h-3 bg-gray-200 animate-pulse rounded w-2/3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

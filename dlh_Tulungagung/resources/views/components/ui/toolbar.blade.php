<div {{ $attributes->merge(['class' => 'flex flex-col md:flex-row md:items-center gap-4 bg-gray-50/50 p-4 rounded-xl border border-gray-100']) }}>
    
    @if(isset($search))
        <div class="w-full md:w-72 shrink-0">
            {{ $search }}
        </div>
    @endif
    
    @if(isset($filter))
        <div class="flex items-center gap-2">
            {{ $filter }}
        </div>
    @endif
    
    @if(isset($bulkAction))
        <div class="flex items-center gap-2">
            <div class="h-6 w-px bg-gray-200 hidden md:block mx-2"></div>
            {{ $bulkAction }}
        </div>
    @endif
    
    <div class="flex-1"></div>
    
    @if(isset($actions))
        <div class="flex items-center gap-2 w-full md:w-auto justify-end">
            {{ $actions }}
        </div>
    @endif
    
</div>

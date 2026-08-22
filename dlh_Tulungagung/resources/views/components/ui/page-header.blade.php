@props([
    'title',
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4']) }}>
    <div class="flex-1 min-w-0">
        @if(isset($breadcrumb))
            <div class="mb-2">
                {{ $breadcrumb }}
            </div>
        @endif
        
        <x-ui.heading size="title" class="truncate">{{ $title }}</x-ui.heading>
        
        @if($description)
            <x-ui.text size="body" color="text-muted" class="mt-1 max-w-3xl">{{ $description }}</x-ui.text>
        @endif
    </div>
    
    @if(isset($actions) || isset($secondaryActions))
        <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
            @if(isset($secondaryActions))
                <div class="flex items-center gap-2">
                    {{ $secondaryActions }}
                </div>
            @endif
            
            @if(isset($actions))
                <div class="flex items-center gap-2 w-full sm:w-auto">
                    {{ $actions }}
                </div>
            @endif
        </div>
    @endif
</div>

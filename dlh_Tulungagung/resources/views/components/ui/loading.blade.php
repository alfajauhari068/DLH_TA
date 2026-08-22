@props(['size' => 'w-8 h-8'])

<div {{ $attributes->merge(['class' => 'flex items-center justify-center p-4']) }}>
    <div class="animate-spin rounded-full border-4 border-gray-100 border-t-primary {{ $size }}"></div>
</div>

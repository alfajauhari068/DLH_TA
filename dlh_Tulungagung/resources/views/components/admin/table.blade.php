<div {{ $attributes->merge(['class' => 'table-responsive shadow-sm rounded-3 bg-white']) }} role="region" aria-label="Table">
    <table class="table table-hover mb-0">
        {{ $slot }}
    </table>
</div>

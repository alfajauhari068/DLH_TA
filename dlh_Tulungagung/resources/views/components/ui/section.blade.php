@props(['bg' => 'bg-white'])

<section {{ $attributes->merge(['class' => 'py-14 md:py-20 lg:py-28 relative overflow-hidden ' . $bg]) }}>
    {{ $slot }}
</section>

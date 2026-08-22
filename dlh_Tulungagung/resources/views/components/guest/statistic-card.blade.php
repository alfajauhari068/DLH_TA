@props(['icon', 'value', 'label', 'colorTheme' => 'light-green', 'textColor' => 'primary', 'suffix' => '', 'prefix' => ''])

<div class="group bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl hover:-translate-y-2 hover:shadow-primary/10 transition-all duration-500 border border-gray-100 flex flex-col relative overflow-hidden">
    <div class="flex justify-between items-center mb-6">
        <div class="w-12 h-12 bg-{{ $colorTheme }} text-{{ $textColor }} rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
            <i class="bi {{ $icon }} text-2xl"></i>
        </div>
        {{ $slot }}
    </div>
    <h3 class="text-4xl font-black text-gray-900 mb-2">
        {{ $prefix }}<span class="counter" data-target="{{ $value }}">0</span>{{ $suffix }}
    </h3>
    <p class="text-gray-500 font-medium text-sm mb-4">{{ $label }}</p>
    
    @if(isset($chart))
        <div class="mt-auto">
            {{ $chart }}
        </div>
    @endif
</div>

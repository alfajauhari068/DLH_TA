@props([
    'title' => 'Tidak Ada Data',
    'description' => 'Data yang Anda cari tidak ditemukan atau masih kosong.',
    'icon' => 'inbox',
    'action' => null, // e.g. "Tambah Data"
    'actionUrl' => '#',
])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center justify-center p-12 text-center bg-gray-50 rounded-xl border border-dashed border-gray-300']) }}>
    <div class="w-16 h-16 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center mb-4">
        <i class="bi bi-{{ $icon }} text-3xl"></i>
    </div>
    
    <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ $title }}</h3>
    <p class="text-sm text-gray-500 mb-6 max-w-sm">{{ $description }}</p>
    
    @if($action)
        <x-ui.button as="a" href="{{ $actionUrl }}" variant="primary" icon="plus" iconPosition="left">
            {{ $action }}
        </x-ui.button>
    @endif
    
    {{ $slot }}
</div>

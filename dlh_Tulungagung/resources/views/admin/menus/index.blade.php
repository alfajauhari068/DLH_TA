@extends('layouts.admin')

@section('title', 'Menu Navigasi')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Menu Navigasi</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Menu Navigasi" 
            subtitle="Kelola tautan menu navigasi pada halaman utama." 
            actionUrl="{{ route('admin.menus.items.create', ['menu_id' => $mainMenu->id]) }}" 
            actionText="Tambah Menu Utama" />
    </x-slot:header>

    @if($menuItems->isEmpty())
        <x-admin.index.empty 
            title="Belum ada Menu Navigasi" 
            description="Tambahkan tautan menu utama untuk membangun navigasi website Anda." 
            actionUrl="{{ route('admin.menus.items.create', ['menu_id' => $mainMenu->id]) }}" 
            actionText="Tambah Menu" 
            icon="bi-menu-button-wide" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Menu</th>
                <th class="px-6 py-3">Tautan (URL)</th>
                <th class="px-6 py-3 text-center">Urutan</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            
            @foreach($menuItems as $item)
                <!-- Main Menu Item -->
                <tr class="bg-white hover:bg-gray-50 transition-colors border-b border-gray-100">
                    <td class="px-6 py-4 font-bold text-gray-900 flex items-center gap-2">
                        @if($item->icon)
                            <i class="{{ $item->icon }} text-green-600"></i>
                        @endif
                        {{ $item->title }}
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $item->url }}</td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gray-100 text-xs font-medium text-gray-800">{{ $item->order }}</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.menus.items.create', ['menu_id' => $mainMenu->id, 'parent_id' => $item->id]) }}" class="text-green-600 hover:text-green-900 font-medium text-xs mr-3"><i class="bi bi-plus"></i> Sub Menu</a>
                        <a href="{{ route('admin.menus.items.edit', $item) }}" class="text-blue-600 hover:text-blue-900 font-medium text-xs mr-3">Edit</a>
                        <form action="{{ route('admin.menus.items.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini beserta anak-anaknya?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-medium text-xs">Hapus</button>
                        </form>
                    </td>
                </tr>
                
                <!-- Sub Menu Items -->
                @foreach($item->children as $child)
                    <tr class="bg-gray-50/50 hover:bg-gray-100/50 transition-colors border-b border-gray-50">
                        <td class="px-6 py-3 pl-12 flex items-center gap-2 text-gray-600">
                            <i class="bi bi-arrow-return-right text-gray-400"></i>
                            @if($child->icon)
                                <i class="{{ $child->icon }}"></i>
                            @endif
                            {{ $child->title }}
                        </td>
                        <td class="px-6 py-3 text-gray-500 text-sm">{{ $child->url }}</td>
                        <td class="px-6 py-3 text-center">
                            <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-white border border-gray-200 text-xs text-gray-600">{{ $child->order }}</span>
                        </td>
                        <td class="px-6 py-3 text-right">
                            <a href="{{ route('admin.menus.items.edit', $child) }}" class="text-blue-600 hover:text-blue-900 font-medium text-xs mr-3">Edit</a>
                            <form action="{{ route('admin.menus.items.destroy', $child) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sub-menu ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-medium text-xs">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </x-admin.index.table>
    @endif

</x-admin.index.layout>
@endsection

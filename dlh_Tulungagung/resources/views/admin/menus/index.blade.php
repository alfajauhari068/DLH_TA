@extends('layouts.admin')

@section('title', 'Menu Navigasi')
@section('subtitle', 'Kelola tautan menu navigasi pada halaman utama')

@section('actions')
    <x-ui.button href="{{ route('admin.menus.items.create', ['menu_id' => $mainMenu->id]) }}" variant="primary">
        Tambah Menu Utama
    </x-ui.button>
@endsection

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Menu Navigasi']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <x-slot:toolbar>
            <div class="text-sm font-semibold text-gray-700">Daftar Menu</div>
        </x-slot:toolbar>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Menu</th>
                        <th scope="col" class="px-6 py-3">Tautan (URL)</th>
                        <th scope="col" class="px-6 py-3">Urutan</th>
                        <th scope="col" class="px-6 py-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menuItems as $item)
                        <!-- Main Menu Item -->
                        <tr class="bg-white border-b hover:bg-gray-50 font-semibold">
                            <td class="px-6 py-4 flex items-center gap-2">
                                @if($item->icon)
                                    <i class="{{ $item->icon }}"></i>
                                @endif
                                {{ $item->title }}
                            </td>
                            <td class="px-6 py-4">{{ $item->url }}</td>
                            <td class="px-6 py-4">{{ $item->order }}</td>
                            <td class="px-6 py-4 text-right flex justify-end gap-2">
                                <a href="{{ route('admin.menus.items.create', ['menu_id' => $mainMenu->id, 'parent_id' => $item->id]) }}" class="text-emerald-600 hover:underline text-xs">+ Sub Menu</a>
                                <a href="{{ route('admin.menus.items.edit', $item) }}" class="text-blue-600 hover:underline text-xs">Edit</a>
                                <form action="{{ route('admin.menus.items.destroy', $item) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini beserta anak-anaknya?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline text-xs">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        
                        <!-- Sub Menu Items -->
                        @foreach($item->children as $child)
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-3 pl-12 flex items-center gap-2 text-gray-600">
                                    <i class="bi bi-arrow-return-right text-gray-400"></i>
                                    @if($child->icon)
                                        <i class="{{ $child->icon }}"></i>
                                    @endif
                                    {{ $child->title }}
                                </td>
                                <td class="px-6 py-3 text-gray-600">{{ $child->url }}</td>
                                <td class="px-6 py-3 text-gray-600">{{ $child->order }}</td>
                                <td class="px-6 py-3 text-right flex justify-end gap-2">
                                    <a href="{{ route('admin.menus.items.edit', $child) }}" class="text-blue-600 hover:underline text-xs">Edit</a>
                                    <form action="{{ route('admin.menus.items.destroy', $child) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sub-menu ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline text-xs">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-gray-500">Belum ada menu navigasi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-ui.card>
@endsection

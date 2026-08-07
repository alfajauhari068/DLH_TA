@extends('layouts.admin')

@section('title', 'Hero Homepage')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Hero Homepage</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Hero Homepage" 
            subtitle="Kelola slide banner, gambar, judul, dan tombol aksi di beranda utama." 
            actionUrl="{{ route('admin.hero.create') }}" 
            actionText="Tambah Hero" />
    </x-slot:header>

    @if($heroes->isEmpty())
        <x-admin.index.empty 
            title="Belum ada Data Hero" 
            description="Tambahkan slide banner untuk mempercantik beranda utama Anda." 
            actionUrl="{{ route('admin.hero.create') }}" 
            actionText="Tambah Hero" 
            icon="bi-image" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Background</th>
                <th class="px-6 py-3">Badge & Judul</th>
                <th class="px-6 py-3">Urutan</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            @foreach($heroes as $hero)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        @if($hero->image)
                            <img src="{{ asset('storage/' . $hero->image) }}" class="w-20 h-12 rounded object-cover border border-gray-200" alt="">
                        @else
                            <div class="w-20 h-12 rounded bg-gray-100 flex items-center justify-center text-gray-400 border border-gray-200">
                                <i class="bi bi-image text-xl"></i>
                            </div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full block w-max mb-1">{{ $hero->badge ?? '-' }}</span>
                        <span class="text-gray-900 font-bold block">{{ $hero->title }}</span>
                        <span class="text-xs text-gray-500 block truncate max-w-md">{{ $hero->subtitle }}</span>
                    </td>
                    <td class="px-6 py-4 text-gray-600 font-medium">{{ $hero->sort_order }}</td>
                    <td class="px-6 py-4">
                        @if($hero->is_active)
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                Aktif
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span>
                                Draft
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.hero.edit', $hero) }}" class="text-blue-600 hover:text-blue-900 mr-3">Ubah</a>
                        <form action="{{ route('admin.hero.destroy', $hero) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus Hero ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 bg-transparent border-0 p-0">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>
        <div class="mt-4 px-6">
            {{ $heroes->links() }}
        </div>
    @endif
</x-admin.index.layout>
@endsection

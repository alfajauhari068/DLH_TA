@extends('layouts.admin')

@section('title', 'Master Jabatan')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Jabatan</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Master Jabatan" 
            subtitle="Kelola data referensi jabatan untuk pejabat instansi." 
            actionUrl="{{ route('admin.positions.create') }}" 
            actionText="Tambah Jabatan" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.positions.index')" 
            searchPlaceholder="Search jabatan..." 
            :hasSort="true" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($positions->isEmpty())
        <x-admin.index.empty 
            title="Belum ada Jabatan" 
            description="Tambahkan referensi jabatan baru." 
            actionUrl="{{ route('admin.positions.create') }}" 
            actionText="Tambah Jabatan" 
            icon="bi-diagram-2" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Nama Jabatan</th>
                <th class="px-6 py-3 text-center">Kode</th>
                <th class="px-6 py-3 text-center">Urutan</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            @foreach($positions as $position)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $position->name }}</td>
                    <td class="px-6 py-4 text-center text-gray-500">
                        @if($position->code)
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-mono bg-gray-100 text-gray-800">{{ $position->code }}</span>
                        @else
                            -
                        @endif
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gray-100 text-xs font-medium text-gray-800">{{ $position->sort_order ?? '-' }}</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.positions.edit', $position) }}" class="text-blue-600 hover:text-blue-900 mr-3">Ubah</a>
                        <form action="{{ route('admin.positions.destroy', $position) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $positions->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

@extends('layouts.admin')

@section('title', 'Struktur Bidang')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Departments</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Struktur Bidang" 
            subtitle="Kelola struktur organisasi dan bidang (departments)." 
            actionUrl="{{ route('admin.departments.create') }}" 
            actionText="Tambah Bidang" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.departments.index')" 
            searchPlaceholder="Search departments..." 
            :hasSort="true" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($departments->isEmpty())
        <x-admin.index.empty 
            title="Belum ada Bidang" 
            description="Tambah bidang atau struktur organisasi baru untuk ditampilkan." 
            actionUrl="{{ route('admin.departments.create') }}" 
            actionText="Tambah Bidang" 
            icon="bi-diagram-3" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Nama Bidang</th>
                <th class="px-6 py-3">Induk (Parent)</th>
                <th class="px-6 py-3">Deskripsi</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            @foreach($departments as $department)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $department->name }}</td>
                    <td class="px-6 py-4">
                        @if($department->parent)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                {{ $department->parent->name }}
                            </span>
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ Str::limit($department->description, 50) }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.departments.edit', $department) }}" class="text-blue-600 hover:text-blue-900 mr-3">Ubah</a>
                        <form action="{{ route('admin.departments.destroy', $department) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $departments->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

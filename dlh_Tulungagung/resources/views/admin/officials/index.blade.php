@extends('layouts.admin')

@section('title', 'Data Pejabat')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Pejabat Instansi</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Data Pejabat" 
            subtitle="Kelola informasi profil pejabat dan aparatur sipil negara." 
            actionUrl="{{ route('admin.officials.create') }}" 
            actionText="Tambah Pejabat" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.officials.index')" 
            searchPlaceholder="Search pejabat..." 
            :hasSort="true" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($officials->isEmpty())
        <x-admin.index.empty 
            title="Belum ada Data Pejabat" 
            description="Tambahkan profil pejabat dan aparatur sipil negara." 
            actionUrl="{{ route('admin.officials.create') }}" 
            actionText="Tambah Pejabat" 
            icon="bi-person-badge" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Nama Lengkap</th>
                <th class="px-6 py-3">Jabatan</th>
                <th class="px-6 py-3">Bidang</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            @foreach($officials as $official)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium flex items-center gap-3">
                        @if($official->photo)
                            <img src="{{ asset('storage/' . $official->photo) }}" class="w-10 h-10 rounded-full object-cover border border-gray-200" alt="">
                        @else
                            <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 border border-gray-200">
                                <i class="bi bi-person text-xl"></i>
                            </div>
                        @endif
                        <span class="text-gray-900">{{ $official->name }}</span>
                    </td>
                    <td class="px-6 py-4 text-gray-600">{{ optional($official->position)->name ?? '-' }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ optional($official->department)->name ?? '-' }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.officials.edit', $official) }}" class="text-blue-600 hover:text-blue-900 mr-3">Ubah</a>
                        <form action="{{ route('admin.officials.destroy', $official) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $officials->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

@extends('layouts.admin')

@section('title', 'Agenda Kegiatan')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Agendas</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Agenda Kegiatan" 
            subtitle="Kelola jadwal kegiatan dan agenda publik dinas." 
            actionUrl="{{ route('admin.agendas.create') }}" 
            actionText="Tambah Agenda" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.agendas.index')" 
            searchPlaceholder="Search agenda..." 
            :hasSort="true" 
            :hasDate="true" />
    </x-slot:toolbar>

    @if($agendas->isEmpty())
        <x-admin.index.empty 
            title="Belum ada Agenda" 
            description="Tambah agenda kegiatan baru untuk ditampilkan." 
            actionUrl="{{ route('admin.agendas.create') }}" 
            actionText="Tambah Agenda" 
            icon="bi-calendar-event" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Judul Agenda</th>
                <th class="px-6 py-3">Tanggal Mulai</th>
                <th class="px-6 py-3">Tanggal Selesai</th>
                <th class="px-6 py-3">Lokasi</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            @foreach($agendas as $agenda)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $agenda->title }}</td>
                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($agenda->start_date)->format('d M Y') }}</td>
                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($agenda->end_date)->format('d M Y') }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $agenda->location }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.agendas.edit', $agenda) }}" class="text-blue-600 hover:text-blue-900 mr-3">Ubah</a>
                        <form action="{{ route('admin.agendas.destroy', $agenda) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $agendas->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

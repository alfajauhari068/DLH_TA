@extends('layouts.admin')

@section('title', 'Agenda Kegiatan')
@section('subtitle', 'Kelola jadwal kegiatan dan agenda publik dinas.')

@section('actions')
    <a href="{{ route('admin.agendas.create') }}" class="btn btn-primary btn-sm">Tambah Agenda</a>
@endsection

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h2 class="h5 mb-0">Daftar Agenda</h2>
        @endslot
        @slot('right')
            <a href="{{ route('admin.agendas.create') }}" class="btn btn-outline-primary btn-sm">Tambah Agenda</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search :action="route('admin.agendas.index')" />

    @if($agendas->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($agendas as $agenda)
                    <tr>
                        <td class="px-3 py-2 fw-medium">{{ $agenda->title }}</td>
                        <td class="px-3 py-2">{{ \Carbon\Carbon::parse($agenda->start_date)->format('d M Y') }}</td>
                        <td class="px-3 py-2">{{ \Carbon\Carbon::parse($agenda->end_date)->format('d M Y') }}</td>
                        <td class="px-3 py-2 text-muted">{{ $agenda->location }}</td>
                        <td class="px-3 py-2">
                            <a href="{{ route('admin.agendas.edit', $agenda) }}" class="me-2 text-primary text-decoration-none">Ubah</a>
                            <form action="{{ route('admin.agendas.destroy', $agenda) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger text-decoration-none" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$agendas" />
    @endif
@endsection

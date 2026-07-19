@extends('layouts.admin')

@section('title', 'Master Jabatan')
@section('subtitle', 'Kelola data referensi jabatan untuk pejabat instansi.')

@section('actions')
    <a href="{{ route('admin.positions.create') }}" class="btn btn-primary btn-sm">Tambah Jabatan</a>
@endsection

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h2 class="h5 mb-0">Jabatan</h2>
        @endslot
        @slot('right')
            <a href="{{ route('admin.positions.create') }}" class="btn btn-outline-primary btn-sm">Tambah Jabatan</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search :action="route('admin.positions.index')" />

    @if($positions->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($positions as $position)
                    <tr>
                        <td class="px-3 py-2 fw-medium">{{ $position->name }}</td>
                        <td class="px-3 py-2">{{ $position->code ?? '-' }}</td>
                        <td class="px-3 py-2">{{ $position->sort_order ?? '-' }}</td>
                        <td class="px-3 py-2">
                            <a href="{{ route('admin.positions.edit', $position) }}" class="me-2 text-primary text-decoration-none">Ubah</a>
                            <form action="{{ route('admin.positions.destroy', $position) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger text-decoration-none" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$positions" />
    @endif
@endsection

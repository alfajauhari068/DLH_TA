@extends('layouts.admin')

@section('title', 'Struktur Bidang')
@section('subtitle', 'Kelola struktur organisasi dan bidang (departments).')

@section('actions')
    <a href="{{ route('admin.departments.create') }}" class="btn btn-primary btn-sm">Tambah Bidang</a>
@endsection

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h2 class="h5 mb-0">Struktur Bidang</h2>
        @endslot
        @slot('right')
            <a href="{{ route('admin.departments.create') }}" class="btn btn-outline-primary btn-sm">Tambah Bidang</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search :action="route('admin.departments.index')" />

    @if($departments->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($departments as $department)
                    <tr>
                        <td class="px-3 py-2 fw-medium">{{ $department->name }}</td>
                        <td class="px-3 py-2">{{ $department->parent ? $department->parent->name : '-' }}</td>
                        <td class="px-3 py-2 text-muted">{{ Str::limit($department->description, 50) }}</td>
                        <td class="px-3 py-2">
                            <a href="{{ route('admin.departments.edit', $department) }}" class="me-2 text-primary text-decoration-none">Ubah</a>
                            <form action="{{ route('admin.departments.destroy', $department) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger text-decoration-none" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$departments" />
    @endif
@endsection

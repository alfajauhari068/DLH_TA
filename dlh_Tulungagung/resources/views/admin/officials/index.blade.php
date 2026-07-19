@extends('layouts.admin')

@section('title', 'Data Pejabat')
@section('subtitle', 'Kelola informasi profil pejabat dan aparatur sipil negara.')

@section('actions')
    <a href="{{ route('admin.officials.create') }}" class="btn btn-primary btn-sm">Tambah Pejabat</a>
@endsection

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h2 class="h5 mb-0">Pejabat Instansi</h2>
        @endslot
        @slot('right')
            <a href="{{ route('admin.officials.create') }}" class="btn btn-outline-primary btn-sm">Tambah Pejabat</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search :action="route('admin.officials.index')" />

    @if($officials->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($officials as $official)
                    <tr>
                        <td class="px-3 py-2">
                            <div class="d-flex align-items-center gap-2">
                                @if($official->photo)
                                    <img src="{{ asset('storage/' . $official->photo) }}" class="rounded-circle object-fit-cover" width="32" height="32" alt="">
                                @else
                                    <div class="bg-secondary rounded-circle" style="width: 32px; height: 32px;"></div>
                                @endif
                                <span class="fw-medium">{{ $official->name }}</span>
                            </div>
                        </td>
                        <td class="px-3 py-2">{{ optional($official->position)->name ?? '-' }}</td>
                        <td class="px-3 py-2">{{ optional($official->department)->name ?? '-' }}</td>
                        <td class="px-3 py-2">
                            <a href="{{ route('admin.officials.edit', $official) }}" class="me-2 text-primary text-decoration-none">Ubah</a>
                            <form action="{{ route('admin.officials.destroy', $official) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger text-decoration-none" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$officials" />
    @endif
@endsection

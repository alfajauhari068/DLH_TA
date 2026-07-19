@extends('layouts.admin')

@section('title', 'Survei Kepuasan Masyarakat')
@section('subtitle', 'Kelola rekapitulasi data Survei Kepuasan Masyarakat (SKM/IKM).')

@section('actions')
    <a href="{{ route('admin.skm-scores.create') }}" class="btn btn-primary btn-sm">Tambah Nilai SKM</a>
@endsection

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h2 class="h5 mb-0">Riwayat Nilai SKM</h2>
        @endslot
        @slot('right')
            <a href="{{ route('admin.skm-scores.create') }}" class="btn btn-outline-primary btn-sm">Tambah Nilai SKM</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search :action="route('admin.skm-scores.index')" />

    @if($skm_scores->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($skm_scores as $skm)
                    <tr>
                        <td class="px-3 py-2 fw-bold">{{ $skm->year }}</td>
                        <td class="px-3 py-2">{{ $skm->period }}</td>
                        <td class="px-3 py-2"><span class="badge bg-success">{{ number_format($skm->score, 2) }}</span></td>
                        <td class="px-3 py-2">{{ $skm->category }}</td>
                        <td class="px-3 py-2">
                            <a href="{{ route('admin.skm-scores.edit', $skm) }}" class="me-2 text-primary text-decoration-none">Ubah</a>
                            <form action="{{ route('admin.skm-scores.destroy', $skm) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger text-decoration-none" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$skm_scores" />
    @endif
@endsection

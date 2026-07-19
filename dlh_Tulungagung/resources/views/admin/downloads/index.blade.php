@extends('layouts.admin')

@section('title', 'Downloads')
@section('subtitle', 'Manage downloadable resources and documents.')

@section('actions')
    <a href="{{ route('admin.downloads.create') }}" class="btn btn-primary btn-sm">Create download</a>
@endsection

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h2 class="h5 mb-0">Downloads</h2>
        @endslot
        @slot('right')
            <a href="{{ route('admin.downloads.create') }}" class="btn btn-outline-primary btn-sm">New download</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search :action="route('admin.downloads.index')" />

    @if($downloads->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($downloads as $download)
                    <tr>
                        <td class="px-3 py-2">{{ $download->title }}</td>
                        <td class="px-3 py-2">{{ $download->slug }}</td>
                        <td class="px-3 py-2">{{ $download->category }}</td>
                        <td class="px-3 py-2">{{ $download->status }}</td>
                        <td class="px-3 py-2">{{ $download->downloads }}</td>
                        <td class="px-3 py-2">
                            <a href="{{ route('admin.downloads.show', $download) }}" class="me-2">Lihat</a>
                            <a href="{{ route('admin.downloads.edit', $download) }}" class="me-2">Edit</a>
                            <form action="{{ route('admin.downloads.destroy', $download) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$downloads" />
    @endif
@endsection

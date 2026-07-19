@extends('layouts.admin')

@section('title', 'Programs')
@section('subtitle', 'Manage public programs and initiatives.')

@section('actions')
    <a href="{{ route('admin.programs.create') }}" class="btn btn-primary btn-sm">Create program</a>
@endsection

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h2 class="h5 mb-0">Programs</h2>
        @endslot
        @slot('right')
            <a href="{{ route('admin.programs.create') }}" class="btn btn-outline-primary btn-sm">New program</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search :action="route('admin.programs.index')" />

    @if($programs->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($programs as $program)
                    <tr>
                        <td class="px-3 py-2">{{ $program->title }}</td>
                        <td class="px-3 py-2">{{ $program->status }}</td>
                        <td class="px-3 py-2">{{ optional($program->published_at)->format('Y-m-d') }}</td>
                        <td class="px-3 py-2">
                            <a href="{{ route('admin.programs.show', $program) }}" class="me-2">Lihat</a>
                            <a href="{{ route('admin.programs.edit', $program) }}" class="me-2">Edit</a>
                            <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$programs" />
    @endif
@endsection

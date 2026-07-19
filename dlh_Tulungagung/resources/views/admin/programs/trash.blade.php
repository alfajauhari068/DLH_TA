@extends('layouts.admin')

@section('title', 'Trashed Programs')
@section('subtitle', 'Recover or permanently remove removed programs.')

@section('content')
    <x-admin.card title="Hapusd programs">
        @if($programs->isEmpty())
            <p class="mb-0">No trashed programs.</p>
        @else
            <ul class="list-group list-group-flush">
                @foreach($programs as $program)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>{{ $program->title }}</span>
                        <div>
                            <form action="{{ route('admin.programs.restore', $program->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-sm btn-outline-success">Pulihkan</button>
                            </form>
                            <form action="{{ route('admin.programs.forceHapus', $program->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">Hapus permanently</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </x-admin.card>
@endsection

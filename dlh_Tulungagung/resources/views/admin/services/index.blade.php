@extends('layouts.admin')

@section('title', 'Services')
@section('subtitle', 'Manage public services and support workflows.')

@section('actions')
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-sm">Create service</a>
@endsection

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h2 class="h5 mb-0">Services</h2>
        @endslot
        @slot('right')
            <a href="{{ route('admin.services.create') }}" class="btn btn-outline-primary btn-sm">New service</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search :action="route('admin.services.index')" />

    @if($services->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($services as $service)
                    <tr>
                        <td class="px-3 py-2">{{ $service->title }}</td>
                        <td class="px-3 py-2">{{ $service->service_category }}</td>
                        <td class="px-3 py-2">{{ $service->status }}</td>
                        <td class="px-3 py-2">{{ optional($service->published_at)->format('Y-m-d') }}</td>
                        <td class="px-3 py-2">
                            <a href="{{ route('admin.services.show', $service) }}" class="me-2 text-decoration-none">Lihat</a>
                            <a href="{{ route('admin.services.edit', $service) }}" class="me-2">Edit</a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$services" />
    @endif
@endsection

@extends('layouts.admin')

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h1 class="text-xl font-semibold">Publications</h1>
        @endslot
        @slot('right')
            <a href="{{ route('admin.publications.create') }}" class="btn btn-primary">Create Publication</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search />

    @if($publications->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($publications as $item)
                    <tr>
                        <td class="px-4 py-2">{{ $item->title }}</td>
                        <td class="px-4 py-2">{{ $item->slug }}</td>
                        <td class="px-4 py-2">{{ $item->category }}</td>
                        <td class="px-4 py-2">{{ $item->status }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('admin.publications.show', $item) }}">View</a>
                            <a href="{{ route('admin.publications.edit', $item) }}" class="ml-2">Edit</a>
                            <form action="{{ route('admin.publications.destroy', $item) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="ml-2 text-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$publications" />
    @endif
@endsection

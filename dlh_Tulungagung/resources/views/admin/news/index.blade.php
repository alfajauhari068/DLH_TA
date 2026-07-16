@extends('layouts.admin')

@section('content')
    <x-admin.crud.toolbar>
        @slot('left')
            <h1 class="text-xl font-semibold">News</h1>
        @endslot
        @slot('right')
            <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Create News</a>
        @endslot
    </x-admin.crud.toolbar>

    <x-admin.crud.search />

    @if($news->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($news as $item)
                    <tr>
                        <td class="px-4 py-2">{{ $item->title }}</td>
                        <td class="px-4 py-2">{{ $item->slug }}</td>
                        <td class="px-4 py-2">{{ ucfirst(array_search($item->status, config('cms.status')) ?: '') }}</td>
                        <td class="px-4 py-2">{{ $item->published_at?->toDateString() }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('admin.news.show', $item) }}">View</a>
                            <a href="{{ route('admin.news.edit', $item) }}" class="ml-2">Edit</a>
                            <form action="{{ route('admin.news.destroy', $item) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="ml-2 text-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$news" />
    @endif
@endsection

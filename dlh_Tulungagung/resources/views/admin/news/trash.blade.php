@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-semibold">Trashed News</h1>

    @if($news->isEmpty())
        <x-admin.crud.empty-state />
    @else
        <x-admin.crud.table>
            @slot('rows')
                @foreach($news as $item)
                    <tr>
                        <td class="px-4 py-2">{{ $item->title }}</td>
                        <td class="px-4 py-2">{{ $item->deleted_at }}</td>
                        <td class="px-4 py-2">
                            <form action="{{ route('admin.news.restore', $item->id) }}" method="POST" class="inline">
                                @csrf
                                <button class="text-green-600">Restore</button>
                            </form>
                            <form action="{{ route('admin.news.forceDelete', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">Delete Permanently</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-admin.crud.table>

        <x-admin.crud.pagination :items="$news" />
    @endif

@endsection

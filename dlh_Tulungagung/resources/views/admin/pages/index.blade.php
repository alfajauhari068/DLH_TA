@extends('layouts.admin')

@section('title', 'Pages')
@section('subtitle', 'Manage static pages for the website.')

@section('actions')
    @can('create', App\Models\Page::class)
        <x-ui.button href="{{ route('admin.pages.create') }}" variant="primary">Tambah Halaman</x-ui.button>
    @endcan
@endsection

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Pages']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <x-slot:toolbar>
            <x-ui.toolbar>
                <form action="{{ route('admin.pages.index') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search" placeholder="Cari pages..." value="{{ request('search') }}" class="form-input rounded-md border-gray-300">
                    <x-ui.button type="submit" variant="secondary">Cari</x-ui.button>
                </form>
            </x-ui.toolbar>
        </x-slot:toolbar>

        <x-ui.table :headers="['Title', 'Slug', 'Status', 'Aksi']">
            @forelse($pages as $page)
                <tr>
                    <td class="px-6 py-4">{{ $page->title }}</td>
                    <td class="px-6 py-4">{{ $page->slug }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $page->status ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $page->status ? 'Published' : 'Draft' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        @can('update', $page)
                            <a href="{{ route('admin.pages.edit', $page) }}" class="text-primary hover:underline">Edit</a>
                        @endcan
                    </td>
                </tr>
            @empty
                <x-slot:empty>
                    <div class="text-center py-8 text-gray-500">No pages found.</div>
                </x-slot:empty>
            @endforelse
        </x-ui.table>

        <x-slot:pagination>
            {{ $pages->links() }}
        </x-slot:pagination>
    </x-ui.card>
@endsection

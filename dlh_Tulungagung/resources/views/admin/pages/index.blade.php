@extends('layouts.admin')

@section('title', 'Pages')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Pages</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Pages" 
            subtitle="Manage static pages for the website." 
            actionUrl="{{ auth()->user()->can('create', App\Models\Page::class) ? route('admin.pages.create') : null }}" 
            actionText="Tambah Halaman" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.pages.index')" 
            searchPlaceholder="Search pages..." 
            :hasStatus="true"
            :statuses="['1' => 'Published', '0' => 'Draft']"
            :hasSort="true" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($pages->isEmpty())
        <x-admin.index.empty 
            title="Belum ada Halaman" 
            description="Tambahkan halaman statis baru untuk website Anda." 
            actionUrl="{{ auth()->user()->can('create', App\Models\Page::class) ? route('admin.pages.create') : null }}" 
            actionText="Tambah Halaman" 
            icon="bi-file-text" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Slug</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            @foreach($pages as $page)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $page->title }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $page->slug }}</td>
                    <td class="px-6 py-4">
                        @if($page->status)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Published</span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Draft</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('page', $page->slug) }}" target="_blank" class="text-gray-500 hover:text-gray-700 mr-3" title="View"><i class="bi bi-eye"></i></a>
                        @can('update', $page)
                            <a href="{{ route('admin.pages.edit', $page) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $pages->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

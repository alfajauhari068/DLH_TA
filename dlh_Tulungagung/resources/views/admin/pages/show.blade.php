@extends('layouts.admin')

@section('title', 'Lihat Page')
@section('subtitle', 'Lihat details of static page.')

@section('actions')
    @can('update', $page)
        <x-ui.button href="{{ route('admin.pages.edit', $page) }}" variant="primary">Ubah Halaman</x-ui.button>
    @endcan
@endsection

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Pages', 'url' => route('admin.pages.index')],
        ['label' => 'Lihat']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <div class="space-y-6">
            <div>
                <h3 class="text-lg font-medium text-gray-900">Title</h3>
                <p class="mt-1 text-gray-700">{{ $page->title }}</p>
            </div>
            
            <div>
                <h3 class="text-lg font-medium text-gray-900">Slug</h3>
                <p class="mt-1 text-gray-700">{{ $page->slug }}</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900">Status</h3>
                <p class="mt-1">
                    <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $page->status ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                        {{ $page->status ? 'Published' : 'Draft' }}
                    </span>
                </p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900">Content</h3>
                <div class="mt-2 p-4 bg-gray-50 rounded-md border border-gray-200">
                    {!! nl2br(e($page->content)) !!}
                </div>
            </div>
        </div>
    </x-ui.card>
@endsection

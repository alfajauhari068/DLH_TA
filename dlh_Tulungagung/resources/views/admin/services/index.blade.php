@extends('layouts.admin')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Services</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Services" 
            subtitle="Manage public services and support workflows." 
            actionUrl="{{ route('admin.services.create') }}" 
            actionText="Create Service" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.services.index')" 
            searchPlaceholder="Search services..." 
            :hasCategory="true"
            :hasStatus="true"
            :statuses="['published' => 'Published', 'draft' => 'Draft', 'archived' => 'Archived']"
            :hasSort="true" 
            :hasDate="true" />
    </x-slot:toolbar>

    @if($services->isEmpty())
        <x-admin.index.empty 
            title="No Services Available" 
            description="Get started by creating your first public service." 
            actionUrl="{{ route('admin.services.create') }}" 
            actionText="Create Service" 
            icon="bi-grid" />
    @else
        <x-admin.index.grid cols="lg:grid-cols-3">
            @foreach($services as $service)
                @php
                    $imageUrl = null;
                    if (!empty($service->image)) {
                        $imageUrl = asset('storage/' . $service->image);
                    } elseif (!empty($service->thumbnail)) {
                        $imageUrl = asset('storage/' . $service->thumbnail);
                    } elseif (!empty($service->icon) && str_contains($service->icon, '<svg')) {
                        $imageUrl = $service->icon;
                    }
                @endphp
                <x-admin.index.grid-card 
                    :url="route('admin.services.show', $service)" 
                    :title="$service->title" 
                    :image="$imageUrl" 
                    :status="$service->status ?? 'draft'"
                    :badge="$service->service_category ?? 'Service'"
                >
                    <x-slot:description>
                        {{ $service->description ?? 'Layanan publik untuk masyarakat.' }}
                    </x-slot:description>

                    <x-slot:meta>
                        <div class="flex items-center gap-1.5 w-full">
                            <i class="bi bi-calendar3"></i>
                            <span class="truncate">Updated: {{ isset($service->updated_at) ? \Carbon\Carbon::parse($service->updated_at)->format('M d, Y') : '-' }}</span>
                        </div>
                    </x-slot:meta>

                    <x-slot:actions>
                        <div class="flex items-center gap-1 w-full">
                            <a href="{{ route('admin.services.show', $service) }}" class="flex-1 flex justify-center items-center py-2 bg-gray-50 text-gray-700 text-sm font-semibold rounded-lg hover:bg-gray-200 transition-colors tooltip relative z-20" title="View">
                                <i class="bi bi-eye mr-1"></i> View
                            </a>
                            <a href="{{ route('admin.services.edit', $service) }}" class="flex-1 flex justify-center items-center py-2 bg-blue-50 text-blue-700 text-sm font-semibold rounded-lg hover:bg-blue-100 transition-colors tooltip relative z-20" title="Edit">
                                <i class="bi bi-pencil-square mr-1"></i> Edit
                            </a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline relative z-20" onsubmit="return confirm('Delete this service?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex justify-center items-center py-2 px-3 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors tooltip" title="Delete">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                    </x-slot:actions>
                </x-admin.index.grid-card>
            @endforeach
        </x-admin.index.grid>

        <x-slot:pagination>
            {{ $services->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

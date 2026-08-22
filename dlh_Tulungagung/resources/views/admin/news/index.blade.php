@extends('layouts.admin')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">News</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="News Management" 
            subtitle="Manage, publish and organize website news." 
            actionUrl="{{ route('admin.news.create') }}" 
            actionText="Create Article" />
    </x-slot:header>

    <x-slot:stats>
        <x-admin.index.stat-card title="Total Articles" value="{{ $news->total() ?? 0 }}" icon="bi-file-earmark-text" color="blue" trend="+12" trendText="from last month" />
        <x-admin.index.stat-card title="Published" value="{{ $publishedCount ?? 0 }}" icon="bi-check-circle" color="green" trend="+5" trendText="from last month" />
        <x-admin.index.stat-card title="Draft" value="{{ $draftCount ?? 0 }}" icon="bi-pencil-square" color="yellow" trendText="No change" />
        <x-admin.index.stat-card title="Featured" value="{{ $featuredCount ?? 0 }}" icon="bi-star" color="purple" trendText="Top Highlights" />
    </x-slot:stats>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.news.index')" 
            searchPlaceholder="Search article..." 
            :hasCategory="true"
            :hasStatus="true"
            :statuses="['published' => 'Published', 'draft' => 'Draft', 'archived' => 'Archived']"
            :hasSort="true" 
            :hasDate="true" />
    </x-slot:toolbar>

    @if($news->isEmpty())
        <x-admin.index.empty 
            title="No News Available" 
            description="Get started by creating your first article to share updates and news with your audience." 
            actionUrl="{{ route('admin.news.create') }}" 
            actionText="Create First Article" 
            icon="bi-journal-x" />
    @else
        <x-admin.index.grid cols="lg:grid-cols-3">
            @foreach($news as $item)
                @php
                    $statusStr = array_search($item->status, config('cms.status') ?? []) ?: ($item->status ?? 'draft');
                    $imageUrl = null;
                    if (!empty($item->thumbnail)) {
                        $imageUrl = asset('storage/' . $item->thumbnail);
                    } elseif (!empty($item->featured_image)) {
                        $imageUrl = asset('storage/' . $item->featured_image);
                    } elseif (!empty($item->image)) {
                        $imageUrl = asset('storage/' . $item->image);
                    }
                @endphp
                <x-admin.index.grid-card 
                    :url="route('admin.news.show', $item)" 
                    :title="$item->title" 
                    :image="$imageUrl" 
                    :status="$statusStr" 
                    :badge="$item->category->name ?? 'Uncategorized'"
                >
                    <x-slot:description>
                        {{ $item->excerpt ?? 'No description available for this article.' }}
                    </x-slot:description>

                    <x-slot:meta>
                        <div class="flex items-center gap-1.5 w-1/2">
                            <i class="bi bi-person-circle"></i>
                            <span class="truncate">{{ $item->author?->name ?? 'Admin' }}</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-right w-1/2 justify-end">
                            <i class="bi bi-calendar3"></i>
                            <span>{{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('M d, Y') : '-' }}</span>
                        </div>
                    </x-slot:meta>

                    <x-slot:actions>
                        <div class="flex items-center gap-1">
                            <a href="{{ route('admin.news.show', $item) }}" class="p-2 text-gray-500 hover:text-green-600 hover:bg-green-50 rounded-lg transition-colors tooltip relative z-20" title="View">
                                <i class="bi bi-eye text-lg"></i>
                            </a>
                            <a href="{{ route('admin.news.edit', $item) }}" class="p-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors tooltip relative z-20" title="Edit">
                                <i class="bi bi-pencil-square text-lg"></i>
                            </a>
                        </div>
                        
                        <div class="flex items-center gap-1">
                            <form action="{{ route('admin.news.destroy', $item) }}" method="POST" class="inline relative z-20" onsubmit="return confirm('Delete this article?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-gray-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors tooltip" title="Delete">
                                    <i class="bi bi-trash3 text-lg"></i>
                                </button>
                            </form>
                        </div>
                    </x-slot:actions>
                </x-admin.index.grid-card>
            @endforeach
        </x-admin.index.grid>

        <x-slot:pagination>
            {{ $news->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

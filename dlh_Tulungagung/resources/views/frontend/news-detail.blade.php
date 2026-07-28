@extends('layouts.app')

@section('title', $newsItem->title . ' | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        :title="$newsItem->title" 
        :breadcrumbs="[['url' => url('/berita'), 'label' => 'Berita'], ['label' => Str::limit($newsItem->title, 30)]]"
        :badge="$newsItem->category?->name ?? 'Berita'"
        :background="$newsItem->thumbnail ? Storage::url($newsItem->thumbnail) : null"
    />

    <x-guest.information-strip 
        :items="[
            ['label' => 'Tanggal Publish', 'value' => $newsItem->published_at ? \Carbon\Carbon::parse($newsItem->published_at)->translatedFormat('d F Y') : '-', 'icon' => 'bi-calendar3'],
            ['label' => 'Kategori', 'value' => $newsItem->category?->name ?? 'Berita Umum', 'icon' => 'bi-folder'],
            ['label' => 'Penulis', 'value' => $newsItem->author?->name ?? 'Admin', 'icon' => 'bi-person'],
            ['label' => 'Dilihat', 'value' => $newsItem->views_count ?? 0 . ' Kali', 'icon' => 'bi-eye'],
        ]"
    />

    <x-guest.page-container>
        <x-guest.page-layout>
            <x-slot name="main">
                <x-guest.content-card>
                    {!! $newsItem->content !!}
                </x-guest.content-card>

                <div class="mt-8 border-t border-gray-100 pt-8 flex items-center justify-between">
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <i class="bi bi-tags"></i>
                        <span>Tags:</span>
                        <!-- Tags could go here -->
                        <span class="px-3 py-1 bg-gray-50 rounded-full text-xs border border-gray-100">{{ $newsItem->category?->name ?? 'Umum' }}</span>
                    </div>
                    
                    <x-guest.share-buttons :title="$newsItem->title" />
                </div>
            </x-slot>

            <x-slot name="sidebar">
                <x-guest.sidebar-card title="Bagikan Artikel" icon="bi-share">
                    <x-guest.share-buttons :title="$newsItem->title" />
                </x-guest.sidebar-card>

                @if($newsItem->author)
                    <x-guest.sidebar-card title="Penulis" icon="bi-person-badge">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 text-xl shrink-0">
                                <i class="bi bi-person"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">{{ $newsItem->author->name }}</h4>
                                <p class="text-sm text-gray-500">Administrator</p>
                            </div>
                        </div>
                    </x-guest.sidebar-card>
                @endif
            </x-slot>
        </x-guest.page-layout>

        <!-- Related News -->
        @php
            $related = \App\Models\News::where('category_id', $newsItem->category_id)
                ->where('id', '!=', $newsItem->id)
                ->where('status', 'published')
                ->latest('published_at')
                ->take(3)
                ->get();
        @endphp

        @if($related->isNotEmpty())
            <x-guest.related-section>
                <x-slot name="header">
                    <x-guest.section-header title="Berita Terkait" icon="bi-newspaper" :action="['url' => route('news'), 'label' => 'Lihat Semua']" />
                </x-slot>
                
                @foreach($related as $item)
                    <x-guest.related-card 
                        :url="route('news.detail', $item->slug)"
                        :title="$item->title"
                        :summary="$item->summary"
                        :thumbnail="$item->thumbnail ? Storage::url($item->thumbnail) : null"
                        :badge="$item->category?->name ?? 'Berita'"
                        :date="$item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d M Y') : null"
                        :author="$item->author?->name"
                        fallbackIcon="bi-newspaper"
                    />
                @endforeach
            </x-guest.related-section>
        @endif

    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Dapatkan Informasi Lingkungan Lainnya" 
        subtitle="Lihat galeri, dokumen publik, dan layanan kami." 
        :primaryAction="['url' => route('services'), 'label' => 'Layanan Publik', 'icon' => 'bi-card-list']" 
    />
@endsection

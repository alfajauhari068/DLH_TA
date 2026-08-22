@extends('layouts.app')

@section('title', 'Berita | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Berita & Informasi" 
        subtitle="Temukan informasi dan kegiatan terbaru dari Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Berita']]"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            @if($news->isEmpty())
                <x-guest.empty-state 
                    icon="bi-newspaper" 
                    title="Belum Ada Berita" 
                    description="Saat ini belum ada berita atau informasi terbaru yang diterbitkan." 
                />
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($news as $item)
                        <x-guest.related-card 
                            :url="route('news.detail', $item->slug)"
                            :title="$item->title"
                            :summary="$item->summary"
                            :thumbnail="$item->image_url"
                            :badge="$item->category?->name ?? 'Berita'"
                            :date="$item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d M Y') : null"
                            :author="$item->author?->name"
                            fallbackIcon="bi-newspaper"
                        />
                    @endforeach
                </div>

                <div class="mt-12 flex justify-center">
                    {{ $news->links('pagination::tailwind') }}
                </div>
            @endif
        </x-guest.page-layout>
    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Ingin Tahu Lebih Banyak?" 
        subtitle="Jelajahi seluruh program dan kegiatan perlindungan lingkungan di Tulungagung." 
        :primaryAction="['url' => route('publications'), 'label' => 'Lihat Publikasi', 'icon' => 'bi-journal-text']" 
    />
@endsection

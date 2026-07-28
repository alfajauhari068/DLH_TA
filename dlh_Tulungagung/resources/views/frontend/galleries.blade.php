@extends('layouts.app')

@section('title', 'Galeri | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Galeri Kegiatan" 
        subtitle="Kumpulan dokumentasi foto dan kegiatan dari Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Galeri']]"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                @if($galleries->isEmpty())
                    <x-guest.empty-state 
                        icon="bi-images" 
                        title="Belum Ada Galeri" 
                        description="Saat ini belum ada album galeri yang dipublikasikan." 
                    />
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @foreach($galleries as $item)
                            <x-guest.related-card 
                                :url="route('galleries.detail', $item->slug)"
                                :title="$item->name"
                                :summary="$item->description"
                                :thumbnail="$item->thumbnail ? Storage::url($item->thumbnail) : null"
                                badge="Album Galeri"
                                fallbackIcon="bi-images"
                            />
                        @endforeach
                    </div>

                    <div class="mt-12 flex justify-center">
                        {{ $galleries->links('pagination::tailwind') }}
                    </div>
                @endif
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Cari Informasi Lainnya?" 
        subtitle="Temukan informasi terbaru dan dokumentasi lengkap di website kami." 
        :primaryAction="['url' => route('news'), 'label' => 'Berita Terbaru', 'icon' => 'bi-newspaper']" 
    />
@endsection

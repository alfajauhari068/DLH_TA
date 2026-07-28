@extends('layouts.app')

@section('title', $gallery->name . ' - Galeri | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        :title="$gallery->name" 
        :subtitle="$gallery->description ?? 'Dokumentasi kegiatan'" 
        :breadcrumbs="[['label' => 'Galeri', 'url' => route('galleries')], ['label' => $gallery->name]]"
        :background="$gallery->thumbnail ? Storage::url($gallery->thumbnail) : null"
        badge="Album Galeri"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                @if($gallery->items->isEmpty())
                    <x-guest.empty-state 
                        icon="bi-images" 
                        title="Belum Ada Foto" 
                        description="Galeri ini belum memiliki dokumentasi foto di dalamnya." 
                        :primaryAction="['url' => route('galleries'), 'label' => 'Kembali ke Galeri']"
                    />
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach($gallery->items as $item)
                            <x-guest.image-card 
                                :src="Storage::url($item->image)"
                                :alt="$item->caption ?? 'Gallery Image'"
                                :caption="$item->caption"
                                aspect="aspect-square"
                            />
                        @endforeach
                    </div>
                @endif
                
                <div class="mt-12 border-t border-gray-100 pt-8 flex flex-col md:flex-row items-center justify-between gap-6">
                    <x-guest.button :href="route('galleries')" variant="outline" icon="bi-arrow-left">
                        Kembali ke Galeri
                    </x-guest.button>
                    
                    <x-guest.share-buttons :title="$gallery->name" />
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>
@endsection

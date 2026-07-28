@extends('layouts.app')

@section('title', 'Publikasi | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Publikasi" 
        subtitle="Daftar publikasi dan dokumen resmi dari Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Publikasi']]"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            @if($publications->isEmpty())
                <x-guest.empty-state 
                    icon="bi-journal-text" 
                    title="Belum Ada Publikasi" 
                    description="Saat ini belum ada dokumen publikasi yang tersedia." 
                />
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($publications as $item)
                        @php
                            $imageUrl = null;
                            $isValidPath = function($path) {
                                return !empty($path) && !str_contains($path, '.tmp') && !str_contains($path, 'php');
                            };
                            if ($isValidPath($item->cover_file)) $imageUrl = Storage::url($item->cover_file);
                            elseif ($isValidPath($item->thumbnail)) $imageUrl = Storage::url($item->thumbnail);
                            elseif ($isValidPath($item->cover_image)) $imageUrl = Storage::url($item->cover_image);
                        @endphp
                        
                        <x-guest.related-card 
                            :url="route('publications.detail', $item->slug)"
                            :title="$item->title"
                            :summary="$item->summary"
                            :thumbnail="$imageUrl"
                            :badge="$item->category ?? 'Publikasi'"
                            :date="$item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d M Y') : null"
                            :author="$item->author?->name ?? 'Admin'"
                            fallbackIcon="bi-journal-text"
                        />
                    @endforeach
                </div>

                <div class="mt-12 flex justify-center">
                    {{ $publications->links('pagination::tailwind') }}
                </div>
            @endif
        </x-guest.page-layout>
    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Cari Dokumen Lainnya?" 
        subtitle="Lihat dokumen regulasi, panduan, dan kebijakan lingkungan hidup." 
        :primaryAction="['url' => route('documents'), 'label' => 'Lihat Dokumen', 'icon' => 'bi-folder2-open']" 
    />
@endsection

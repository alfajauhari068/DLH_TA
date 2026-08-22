@extends('layouts.app')

@section('title', $publication->title . ' | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        :title="$publication->title"
        :breadcrumbs="[
            ['label' => 'Publikasi', 'url' => route('publications')],
            ['label' => Str::limit($publication->title, 30)]
        ]"
        :badge="$publication->category ?? 'Publikasi'"
    />

    <x-guest.information-strip 
        :items="[
            ['label' => 'Kategori', 'value' => $publication->category ?? 'Dokumen Umum', 'icon' => 'bi-folder2-open'],
            ['label' => 'Tanggal Publish', 'value' => $publication->published_at ? \Carbon\Carbon::parse($publication->published_at)->format('d M Y') : '-', 'icon' => 'bi-calendar3'],
            ['label' => 'Diupload Oleh', 'value' => $publication->author?->name ?? 'Admin', 'icon' => 'bi-person'],
            ['label' => 'Tipe Dokumen', 'value' => 'PDF', 'icon' => 'bi-filetype-pdf'],
        ]"
    />

    <x-guest.page-container>
        <x-guest.page-layout>
            <x-slot name="main">
                <x-guest.content-card>
                    @if($publication->summary)
                        <div class="lead mb-8 text-xl text-gray-600 font-medium border-l-4 border-primary-green pl-4 py-1">
                            {{ $publication->summary }}
                        </div>
                    @endif
                    
                    {!! $publication->content !!}
                </x-guest.content-card>

                @if($publication->document_file && !str_contains($publication->document_file, '.tmp') && !str_contains($publication->document_file, 'php'))
                    <div class="mt-8">
                        <x-guest.section-header title="Unduh Dokumen" icon="bi-cloud-arrow-down" />
                        <x-guest.download-card 
                            :title="$publication->title"
                            :downloadUrl="Storage::url($publication->document_file)"
                            :previewUrl="Storage::url($publication->document_file)"
                        />
                    </div>
                @endif

                <div class="mt-8 border-t border-gray-100 pt-8 flex items-center justify-end">
                    <x-guest.share-buttons :title="$publication->title" />
                </div>
            </x-slot>

            <x-slot name="sidebar">
                @php
                    $imageUrl = null;
                    $isValidPath = function($path) {
                        return !empty($path) && !str_contains($path, '.tmp') && !str_contains($path, 'php');
                    };
                    if ($isValidPath($publication->cover_file)) {
                        $imageUrl = Storage::url($publication->cover_file);
                    } elseif ($isValidPath($publication->thumbnail)) {
                        $imageUrl = Storage::url($publication->thumbnail);
                    } elseif ($isValidPath($publication->cover_image)) {
                        $imageUrl = Storage::url($publication->cover_image);
                    }
                @endphp

                @if($imageUrl)
                    <x-guest.sidebar-card title="Sampul Dokumen" icon="bi-image">
                        <x-guest.image-card :src="$imageUrl" :alt="$publication->title" aspect="aspect-[3/4]" />
                    </x-guest.sidebar-card>
                @endif

                @if($publication->document_file && !str_contains($publication->document_file, '.tmp') && !str_contains($publication->document_file, 'php'))
                    <x-guest.sidebar-card title="Pratinjau Mini" icon="bi-file-earmark-text">
                        <div class="rounded-xl overflow-hidden border border-gray-200 bg-surface-green h-[400px]">
                            <iframe src="{{ Storage::url($publication->document_file) }}#toolbar=0&navpanes=0&scrollbar=0" class="w-full h-full" title="PDF Preview"></iframe>
                        </div>
                    </x-guest.sidebar-card>
                @endif
                
                <x-guest.sidebar-card title="Bagikan" icon="bi-share">
                    <x-guest.share-buttons :title="$publication->title" />
                </x-guest.sidebar-card>
            </x-slot>
        </x-guest.page-layout>

        @if(isset($related) && $related->isNotEmpty())
            <x-guest.related-section>
                <x-slot name="header">
                    <x-guest.section-header title="Publikasi Terkait" icon="bi-journals" :action="['url' => route('publications'), 'label' => 'Lihat Semua']" />
                </x-slot>
                
                @foreach($related as $item)
                    @php
                        $relImageUrl = null;
                        if ($isValidPath($item->cover_file)) $relImageUrl = Storage::url($item->cover_file);
                        elseif ($isValidPath($item->thumbnail)) $relImageUrl = Storage::url($item->thumbnail);
                        elseif ($isValidPath($item->cover_image)) $relImageUrl = Storage::url($item->cover_image);
                    @endphp
                    <x-guest.related-card 
                        :url="route('publications.detail', $item->slug)"
                        :title="$item->title"
                        :summary="$item->summary"
                        :thumbnail="$relImageUrl"
                        :badge="$item->category ?? 'Publikasi'"
                        :date="$item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d M Y') : null"
                        :author="$item->author?->name ?? 'Admin'"
                        fallbackIcon="bi-journal-text"
                    />
                @endforeach
            </x-guest.related-section>
        @endif

    </x-guest.page-container>
@endsection

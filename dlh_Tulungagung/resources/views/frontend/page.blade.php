@extends('layouts.app')

@section('title', $page->title . ' | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        :title="$page->title" 
        :breadcrumbs="[['label' => $page->title]]"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                <x-guest.content-card>
                    {!! $page->content !!}
                </x-guest.content-card>
                
                <div class="mt-8 border-t border-gray-100 pt-8 flex items-center justify-end">
                    <x-guest.share-buttons :title="$page->title" />
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Dapatkan Informasi Lainnya" 
        subtitle="Jelajahi berbagai program, layanan publik, dan berita terbaru kami." 
        :primaryAction="['url' => route('services'), 'label' => 'Layanan Publik', 'icon' => 'bi-card-list']" 
    />
@endsection

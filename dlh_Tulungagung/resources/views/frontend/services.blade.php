@extends('layouts.app')

@section('title', 'Layanan Publik | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Layanan Publik" 
        subtitle="Temukan berbagai layanan dan informasi publik yang disediakan oleh Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Layanan Publik']]"
        badge="Layanan"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                @if($services->isEmpty())
                    <x-guest.empty-state 
                        icon="bi-journal-check" 
                        title="Belum Ada Layanan" 
                        description="Saat ini belum ada data layanan publik yang dipublikasikan." 
                    />
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($services as $service)
                            <x-guest.related-card 
                                :url="$service->slug ? route('services.detail', $service->slug) : '#'"
                                :title="$service->title"
                                :summary="$service->summary ?? Str::limit(strip_tags($service->description), 120)"
                                :thumbnail="$service->thumbnail ? Storage::url($service->thumbnail) : null"
                                badge="Layanan"
                                fallbackIcon="{{ $service->icon && !Str::contains($service->icon, ['.jpg', '.jpeg', '.png', '.webp', '.svg', '.gif']) ? $service->icon : 'bi-tools' }}"
                            />
                        @endforeach
                    </div>
                @endif
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Punya Pertanyaan Seputar Layanan?" 
        subtitle="Jangan ragu untuk menghubungi kami jika Anda membutuhkan bantuan lebih lanjut." 
        :primaryAction="['url' => route('contact'), 'label' => 'Hubungi Kami', 'icon' => 'bi-headset']" 
    />
@endsection

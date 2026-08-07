@extends('layouts.app')

@section('title', 'Jadwal Agenda | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Jadwal Agenda Kegiatan" 
        subtitle="Jadwal kegiatan operasional, penyuluhan, dan program lingkungan hidup." 
        :breadcrumbs="[['label' => 'Agenda']]"
        badge="Agenda"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                <div class="max-w-4xl mx-auto space-y-6">
                    @if($agendas->isEmpty())
                        <x-guest.empty-state 
                            icon="bi-calendar-x" 
                            title="Belum Ada Agenda" 
                            description="Tidak ada agenda kegiatan yang dipublikasikan saat ini." 
                        />
                    @else
                        @foreach($agendas as $agenda)
                            <div class="bg-white/90 backdrop-blur-xl border border-white/50 soft-shadow rounded-[24px] overflow-hidden group hover-lift transition-all duration-300">
                                <div class="flex flex-col md:flex-row">
                                    <div class="md:w-48 bg-light-green/30 flex flex-col justify-center items-center p-6 text-center border-b md:border-b-0 md:border-r border-primary-green/20">
                                        <span class="block text-primary-green font-black text-5xl mb-1">{{ \Carbon\Carbon::parse($agenda->start_date)->format('d') }}</span>
                                        <span class="block text-primary-dark uppercase font-bold tracking-widest text-sm">{{ \Carbon\Carbon::parse($agenda->start_date)->translatedFormat('M Y') }}</span>
                                        
                                        @if(\Carbon\Carbon::parse($agenda->end_date)->gt(\Carbon\Carbon::parse($agenda->start_date)))
                                            <span class="mt-3 px-3 py-1 bg-light-green text-primary-dark rounded-full text-xs font-bold whitespace-nowrap border border-primary-green/20">
                                                s/d {{ \Carbon\Carbon::parse($agenda->end_date)->format('d M') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="p-6 md:p-8 flex-1 flex flex-col justify-center">
                                        <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4 mb-4">
                                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-green transition-colors">{{ $agenda->title }}</h3>
                                            
                                            <div class="shrink-0">
                                                @if(\Carbon\Carbon::now()->lt(\Carbon\Carbon::parse($agenda->start_date)))
                                                    <x-guest.badge label="Mendatang" color="yellow" />
                                                @elseif(\Carbon\Carbon::now()->between(\Carbon\Carbon::parse($agenda->start_date), \Carbon\Carbon::parse($agenda->end_date)->endOfDay()))
                                                    <x-guest.badge label="Berlangsung" color="green" />
                                                @else
                                                    <x-guest.badge label="Selesai" color="gray" />
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <p class="text-gray-500 mb-6 leading-relaxed">{{ $agenda->description ?? 'Deskripsi tidak tersedia.' }}</p>
                                        
                                        <div class="flex flex-wrap gap-6 mt-auto border-t border-gray-50 pt-4">
                                            @if($agenda->location)
                                                <div class="flex items-center gap-2 text-sm text-gray-600 font-medium">
                                                    <i class="bi bi-geo-alt-fill text-red-500 text-lg"></i>
                                                    {{ $agenda->location }}
                                                </div>
                                            @endif
                                            
                                            @if($agenda->organizer)
                                                <div class="flex items-center gap-2 text-sm text-gray-600 font-medium">
                                                    <i class="bi bi-people-fill text-blue-500 text-lg"></i>
                                                    {{ $agenda->organizer }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="mt-12 flex justify-center">
                    {{ $agendas->links('pagination::tailwind') }}
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Lihat Berita Terbaru" 
        subtitle="Dapatkan informasi dan dokumentasi kegiatan terbaru dari DLH Tulungagung." 
        :primaryAction="['url' => route('news'), 'label' => 'Berita & Artikel', 'icon' => 'bi-newspaper']" 
    />
@endsection

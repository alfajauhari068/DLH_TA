@extends('layouts.app')

@section('title', $service->title . ' | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        :title="$service->title" 
        :subtitle="$service->summary ?? 'Detail informasi layanan publik'" 
        :breadcrumbs="[
            ['label' => 'Layanan', 'url' => route('services')],
            ['label' => $service->title]
        ]"
        :background="$service->banner ? Storage::url($service->banner) : null"
        badge="Layanan Publik"
    />

    <x-guest.page-container>
        <x-guest.page-layout>
            <x-slot name="main">
                @if($service->thumbnail)
                    <div class="mb-8 rounded-2xl overflow-hidden border border-gray-100 shadow-sm aspect-video">
                        <img src="{{ Storage::url($service->thumbnail) }}" alt="{{ $service->title }}" class="w-full h-full object-cover">
                    </div>
                @endif

                <x-guest.content-card>
                    <x-guest.section-header title="Deskripsi Layanan" icon="bi-info-circle" />
                    {!! $service->description !!}
                </x-guest.content-card>

                @if($service->requirements)
                    <div class="mt-8">
                        <x-guest.content-card>
                            <x-guest.section-header title="Persyaratan" icon="bi-card-checklist" />
                            {!! $service->requirements !!}
                        </x-guest.content-card>
                    </div>
                @endif

                @if($service->workflow)
                    <div class="mt-8">
                        <x-guest.content-card>
                            <x-guest.section-header title="Alur & Prosedur" icon="bi-diagram-3" />
                            {!! $service->workflow !!}
                        </x-guest.content-card>
                    </div>
                @endif
                
                <div class="mt-8 border-t border-gray-100 pt-8 flex items-center justify-end">
                    <x-guest.share-buttons :title="$service->title" />
                </div>
            </x-slot>

            <x-slot name="sidebar">
                <x-guest.sidebar-card title="Informasi Layanan" icon="bi-info-square">
                    <ul class="space-y-4">
                        @if($service->service_type)
                            <li class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                                    <i class="bi bi-tag"></i>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wider">Tipe Layanan</span>
                                    <span class="text-sm font-semibold text-gray-900">{{ $service->service_type }}</span>
                                </div>
                            </li>
                        @endif

                        @if($service->estimated_time)
                            <li class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-full bg-yellow-50 text-yellow-600 flex items-center justify-center shrink-0">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wider">Estimasi Waktu</span>
                                    <span class="text-sm font-semibold text-gray-900">{{ $service->estimated_time }}</span>
                                </div>
                            </li>
                        @endif

                        @if($service->service_fee)
                            <li class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                    <i class="bi bi-wallet2"></i>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wider">Biaya / Tarif</span>
                                    <span class="text-sm font-semibold text-gray-900">{{ $service->service_fee }}</span>
                                </div>
                            </li>
                        @endif

                        @if($service->contact_person || $service->contact_phone)
                            <li class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center shrink-0">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wider">Narahubung</span>
                                    <span class="text-sm font-semibold text-gray-900">{{ $service->contact_person ?? 'Petugas Layanan' }}</span>
                                    @if($service->contact_phone)
                                        <span class="block text-sm text-gray-600">{{ $service->contact_phone }}</span>
                                    @endif
                                    @if($service->contact_email)
                                        <span class="block text-sm text-gray-600">{{ $service->contact_email }}</span>
                                    @endif
                                </div>
                            </li>
                        @endif

                        @if($service->office_location)
                            <li class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-full bg-red-50 text-red-600 flex items-center justify-center shrink-0">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wider">Lokasi Pelayanan</span>
                                    <span class="text-sm font-semibold text-gray-900">{{ $service->office_location }}</span>
                                </div>
                            </li>
                        @endif
                        
                        @if($service->office_hours)
                            <li class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wider">Jam Pelayanan</span>
                                    <span class="text-sm font-semibold text-gray-900">{{ $service->office_hours }}</span>
                                </div>
                            </li>
                        @endif
                    </ul>
                </x-guest.sidebar-card>
                
                <x-guest.sidebar-card title="Bagikan Layanan" icon="bi-share">
                    <x-guest.share-buttons :title="$service->title" />
                </x-guest.sidebar-card>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>
@endsection

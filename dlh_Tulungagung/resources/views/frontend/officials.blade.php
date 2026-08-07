@extends('layouts.app')

@section('title', 'Profil Pejabat | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Profil Pejabat" 
        subtitle="Mengenal susunan pejabat dan struktur kepengurusan Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Profil Pejabat']]"
        badge="Daftar Pejabat"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                <div class="max-w-5xl mx-auto space-y-16">
                    <div class="flex justify-end mb-6">
                        <a href="{{ route('organization-structure') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm rounded-full shadow transition-all duration-300">
                            <i class="bi bi-diagram-3"></i>
                            Lihat Bagan Struktur Organisasi
                        </a>
                    </div>
                    @if($departments->isEmpty())
                        <x-guest.empty-state 
                            icon="bi-diagram-3" 
                            title="Struktur Belum Tersedia" 
                            description="Data struktur organisasi instansi sedang dalam proses pembaruan." 
                        />
                    @else
                        @foreach($departments as $department)
                            <div class="space-y-8">
                                <div class="text-center max-w-3xl mx-auto">
                                    <h2 class="text-3xl font-bold text-gray-900 inline-block relative pb-3">
                                        {{ $department->name }}
                                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 h-1 bg-primary-green rounded-full"></span>
                                    </h2>
                                    @if($department->description)
                                        <p class="text-gray-500 mt-4 leading-relaxed">{{ $department->description }}</p>
                                    @endif
                                </div>

                                <!-- Pejabat pada Departemen Utama -->
                                @if($department->officials->count() > 0)
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">
                                        @foreach($department->officials as $official)
                                            <div class="bg-white/90 backdrop-blur-xl rounded-3xl p-8 border border-white/50 soft-shadow hover-lift transition-all duration-300 text-center group">
                                                <div class="w-32 h-32 mx-auto rounded-full overflow-hidden mb-6 border-4 border-light-green shadow-inner">
                                                    <img src="{{ $official->photo ? asset('storage/' . $official->photo) : asset('images/default-avatar.png') }}" 
                                                         alt="{{ $official->name }}" 
                                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" 
                                                         onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($official->name) }}&background=059669&color=fff'">
                                                </div>
                                                <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $official->name }}</h3>
                                                <span class="block text-primary-green font-semibold text-sm mb-4">{{ $official->positionRelation->name ?? 'Pejabat' }}</span>
                                                
                                                <div class="pt-4 border-t border-gray-50 flex flex-col gap-2 text-sm text-gray-500">
                                                    @if($official->email)
                                                        <div class="flex items-center justify-center gap-2"><i class="bi bi-envelope"></i> {{ $official->email }}</div>
                                                    @endif
                                                    @if($official->phone)
                                                        <div class="flex items-center justify-center gap-2"><i class="bi bi-telephone"></i> {{ $official->phone }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                <!-- Sub-departemen / Seksi -->
                                @if($department->children->count() > 0)
                                    <div class="space-y-6 mt-12">
                                        @foreach($department->children as $child)
                                            <div class="bg-white/90 backdrop-blur-xl rounded-2xl p-6 md:p-8 border border-primary-green/20 soft-shadow">
                                                <h4 class="text-xl font-bold text-gray-900 mb-6 pl-4 border-l-4 border-primary-green">{{ $child->name }}</h4>
                                                
                                                @if($child->officials->count() > 0)
                                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                                        @foreach($child->officials as $official)
                                                            <div class="flex items-center gap-4 p-4 bg-white soft-shadow rounded-xl hover:bg-light-green/20 transition-colors border border-gray-100 hover:border-primary-green/20">
                                                                <div class="w-16 h-16 rounded-full overflow-hidden shrink-0 shadow-sm border-2 border-white">
                                                                    <img src="{{ $official->photo ? asset('storage/' . $official->photo) : asset('images/default-avatar.png') }}" 
                                                                         alt="{{ $official->name }}" 
                                                                         class="w-full h-full object-cover" 
                                                                         onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($official->name) }}&background=059669&color=fff'">
                                                                </div>
                                                                <div>
                                                                    <h5 class="font-bold text-gray-900 mb-0.5 text-sm">{{ $official->name }}</h5>
                                                                    <span class="text-primary-green font-semibold text-xs">{{ $official->positionRelation->name ?? 'Staf' }}</span>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <p class="text-gray-500 text-sm italic">Belum ada pejabat yang ditugaskan pada sub-bidang ini.</p>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endif
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>
@endsection

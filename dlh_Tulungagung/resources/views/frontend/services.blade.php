@extends('layouts.app')

@section('title', 'Layanan | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Layanan Instansi" 
        subtitle="Temukan berbagai layanan publik yang disediakan oleh Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Layanan']]"
    />

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($services as $service)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group flex flex-col h-full">
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="w-16 h-16 bg-primary/10 text-primary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i class="bi bi-{{ $service->icon ?? 'tools' }} text-3xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-primary transition-colors">{{ $service->title }}</h3>
                            <p class="text-gray-600 mb-6 flex-1">{{ Str::limit($service->description, 120) }}</p>
                            
                            @if($service->link)
                                <a href="{{ $service->link }}" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-primary-dark transition-colors mt-auto">
                                    Akses Layanan
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            @else
                                <span class="inline-flex items-center gap-2 text-gray-400 font-semibold mt-auto">
                                    Info di Kantor
                                </span>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <div class="w-20 h-20 bg-gray-50 text-gray-400 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="bi bi-info-circle text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Layanan</h3>
                        <p class="text-gray-500">Saat ini belum ada data layanan yang dipublikasikan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

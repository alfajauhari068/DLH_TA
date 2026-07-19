@extends('layouts.app')

@section('title', 'Layanan | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Layanan Instansi" 
        subtitle="Temukan berbagai layanan publik yang disediakan oleh Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Layanan']]"
    />

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-4 justify-content-center">
                @forelse($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 group transition-all hover-lift overflow-hidden">
                            @if($service->thumbnail)
                                <img src="{{ asset('storage/' . $service->thumbnail) }}" class="card-img-top object-fit-cover group-hover-scale transition-all" style="height: 200px;" alt="{{ $service->title }}">
                            @endif
                            <div class="card-body p-4 p-xl-5 d-flex flex-column">
                                <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center mb-4 group-hover-scale transition-all" style="width: 64px; height: 64px;">
                                    @if($service->icon && Str::contains($service->icon, ['.jpg', '.jpeg', '.png', '.webp', '.svg', '.gif']))
                                        <img src="{{ asset('storage/' . $service->icon) }}" class="rounded-circle" style="width: 32px; height: 32px; object-fit: contain;" alt="Icon">
                                    @else
                                        <i class="bi bi-{{ $service->icon ?? 'tools' }} fs-3"></i>
                                    @endif
                                </div>
                                <h3 class="h4 fw-bold text-dark mb-3 group-hover-text-success transition-all">{{ $service->title }}</h3>
                                <p class="text-muted mb-4 flex-grow-1">{{ $service->summary ?? Str::limit(strip_tags($service->description), 120) }}</p>
                                
                                @if($service->slug)
                                    <a href="{{ route('services.detail', $service->slug) }}" class="text-success fw-bold text-decoration-none d-flex align-items-center gap-2 group-hover-translate-x transition-all mt-auto">
                                        Selengkapnya
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                @else
                                    <span class="text-muted fw-semibold mt-auto d-flex align-items-center gap-2">
                                        <i class="bi bi-info-circle"></i> Info di Kantor
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center text-muted shadow-sm mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-info-circle fs-1"></i>
                        </div>
                        <h3 class="h4 fw-bold text-dark mb-2">Belum Ada Layanan</h3>
                        <p class="text-muted">Saat ini belum ada data layanan yang dipublikasikan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <style>
        .transition-all { transition: all 0.4s ease; }
        .hover-lift:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(0,0,0,0.08) !important; }
        .group:hover .group-hover-scale { transform: scale(1.1); }
        .group:hover .group-hover-translate-x { transform: translateX(5px); }
        .group:hover .group-hover-text-success { color: var(--bs-success) !important; }
    </style>
@endsection

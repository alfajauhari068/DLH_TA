@extends('layouts.admin')

@section('title', 'Detail Layanan')
@section('subtitle', 'Lihat informasi lengkap tentang layanan publik.')

@section('actions')
    <a href="{{ route('services.detail', $service->slug) }}" target="_blank" class="btn btn-outline-primary btn-sm me-2">
        <i class="bi bi-box-arrow-up-right me-1"></i> Pratinjau Publik
    </a>
    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-primary btn-sm">
        <i class="bi bi-pencil me-1"></i> Ubah Layanan
    </a>
@endsection

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Layanan Publik</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lihat Detail</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4 p-xl-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <h3 class="h4 fw-bold text-dark mb-4 border-bottom pb-3">Informasi Utama</h3>
                    
                    <div class="mb-4">
                        <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Judul Layanan</label>
                        <p class="fs-5 text-dark">{{ $service->title }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Ringkasan</label>
                        <p class="text-dark">{{ $service->summary ?: '-' }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Deskripsi Lengkap</label>
                        <div class="p-4 bg-light rounded-3 border">
                            {!! $service->description !!}
                        </div>
                    </div>

                    @if($service->requirements)
                    <div class="mb-4">
                        <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Persyaratan</label>
                        <div class="p-4 bg-light rounded-3 border">
                            {!! $service->requirements !!}
                        </div>
                    </div>
                    @endif

                    @if($service->workflow)
                    <div class="mb-4">
                        <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Alur / Prosedur</label>
                        <div class="p-4 bg-light rounded-3 border">
                            {!! $service->workflow !!}
                        </div>
                    </div>
                    @endif
                </div>

                <div class="col-lg-4">
                    <h3 class="h5 fw-bold text-dark mb-4 border-bottom pb-3">Detail Tambahan</h3>
                    
                    <div class="bg-light p-4 rounded-4 border border-gray-100 d-flex flex-column gap-4">
                        <div>
                            <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Status</label>
                            <div>
                                @if($service->status === 'published')
                                    <span class="badge bg-success px-3 py-2 rounded-pill">Diterbitkan</span>
                                @elseif($service->status === 'draft')
                                    <span class="badge bg-secondary px-3 py-2 rounded-pill">Draf</span>
                                @else
                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">{{ ucfirst($service->status) }}</span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Kategori Layanan</label>
                            <p class="text-dark fw-medium mb-0">{{ $service->service_category ?: '-' }}</p>
                        </div>

                        <div>
                            <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Tipe Layanan</label>
                            <p class="text-dark fw-medium mb-0">{{ $service->service_type ?: '-' }}</p>
                        </div>

                        <div>
                            <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Estimasi Waktu</label>
                            <p class="text-dark fw-medium mb-0">{{ $service->estimated_time ?: '-' }}</p>
                        </div>

                        <div>
                            <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Biaya / Tarif</label>
                            <p class="text-dark fw-medium mb-0">{{ $service->service_fee ?: '-' }}</p>
                        </div>

                        <div>
                            <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Narahubung</label>
                            <p class="text-dark fw-medium mb-0">{{ $service->contact_person ?: '-' }}</p>
                            @if($service->contact_phone)
                                <p class="text-muted small mb-0"><i class="bi bi-telephone me-1"></i> {{ $service->contact_phone }}</p>
                            @endif
                            @if($service->contact_email)
                                <p class="text-muted small mb-0"><i class="bi bi-envelope me-1"></i> {{ $service->contact_email }}</p>
                            @endif
                        </div>

                        <div>
                            <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Lokasi & Jam</label>
                            <p class="text-dark fw-medium mb-1">{{ $service->office_location ?: '-' }}</p>
                            <p class="text-muted small mb-0"><i class="bi bi-clock me-1"></i> {{ $service->office_hours ?: '-' }}</p>
                        </div>
                        
                        <div class="pt-3 border-top mt-2">
                            <label class="text-muted small fw-bold text-uppercase tracking-wider mb-1">Tautan Publik (Slug)</label>
                            <p class="text-primary fw-medium mb-0 text-break">{{ url('/layanan/' . $service->slug) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

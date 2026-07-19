@extends('layouts.app')

@section('title', $service->title . ' | DLH Tulungagung')

@section('content')
    <x-hero 
        title="{{ $service->title }}" 
        subtitle="{{ $service->summary ?? 'Detail informasi layanan publik' }}" 
        :breadcrumbs="[
            ['label' => 'Layanan', 'url' => route('services')],
            ['label' => $service->title]
        ]"
        :bgImage="$service->banner"
    />

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Deskripsi Layanan -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden">
                        @if($service->thumbnail)
                            <img src="{{ asset('storage/' . $service->thumbnail) }}" class="card-img-top object-fit-cover" style="max-height: 400px; width: 100%;" alt="{{ $service->title }}">
                        @endif
                        <div class="card-body p-4 p-xl-5">
                            <h2 class="h4 fw-bold text-dark mb-4 border-bottom pb-3">Deskripsi Layanan</h2>
                            <div class="prose max-w-none text-muted">
                                {!! $service->description !!}
                            </div>
                        </div>
                    </div>

                    <!-- Persyaratan -->
                    @if($service->requirements)
                    <div class="card border-0 shadow-sm rounded-4 mb-4">
                        <div class="card-body p-4 p-xl-5">
                            <h2 class="h4 fw-bold text-dark mb-4 border-bottom pb-3">Persyaratan</h2>
                            <div class="prose max-w-none text-muted">
                                {!! $service->requirements !!}
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Alur / Prosedur -->
                    @if($service->workflow)
                    <div class="card border-0 shadow-sm rounded-4 mb-4">
                        <div class="card-body p-4 p-xl-5">
                            <h2 class="h4 fw-bold text-dark mb-4 border-bottom pb-3">Alur & Prosedur</h2>
                            <div class="prose max-w-none text-muted">
                                {!! $service->workflow !!}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar Informasi -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 sticky-top" style="top: 100px;">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold text-dark mb-4">Informasi Tambahan</h3>
                            
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
                                <!-- Tipe Layanan -->
                                @if($service->service_type)
                                <li class="d-flex align-items-start gap-3">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded p-2">
                                        <i class="bi bi-tag-fill"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted small fw-semibold">Tipe Layanan</span>
                                        <span class="text-dark fw-bold">{{ $service->service_type }}</span>
                                    </div>
                                </li>
                                @endif

                                <!-- Waktu Penyelesaian -->
                                @if($service->estimated_time)
                                <li class="d-flex align-items-start gap-3">
                                    <div class="bg-warning bg-opacity-10 text-warning rounded p-2">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted small fw-semibold">Estimasi Waktu</span>
                                        <span class="text-dark fw-bold">{{ $service->estimated_time }}</span>
                                    </div>
                                </li>
                                @endif

                                <!-- Biaya -->
                                @if($service->service_fee)
                                <li class="d-flex align-items-start gap-3">
                                    <div class="bg-success bg-opacity-10 text-success rounded p-2">
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted small fw-semibold">Biaya / Tarif</span>
                                        <span class="text-dark fw-bold">{{ $service->service_fee }}</span>
                                    </div>
                                </li>
                                @endif

                                <!-- Narahubung -->
                                @if($service->contact_person || $service->contact_phone)
                                <li class="d-flex align-items-start gap-3">
                                    <div class="bg-info bg-opacity-10 text-info rounded p-2">
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted small fw-semibold">Narahubung</span>
                                        <span class="text-dark fw-bold">{{ $service->contact_person ?? 'Petugas Layanan' }}</span>
                                        @if($service->contact_phone)
                                            <span class="d-block text-muted small">{{ $service->contact_phone }}</span>
                                        @endif
                                        @if($service->contact_email)
                                            <span class="d-block text-muted small">{{ $service->contact_email }}</span>
                                        @endif
                                    </div>
                                </li>
                                @endif

                                <!-- Lokasi -->
                                @if($service->office_location)
                                <li class="d-flex align-items-start gap-3">
                                    <div class="bg-danger bg-opacity-10 text-danger rounded p-2">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted small fw-semibold">Lokasi Pelayanan</span>
                                        <span class="text-dark fw-bold">{{ $service->office_location }}</span>
                                    </div>
                                </li>
                                @endif
                                
                                <!-- Jam Layanan -->
                                @if($service->office_hours)
                                <li class="d-flex align-items-start gap-3">
                                    <div class="bg-secondary bg-opacity-10 text-secondary rounded p-2">
                                        <i class="bi bi-calendar2-check"></i>
                                    </div>
                                    <div>
                                        <span class="d-block text-muted small fw-semibold">Jam Pelayanan</span>
                                        <span class="text-dark fw-bold">{{ $service->office_hours }}</span>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

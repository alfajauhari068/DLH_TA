@extends('layouts.app')

@section('title', 'Struktur Organisasi | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Struktur Organisasi" 
        subtitle="Mengenal susunan pejabat dan struktur kepengurusan Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Struktur Organisasi']]"
    />

    <section class="py-5 bg-light">
        <div class="container py-4 max-w-5xl">
            @forelse($departments as $department)
                <div class="mb-5 pb-3">
                    <div class="text-center mb-5">
                        <h2 class="h3 fw-bold text-dark d-inline-block position-relative pb-2">
                            {{ $department->name }}
                            <span class="position-absolute bottom-0 start-50 translate-middle-x bg-success rounded-pill" style="width: 50px; height: 4px;"></span>
                        </h2>
                        @if($department->description)
                            <p class="text-muted mt-3 max-w-3xl mx-auto">{{ $department->description }}</p>
                        @endif
                    </div>

                    <!-- Pejabat pada Departemen Utama -->
                    @if($department->officials->count() > 0)
                        <div class="row g-4 justify-content-center mb-5">
                            @foreach($department->officials as $official)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm rounded-4 text-center h-100 group transition-all hover-lift">
                                        <div class="card-body p-4 p-xl-5 d-flex flex-column align-items-center">
                                            <div class="rounded-circle overflow-hidden mb-4 border border-4 border-white shadow-sm" style="width: 120px; height: 120px;">
                                                <img src="{{ $official->photo ? asset('storage/' . $official->photo) : asset('images/default-avatar.png') }}" alt="{{ $official->name }}" class="w-100 h-100 object-fit-cover group-hover-scale transition-all" onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($official->name) }}&background=1e7e34&color=fff'">
                                            </div>
                                            <h3 class="h5 fw-bold text-dark mb-1">{{ $official->name }}</h3>
                                            <span class="d-block text-success fw-medium mb-3 small">{{ $official->position->name ?? 'Pejabat' }}</span>
                                            
                                            <div class="mt-auto d-flex flex-column gap-2 text-muted small w-100 border-top pt-3">
                                                @if($official->email)
                                                    <div class="d-flex align-items-center justify-content-center gap-2"><i class="bi bi-envelope"></i> {{ $official->email }}</div>
                                                @endif
                                                @if($official->phone)
                                                    <div class="d-flex align-items-center justify-content-center gap-2"><i class="bi bi-telephone"></i> {{ $official->phone }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Sub-departemen / Seksi -->
                    @if($department->children->count() > 0)
                        <div class="row g-4 justify-content-center mt-3">
                            @foreach($department->children as $child)
                                <div class="col-12">
                                    <div class="bg-white rounded-4 shadow-sm border border-success border-opacity-10 p-4">
                                        <h4 class="h5 fw-bold text-dark mb-4 border-start border-4 border-success ps-3">{{ $child->name }}</h4>
                                        
                                        @if($child->officials->count() > 0)
                                            <div class="row g-4">
                                                @foreach($child->officials as $official)
                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 transition-all hover-bg-success">
                                                            <div class="rounded-circle overflow-hidden flex-shrink-0" style="width: 60px; height: 60px;">
                                                                <img src="{{ $official->photo ? asset('storage/' . $official->photo) : asset('images/default-avatar.png') }}" alt="{{ $official->name }}" class="w-100 h-100 object-fit-cover" onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($official->name) }}&background=1e7e34&color=fff'">
                                                            </div>
                                                            <div>
                                                                <h5 class="fw-bold text-dark mb-0 fs-6">{{ $official->name }}</h5>
                                                                <span class="text-success small fw-medium">{{ $official->position->name ?? 'Staf' }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="text-muted small fst-italic">Belum ada pejabat yang ditugaskan pada sub-bidang ini.</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @empty
                <div class="text-center py-5">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center text-muted shadow-sm mb-4" style="width: 80px; height: 80px;">
                        <i class="bi bi-diagram-3 fs-1"></i>
                    </div>
                    <h3 class="h4 fw-bold text-dark mb-2">Struktur Belum Tersedia</h3>
                    <p class="text-muted">Data struktur organisasi instansi sedang dalam proses pembaruan.</p>
                </div>
            @endforelse
        </div>
    </section>

    <style>
        .transition-all { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important; }
        .group:hover .group-hover-scale { transform: scale(1.1); }
        .hover-bg-success:hover { background-color: rgba(25, 135, 84, 0.1) !important; }
        .max-w-5xl { max-width: 1100px; margin: 0 auto; }
        .max-w-3xl { max-width: 800px; }
    </style>
@endsection

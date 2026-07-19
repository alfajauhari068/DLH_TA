@extends('layouts.app')

@section('title', 'Jadwal Agenda | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Jadwal Agenda Kegiatan" 
        subtitle="Jadwal kegiatan operasional, penyuluhan, dan program lingkungan hidup." 
        :breadcrumbs="[['label' => 'Agenda']]"
    />

    <section class="py-5 bg-light">
        <div class="container py-4 max-w-4xl">
            @forelse($agendas as $agenda)
                <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden group hover-lift transition-all">
                    <div class="row g-0">
                        <div class="col-md-3 bg-success bg-opacity-10 d-flex flex-column justify-content-center align-items-center p-4 text-center border-end border-success border-opacity-10">
                            <span class="d-block text-success fw-bolder display-5 mb-1">{{ \Carbon\Carbon::parse($agenda->start_date)->format('d') }}</span>
                            <span class="d-block text-success text-uppercase fw-bold letter-spacing-1">{{ \Carbon\Carbon::parse($agenda->start_date)->translatedFormat('M Y') }}</span>
                            
                            @if(\Carbon\Carbon::parse($agenda->end_date)->gt(\Carbon\Carbon::parse($agenda->start_date)))
                                <span class="badge bg-success mt-3 rounded-pill px-3 py-2 text-white">s/d {{ \Carbon\Carbon::parse($agenda->end_date)->format('d M') }}</span>
                            @endif
                        </div>
                        <div class="col-md-9 p-4 p-md-5 d-flex flex-column justify-content-center">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="h4 fw-bold text-dark mb-0">{{ $agenda->title }}</h3>
                                @if(\Carbon\Carbon::now()->lt(\Carbon\Carbon::parse($agenda->start_date)))
                                    <span class="badge bg-warning text-dark rounded-pill">Mendatang</span>
                                @elseif(\Carbon\Carbon::now()->between(\Carbon\Carbon::parse($agenda->start_date), \Carbon\Carbon::parse($agenda->end_date)->endOfDay()))
                                    <span class="badge bg-success rounded-pill">Berlangsung</span>
                                @else
                                    <span class="badge bg-secondary rounded-pill">Selesai</span>
                                @endif
                            </div>
                            
                            <p class="text-muted mb-4">{{ $agenda->description ?? 'Deskripsi tidak tersedia.' }}</p>
                            
                            <div class="d-flex flex-wrap gap-4 mt-auto">
                                @if($agenda->location)
                                <div class="d-flex align-items-center gap-2 text-secondary small fw-medium">
                                    <i class="bi bi-geo-alt-fill text-danger fs-5"></i>
                                    {{ $agenda->location }}
                                </div>
                                @endif
                                
                                @if($agenda->organizer)
                                <div class="d-flex align-items-center gap-2 text-secondary small fw-medium">
                                    <i class="bi bi-people-fill text-primary fs-5"></i>
                                    {{ $agenda->organizer }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-5">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center text-muted shadow-sm mb-4" style="width: 80px; height: 80px;">
                        <i class="bi bi-calendar-x fs-1"></i>
                    </div>
                    <h3 class="h4 fw-bold text-dark mb-2">Belum Ada Agenda</h3>
                    <p class="text-muted">Tidak ada agenda kegiatan yang dipublikasikan saat ini.</p>
                </div>
            @endforelse

            <div class="mt-5 d-flex justify-content-center">
                {{ $agendas->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>

    <style>
        .transition-all { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important; }
        .letter-spacing-1 { letter-spacing: 1px; }
        .max-w-4xl { max-width: 900px; margin: 0 auto; }
    </style>
@endsection

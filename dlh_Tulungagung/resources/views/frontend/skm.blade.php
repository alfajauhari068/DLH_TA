@extends('layouts.app')

@section('title', 'Indeks Kepuasan Masyarakat (SKM) | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Survei Kepuasan Masyarakat (SKM)" 
        subtitle="Transparansi penilaian kinerja pelayanan publik Dinas Lingkungan Hidup berdasarkan Survei Kepuasan Masyarakat (IKM)." 
        :breadcrumbs="[['label' => 'SKM']]"
    />

    <section class="py-5 bg-light">
        <div class="container py-4 max-w-5xl">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-7">
                    <h2 class="h3 fw-bold text-dark mb-3">Laporan Penilaian SKM</h2>
                    <p class="text-muted text-lg">Indeks Kepuasan Masyarakat (IKM) merupakan tolak ukur kepuasan pengguna layanan terhadap kualitas pelayanan publik yang diselenggarakan oleh Dinas Lingkungan Hidup Kabupaten Tulungagung.</p>
                </div>
                <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
                    <div class="bg-white rounded-4 p-4 shadow-sm border border-success border-opacity-10 d-inline-block text-start w-100">
                        <h4 class="h6 text-success fw-bold text-uppercase letter-spacing-1 mb-2">Mutu Pelayanan</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-3 border border-success border-opacity-25">A: 88.31 - 100</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary fw-bold px-3 py-2 rounded-3 border border-primary border-opacity-25">B: 76.61 - 88.30</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <span class="badge bg-warning bg-opacity-10 text-warning fw-bold px-3 py-2 rounded-3 border border-warning border-opacity-25">C: 65.00 - 76.60</span>
                            <span class="badge bg-danger bg-opacity-10 text-danger fw-bold px-3 py-2 rounded-3 border border-danger border-opacity-25">D: 25.00 - 64.99</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-success text-white">
                            <tr>
                                <th scope="col" class="py-4 ps-4 border-0">Tahun</th>
                                <th scope="col" class="py-4 border-0">Periode</th>
                                <th scope="col" class="py-4 border-0 text-center">Nilai IKM</th>
                                <th scope="col" class="py-4 border-0 text-center">Kategori</th>
                                <th scope="col" class="py-4 border-0">Keterangan</th>
                                <th scope="col" class="py-4 pe-4 border-0 text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="border-top-0">
                            @forelse($skmScores as $skm)
                                <tr class="bg-white">
                                    <td class="py-4 ps-4 fw-bold text-dark fs-5">{{ $skm->year }}</td>
                                    <td class="py-4 fw-medium text-secondary">{{ $skm->period }}</td>
                                    <td class="py-4 text-center">
                                        <span class="d-inline-flex align-items-center justify-content-center bg-light text-dark fw-bolder rounded-circle shadow-sm" style="width: 50px; height: 50px; font-size: 1.1rem;">
                                            {{ number_format($skm->score, 2) }}
                                        </span>
                                    </td>
                                    <td class="py-4 text-center">
                                        @php
                                            $badgeClass = 'bg-secondary';
                                            if(str_contains(strtolower($skm->category), 'a')) $badgeClass = 'bg-success';
                                            if(str_contains(strtolower($skm->category), 'b')) $badgeClass = 'bg-primary';
                                            if(str_contains(strtolower($skm->category), 'c')) $badgeClass = 'bg-warning text-dark';
                                            if(str_contains(strtolower($skm->category), 'd')) $badgeClass = 'bg-danger';
                                        @endphp
                                        <span class="badge {{ $badgeClass }} px-3 py-2 rounded-pill">{{ $skm->category }}</span>
                                    </td>
                                    <td class="py-4 text-muted small">{{ Str::limit($skm->description, 50) }}</td>
                                    <td class="py-4 pe-4 text-end">
                                        @if($skm->report_file)
                                            <a href="{{ asset('storage/' . $skm->report_file) }}" target="_blank" class="btn btn-outline-success btn-sm rounded-pill px-3 fw-bold shadow-sm hover-lift transition-all">
                                                <i class="bi bi-file-earmark-pdf-fill me-1"></i> Unduh
                                            </a>
                                        @else
                                            <span class="text-muted small fst-italic">Belum ada file</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5">
                                        <div class="text-muted mb-2"><i class="bi bi-clipboard-data fs-1"></i></div>
                                        <p class="mb-0 fw-medium">Belum ada data Survei Kepuasan Masyarakat yang dipublikasikan.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <style>
        .transition-all { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(25, 135, 84, 0.2) !important; }
        .letter-spacing-1 { letter-spacing: 1px; }
        .max-w-5xl { max-width: 1000px; margin: 0 auto; }
        .table > :not(caption) > * > * { border-bottom-color: #f1f5f9; }
    </style>
@endsection

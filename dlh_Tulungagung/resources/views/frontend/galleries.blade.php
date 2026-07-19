@extends('layouts.app')

@section('title', 'Galeri | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Galeri Kegiatan" 
        subtitle="Kumpulan dokumentasi foto dan kegiatan dari Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Galeri']]"
    />

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-4">
                @forelse($galleries as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <x-card-gallery :item="$item" />
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center text-muted shadow-sm mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-images fs-1"></i>
                        </div>
                        <h3 class="h4 fw-bold text-dark mb-2">Belum Ada Galeri</h3>
                        <p class="text-muted">Saat ini belum ada data album galeri yang dipublikasikan.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-5 d-flex justify-content-center">
                {{ $galleries->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
@endsection

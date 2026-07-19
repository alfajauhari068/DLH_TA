@extends('layouts.app')

@section('title', $gallery->title . ' - Galeri | DLH Tulungagung')

@section('content')
    <x-hero 
        :title="$gallery->title" 
        :subtitle="$gallery->description ?? 'Dokumentasi kegiatan'" 
        :breadcrumbs="[['label' => 'Galeri', 'url' => route('galleries')], ['label' => $gallery->title]]"
    />

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-4">
                @forelse($gallery->items as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top object-fit-cover" alt="{{ $item->caption }}" style="height: 250px;">
                            @if($item->caption)
                            <div class="card-body">
                                <p class="card-text text-muted mb-0">{{ $item->caption }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center text-muted shadow-sm mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-images fs-1"></i>
                        </div>
                        <h3 class="h4 fw-bold text-dark mb-2">Belum Ada Foto</h3>
                        <p class="text-muted">Galeri ini belum memiliki foto di dalamnya.</p>
                    </div>
                @endforelse
            </div>
            
            <div class="mt-5 text-center">
                <a href="{{ route('galleries') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill">
                    <i class="bi bi-arrow-left me-2"></i> Kembali ke Galeri
                </a>
            </div>
        </div>
    </section>
@endsection

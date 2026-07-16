@extends('layouts.app')

@section('title', 'Galeri | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Galeri Kegiatan" 
        subtitle="Kumpulan dokumentasi foto dan kegiatan dari Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Galeri']]"
    />

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @forelse($galleries as $item)
                    <x-card-gallery :item="$item" />
                @empty
                    <div class="col-span-4 text-center py-10 text-gray-500">Belum ada album galeri.</div>
                @endforelse
            </div>

            <div class="mt-12 flex justify-center">
                {{ $galleries->links('pagination::tailwind') }}
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', 'Berita | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Berita & Informasi" 
        subtitle="Temukan informasi dan kegiatan terbaru dari Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Berita']]"
    />

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($news as $item)
                    <x-card-news :news="$item" />
                @empty
                    <div class="col-span-3 text-center py-10 text-gray-500">Belum ada berita.</div>
                @endforelse
            </div>

            <div class="mt-12 flex justify-center">
                {{ $news->links('pagination::tailwind') }}
            </div>
        </div>
    </section>
@endsection

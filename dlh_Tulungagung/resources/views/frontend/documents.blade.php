@extends('layouts.app')

@section('title', 'Dokumen Publik | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Dokumen Publik" 
        subtitle="Unduh berbagai dokumen resmi, formulir, dan laporan publik." 
        :breadcrumbs="[['label' => 'Dokumen Publik']]"
    />

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto space-y-4">
                @forelse($documents as $document)
                    <x-card-document :document="$document" />
                @empty
                    <div class="text-center py-10 text-gray-500">Belum ada dokumen publik yang tersedia.</div>
                @endforelse
            </div>

            <div class="mt-12 flex justify-center max-w-4xl mx-auto">
                {{ $documents->links('pagination::tailwind') }}
            </div>
        </div>
    </section>
@endsection

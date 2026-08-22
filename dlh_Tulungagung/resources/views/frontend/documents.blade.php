@extends('layouts.app')

@section('title', 'Dokumen Unduhan Khusus | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Dokumen Unduhan Khusus" 
        subtitle="Unduh berbagai dokumen resmi, regulasi, panduan, dan formulir." 
        :breadcrumbs="[['label' => 'Dokumen Unduhan']]"
        badge="Dokumen"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                <div class="max-w-4xl mx-auto space-y-4">
                    @if($documents->isEmpty())
                        <x-guest.empty-state 
                            icon="bi-cloud-slash" 
                            title="Belum Ada Dokumen" 
                            description="Saat ini belum ada dokumen unduhan yang tersedia." 
                        />
                    @else
                        @foreach($documents as $document)
                            <x-guest.download-card 
                                :title="$document->title"
                                :type="strtoupper(pathinfo($document->file_path, PATHINFO_EXTENSION))"
                                :downloads="$document->downloads ?? 0"
                                :updatedAt="$document->updated_at ? $document->updated_at->diffForHumans() : null"
                                :downloadUrl="Storage::url($document->file_path)"
                            />
                        @endforeach
                    @endif
                </div>

                <div class="mt-12 flex justify-center max-w-4xl mx-auto">
                    {{ $documents->links('pagination::tailwind') }}
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Ingin Mengajukan Permohonan Informasi?" 
        subtitle="Gunakan layanan PPID kami untuk mengajukan permohonan informasi publik secara resmi." 
        :primaryAction="['url' => route('ppid'), 'label' => 'Layanan PPID', 'icon' => 'bi-info-circle']" 
    />
@endsection

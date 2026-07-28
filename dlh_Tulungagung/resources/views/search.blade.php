@extends('layouts.app')

@section('content')
<x-ui.section bg="bg-background">
    <x-ui.container>
        <div class="max-w-3xl mx-auto mb-12 text-center">
            <x-ui.badge class="mb-4">Pencarian Sistem</x-ui.badge>
            <h1 class="text-4xl font-black text-gray-900 mb-6">Hasil Pencarian</h1>
            <x-ui.search placeholder="Cari informasi, berita, atau layanan..." action="{{ url('/search') }}" />
        </div>

        @if (isset() && ->count() > 0)
            <x-ui.grid cols="grid-cols-1 md:grid-cols-2 lg:grid-cols-3" gap="gap-8">
                @foreach ( as )
                    <x-card-news :news="" />
                @endforeach
            </x-ui.grid>
        @else
            <x-ui.empty title="Hasil Tidak Ditemukan" description="Maaf, informasi yang Anda cari tidak ditemukan. Coba gunakan kata kunci lain." />
        @endif
    </x-ui.container>
</x-ui.section>
@endsection

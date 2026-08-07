@extends('layouts.app')

@section('content')
<x-ui.section bg="bg-background">
    <x-ui.container class="min-h-[60vh] flex flex-col items-center justify-center text-center">
        <div class="w-24 h-24 rounded-full bg-light-green text-primary-green flex items-center justify-center text-4xl mb-6 shadow-sm">
            <i class="bi bi-compass"></i>
        </div>
        <h1 class="text-5xl font-black text-gray-900 mb-4">404 &mdash; Halaman Tidak Ditemukan</h1>
        <p class="text-gray-500 text-lg max-w-lg mb-8 leading-relaxed">
            Maaf, halaman yang Anda tuju tidak ada atau telah dipindahkan.
        </p>
        <a href="{{ url('/') }}" class="inline-flex items-center gap-3 bg-primary-green text-white font-medium px-8 py-4 rounded-full soft-shadow hover:bg-primary-dark transition-colors">
            <i class="bi bi-house-door-fill"></i>
            <span>Kembali ke Beranda</span>
        </a>
    </x-ui.container>
</x-ui.section>
@endsection

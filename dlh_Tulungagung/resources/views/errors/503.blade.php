@extends('layouts.app')

@section('content')
<x-ui.section bg="bg-background">
    <x-ui.container class="min-h-[60vh] flex flex-col items-center justify-center text-center">
        <div class="w-24 h-24 rounded-full bg-light-green text-primary-green flex items-center justify-center text-4xl mb-6 shadow-sm">
            <i class="bi bi-tools"></i>
        </div>
        <h1 class="text-5xl font-black text-gray-900 mb-4">Pemeliharaan Sistem</h1>
        <p class="text-gray-500 text-lg max-w-lg mb-8 leading-relaxed">
            Portal DLH Tulungagung sedang dalam pemeliharaan berkala untuk meningkatkan kualitas layanan.
        </p>
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full border border-gray-100 soft-shadow text-sm text-gray-600">
            <span class="w-2.5 h-2.5 rounded-full bg-primary-green animate-pulse"></span>
            <span>Estimasi Selesai: Segera</span>
        </div>
    </x-ui.container>
</x-ui.section>
@endsection

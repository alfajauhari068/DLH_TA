@extends('layouts.app')

@section('title', 'Survei Kepuasan Masyarakat (SKM) | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Survei Kepuasan Masyarakat" 
        subtitle="Transparansi penilaian kinerja pelayanan publik Dinas Lingkungan Hidup berdasarkan Survei Kepuasan Masyarakat (IKM)." 
        :breadcrumbs="[['label' => 'SKM']]"
        badge="SKM"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                <div class="max-w-5xl mx-auto space-y-12">
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="lg:w-7/12 space-y-4">
                            <h2 class="text-3xl font-bold text-gray-900">Laporan Penilaian SKM</h2>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Indeks Kepuasan Masyarakat (IKM) merupakan tolak ukur kepuasan pengguna layanan terhadap kualitas pelayanan publik yang diselenggarakan oleh Dinas Lingkungan Hidup Kabupaten Tulungagung.
                            </p>
                        </div>
                        <div class="lg:w-5/12 w-full">
                            <div class="bg-white rounded-2xl p-6 shadow-sm border border-emerald-100">
                                <h4 class="text-sm font-bold text-emerald-700 uppercase tracking-wider mb-4">Indikator Mutu Pelayanan</h4>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="bg-emerald-50 text-emerald-700 font-bold px-3 py-2 rounded-xl text-center text-sm border border-emerald-200">
                                        A: 88.31 - 100
                                    </div>
                                    <div class="bg-blue-50 text-blue-700 font-bold px-3 py-2 rounded-xl text-center text-sm border border-blue-200">
                                        B: 76.61 - 88.30
                                    </div>
                                    <div class="bg-yellow-50 text-yellow-700 font-bold px-3 py-2 rounded-xl text-center text-sm border border-yellow-200">
                                        C: 65.00 - 76.60
                                    </div>
                                    <div class="bg-red-50 text-red-700 font-bold px-3 py-2 rounded-xl text-center text-sm border border-red-200">
                                        D: 25.00 - 64.99
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-emerald-600 text-white">
                                        <th class="py-5 px-6 font-semibold text-sm tracking-wider w-24">Tahun</th>
                                        <th class="py-5 px-6 font-semibold text-sm tracking-wider">Periode</th>
                                        <th class="py-5 px-6 font-semibold text-sm tracking-wider text-center">Nilai IKM</th>
                                        <th class="py-5 px-6 font-semibold text-sm tracking-wider text-center">Kategori</th>
                                        <th class="py-5 px-6 font-semibold text-sm tracking-wider">Keterangan</th>
                                        <th class="py-5 px-6 font-semibold text-sm tracking-wider text-right rounded-tr-3xl">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @forelse($skmScores as $skm)
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-gray-900 text-lg">{{ $skm->year }}</td>
                                            <td class="py-4 px-6 font-medium text-gray-600">{{ $skm->period }}</td>
                                            <td class="py-4 px-6 text-center">
                                                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gray-100 text-gray-900 font-black text-lg shadow-inner">
                                                    {{ number_format($skm->score, 2) }}
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 text-center">
                                                @php
                                                    $color = 'gray';
                                                    if(str_contains(strtolower($skm->category), 'a')) $color = 'green';
                                                    elseif(str_contains(strtolower($skm->category), 'b')) $color = 'blue';
                                                    elseif(str_contains(strtolower($skm->category), 'c')) $color = 'yellow';
                                                    elseif(str_contains(strtolower($skm->category), 'd')) $color = 'red';
                                                @endphp
                                                <x-guest.badge :label="$skm->category" :color="$color" />
                                            </td>
                                            <td class="py-4 px-6 text-sm text-gray-500">
                                                {{ Str::limit($skm->description, 50) }}
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                @if($skm->report_file && !str_contains($skm->report_file, '.tmp') && !str_contains($skm->report_file, 'php'))
                                                    <x-guest.button :href="Storage::url($skm->report_file)" variant="outline" size="sm" icon="bi-download" target="_blank">
                                                        Unduh
                                                    </x-guest.button>
                                                @else
                                                    <span class="text-sm text-gray-400 italic">Tidak ada file</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="py-12 px-6">
                                                <x-guest.empty-state 
                                                    icon="bi-clipboard-data" 
                                                    title="Belum Ada Data SKM" 
                                                    description="Belum ada data Survei Kepuasan Masyarakat yang dipublikasikan saat ini." 
                                                />
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>
@endsection

@extends('layouts.admin')

@section('title', 'Survei Kepuasan Masyarakat')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Nilai SKM</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Survei Kepuasan Masyarakat" 
            subtitle="Kelola rekapitulasi data Survei Kepuasan Masyarakat (SKM/IKM)." 
            actionUrl="{{ route('admin.skm-scores.create') }}" 
            actionText="Tambah Nilai SKM" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.skm-scores.index')" 
            searchPlaceholder="Search tahun/periode..." 
            :hasSort="true" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($skmScores->isEmpty())
        <x-admin.index.empty 
            title="Belum ada Nilai SKM" 
            description="Tambahkan rekapitulasi data Survei Kepuasan Masyarakat." 
            actionUrl="{{ route('admin.skm-scores.create') }}" 
            actionText="Tambah Nilai SKM" 
            icon="bi-bar-chart-steps" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3 text-center">Tahun</th>
                <th class="px-6 py-3">Periode</th>
                <th class="px-6 py-3 text-center">Nilai SKM</th>
                <th class="px-6 py-3">Kategori Mutu</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            @foreach($skmScores as $skm)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-center text-gray-900">{{ $skm->year }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $skm->period }}</td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-bold bg-green-100 text-green-800 border border-green-200">
                            {{ number_format($skm->score, 2) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-gray-700 font-medium">{{ $skm->category }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.skm-scores.edit', $skm) }}" class="text-blue-600 hover:text-blue-900 mr-3">Ubah</a>
                        <form action="{{ route('admin.skm-scores.destroy', $skm) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $skmScores->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

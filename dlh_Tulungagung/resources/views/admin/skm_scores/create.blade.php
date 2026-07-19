@extends('layouts.admin')

@section('title', 'Tambah Nilai SKM')
@section('subtitle', 'Create a new Survei Kepuasan Masyarakat (SKM) score entry.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'SKM Scores', 'url' => route('admin.skm-scores.index')],
        ['label' => 'Create']
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.skm-scores.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="SKM Details" padding="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <!-- Year -->
                    <div>
                        <label for="year" class="block text-sm font-semibold text-gray-700 mb-2">Year</label>
                        <input type="number" name="year" id="year" value="{{ old('year', date('Y')) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('year') border-red-500 @enderror" required>
                        @error('year') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <!-- Period -->
                    <div>
                        <label for="period" class="block text-sm font-semibold text-gray-700 mb-2">Period (Triwulan/Semester)</label>
                        <input type="text" name="period" id="period" value="{{ old('period') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('period') border-red-500 @enderror" placeholder="e.g. Semester 1, Triwulan 3">
                        @error('period') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <!-- Score -->
                    <div>
                        <label for="score" class="block text-sm font-semibold text-gray-700 mb-2">Total Score / IKM</label>
                        <input type="number" step="0.01" name="score" id="score" value="{{ old('score') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('score') border-red-500 @enderror" required>
                        @error('score') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Category Mutu -->
                <div class="mb-6">
                    <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">Mutu Pelayanan (Category)</label>
                    <select name="category" id="category" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('category') border-red-500 @enderror">
                        <option value="A (Sangat Baik)">A (Sangat Baik)</option>
                        <option value="B (Baik)">B (Baik)</option>
                        <option value="C (Kurang Baik)">C (Kurang Baik)</option>
                        <option value="D (Tidak Baik)">D (Tidak Baik)</option>
                    </select>
                    @error('category') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description / Kesimpulan</label>
                    <textarea name="description" id="description" rows="5" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
        </div>

        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.card title="Report Document" padding="p-6">
                <div>
                    <label for="report_file" class="block text-sm font-semibold text-gray-700 mb-2">Upload Report (PDF/Excel)</label>
                    <input type="file" name="report_file" id="report_file" accept=".pdf,.doc,.docx,.xls,.xlsx" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('report_file') border-red-500 @enderror">
                    <p class="text-xs text-gray-400 mt-1.5">Max size: 10MB.</p>
                    @error('report_file') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
            
            <x-admin.form.card title="Aksi" padding="p-6">
                <div class="flex flex-col gap-3">
                    <button type="submit" class="w-full py-2.5 px-4 bg-primary text-white text-sm font-bold rounded-xl hover:bg-primary-dark hover:-translate-y-0.5 transition-all shadow-sm">
                        Simpan Score
                    </button>
                    <a href="{{ route('admin.skm-scores.index') }}" class="w-full py-2.5 px-4 bg-white border border-gray-200 text-gray-700 text-sm font-bold rounded-xl text-center hover:bg-gray-50 hover:-translate-y-0.5 transition-all shadow-sm">
                        Batal
                    </a>
                </div>
            </x-admin.form.card>
        </div>
    </form>
@endsection

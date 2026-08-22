@extends('layouts.admin')

@section('title', 'Ubah Nilai SKM')
@section('subtitle', 'Edit Survei Kepuasan Masyarakat (SKM) score: ' . $skmScore->year . ' - ' . $skmScore->period)

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'SKM Scores', 'url' => route('admin.skm-scores.index')],
        ['label' => 'Edit']
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.skm-scores.update', $skmScore) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        @method('PUT')
        
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="SKM Details" padding="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <!-- Year -->
                    <div>
                        <label for="year" class="block text-sm font-semibold text-gray-700 mb-2">Year</label>
                        <input type="number" name="year" id="year" value="{{ old('year', $skmScore->year) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('year') border-red-500 @enderror" required>
                        @error('year') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <!-- Period -->
                    <div>
                        <label for="period" class="block text-sm font-semibold text-gray-700 mb-2">Period (Triwulan/Semester)</label>
                        <input type="text" name="period" id="period" value="{{ old('period', $skmScore->period) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('period') border-red-500 @enderror" placeholder="e.g. Semester 1, Triwulan 3">
                        @error('period') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <!-- Score -->
                    <div>
                        <label for="score" class="block text-sm font-semibold text-gray-700 mb-2">Total Score / IKM</label>
                        <input type="number" step="0.01" name="score" id="score" value="{{ old('score', $skmScore->score) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('score') border-red-500 @enderror" required>
                        @error('score') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Category Mutu -->
                <div class="mb-6">
                    <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">Mutu Pelayanan (Category)</label>
                    <select name="category" id="category" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('category') border-red-500 @enderror">
                        <option value="A (Sangat Baik)" {{ old('category', $skmScore->category) == 'A (Sangat Baik)' ? 'selected' : '' }}>A (Sangat Baik)</option>
                        <option value="B (Baik)" {{ old('category', $skmScore->category) == 'B (Baik)' ? 'selected' : '' }}>B (Baik)</option>
                        <option value="C (Kurang Baik)" {{ old('category', $skmScore->category) == 'C (Kurang Baik)' ? 'selected' : '' }}>C (Kurang Baik)</option>
                        <option value="D (Tidak Baik)" {{ old('category', $skmScore->category) == 'D (Tidak Baik)' ? 'selected' : '' }}>D (Tidak Baik)</option>
                    </select>
                    @error('category') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description / Kesimpulan</label>
                    <textarea name="description" id="description" rows="5" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('description') border-red-500 @enderror">{{ old('description', $skmScore->description) }}</textarea>
                    @error('description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
        </div>

        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.card title="Report Document" padding="p-6">
                <div>
                    <label for="report_file" class="block text-sm font-semibold text-gray-700 mb-2">Upload Report (PDF/Excel)</label>
                    <input type="file" name="report_file" id="report_file" accept=".pdf,.doc,.docx,.xls,.xlsx" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('report_file') border-red-500 @enderror">
                    
                    @if(isset($skmScore) && $skmScore->report_file)
                        <div class="mt-3 p-3 bg-blue-50 border border-blue-100 rounded-lg flex items-center justify-between">
                            <div class="flex items-center text-sm text-blue-800">
                                <i class="bi bi-file-earmark-text text-xl mr-2"></i>
                                <span class="font-medium truncate max-w-[200px]">{{ basename($skmScore->report_file) }}</span>
                            </div>
                            <a href="{{ asset('storage/' . $skmScore->report_file) }}" target="_blank" class="text-xs font-bold text-blue-600 hover:text-blue-800 bg-white px-3 py-1 rounded-md border border-blue-200 shadow-sm transition-all hover:shadow">Lihat File</a>
                        </div>
                    @endif
                    
                    <p class="text-xs text-gray-400 mt-1.5">Max size: 10MB.</p>
                    @error('report_file') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
            
            <x-admin.form.card title="Aksi" padding="p-6">
                <div class="flex flex-col gap-3">
                    <button type="submit" class="w-full py-2.5 px-4 bg-primary text-white text-sm font-bold rounded-xl hover:bg-primary-dark hover:-translate-y-0.5 transition-all shadow-sm">
                        Perbarui Score
                    </button>
                    <a href="{{ route('admin.skm-scores.index') }}" class="w-full py-2.5 px-4 bg-white border border-gray-200 text-gray-700 text-sm font-bold rounded-xl text-center hover:bg-gray-50 hover:-translate-y-0.5 transition-all shadow-sm">
                        Batal
                    </a>
                </div>
            </x-admin.form.card>
        </div>
    </form>
@endsection

@extends('layouts.admin')

@section('title', 'Struktur Organisasi')
@section('subtitle', 'Kelola bagan dokumen, deskripsi, dan dasar hukum struktur organisasi.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Struktur Organisasi']
    ]" />
@endsection

@section('content')
    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl flex items-center gap-3">
            <i class="bi bi-check-circle-fill text-lg"></i>
            <span class="text-sm font-semibold">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.organization-structure.update') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        @method('POST')
        
        <!-- Left Column: Fields & Editor -->
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="Informasi Dasar" padding="p-6">
                <!-- Title -->
                <div class="mb-4">
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Judul</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $structure->title ?? 'Struktur Organisasi') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('title') border-red-500 @enderror" required>
                    @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                
                <!-- Subtitle -->
                <div class="mb-0">
                    <label for="subtitle" class="block text-sm font-semibold text-gray-700 mb-2">Subjudul</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $structure->subtitle ?? 'Dinas Lingkungan Hidup Kabupaten Tulungagung') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('subtitle') border-red-500 @enderror">
                    @error('subtitle') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
            
            <x-admin.form.card title="Deskripsi Struktur" padding="p-6">
                <div>
                    <x-admin.form.tinymce-editor name="description" id="description" :value="old('description', $structure->description ?? '')" height="350" />
                </div>
            </x-admin.form.card>

            <x-admin.form.card title="Dasar Hukum" padding="p-6">
                <div>
                    <x-admin.form.tinymce-editor name="legal_basis" id="legal_basis" :value="old('legal_basis', $structure->legal_basis ?? '')" height="300" />
                </div>
            </x-admin.form.card>
        </div>

        <!-- Right Column: Uploads & Publish -->
        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.card title="Aksi" padding="p-6">
                <div class="space-y-3">
                    <button type="submit" class="w-full inline-flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm px-6 py-3 rounded-xl transition-all shadow-md">
                        <i class="bi bi-save"></i>
                        Simpan Perubahan
                    </button>
                    @if($structure->exists)
                        <a href="{{ route('officials') }}" target="_blank" class="w-full inline-flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold text-sm px-6 py-3 rounded-xl transition-all">
                            <i class="bi bi-eye"></i>
                            Preview Halaman Guest
                        </a>
                    @endif
                </div>
            </x-admin.form.card>

            <x-admin.form.card title="Bagan Organisasi (SVG / PNG)" padding="p-6">
                <div class="space-y-4">
                    @if($structure->image)
                        <div class="relative group rounded-xl overflow-hidden border border-gray-100 bg-gray-50 p-2">
                            <img src="{{ asset('storage/' . $structure->image) }}" class="max-h-48 w-full object-contain rounded-lg" alt="Bagan Struktur">
                            <div class="text-xs text-center text-gray-500 mt-2 truncate">{{ basename($structure->image) }}</div>
                        </div>
                    @endif
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Upload Bagan Baru</label>
                        <input type="file" name="image" accept="image/png,image/jpeg,image/svg+xml" class="w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:outline-none file:mr-4 file:py-1.5 file:px-3.5 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                        <p class="text-[10px] text-gray-400 mt-1.5">Format yang didukung: SVG, PNG, JPG. Maksimal 5MB.</p>
                        @error('image') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
            </x-admin.form.card>

            <x-admin.form.card title="Dokumen Resmi (PDF)" padding="p-6">
                <div class="space-y-4">
                    @if($structure->pdf)
                        <div class="flex items-center gap-3 p-3 bg-emerald-50 rounded-xl border border-emerald-100">
                            <i class="bi bi-file-earmark-pdf-fill text-emerald-600 text-2xl"></i>
                            <div class="min-w-0 flex-1">
                                <div class="text-xs font-bold text-emerald-950 truncate">{{ basename($structure->pdf) }}</div>
                                <a href="{{ asset('storage/' . $structure->pdf) }}" target="_blank" class="text-[10px] text-emerald-700 font-semibold hover:underline">Unduh File</a>
                            </div>
                        </div>
                    @endif
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Upload Dokumen PDF</label>
                        <input type="file" name="pdf" accept="application/pdf" class="w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:outline-none file:mr-4 file:py-1.5 file:px-3.5 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                        <p class="text-[10px] text-gray-400 mt-1.5">Maksimal 10MB.</p>
                        @error('pdf') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
            </x-admin.form.card>
        </div>
    </form>
@endsection

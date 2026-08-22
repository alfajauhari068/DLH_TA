@extends('layouts.admin')

@section('title', 'Create Department')
@section('subtitle', 'Create a new department or field (bidang).')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Departments', 'url' => route('admin.departments.index')],
        ['label' => 'Create']
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.departments.store') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="Department Information" padding="p-6">
                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('name') border-red-500 @enderror" required>
                    @error('name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                
                <!-- Parent Department -->
                <div class="mb-6">
                    <label for="parent_id" class="block text-sm font-semibold text-gray-700 mb-2">Parent Department</label>
                    <select name="parent_id" id="parent_id" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('parent_id') border-red-500 @enderror">
                        <option value="">None (Top Level)</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ old('parent_id') == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                        @endforeach
                    </select>
                    <p class="text-xs text-gray-400 mt-1.5">Select a parent if this is a sub-department or division.</p>
                    @error('parent_id') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                    <textarea name="description" id="description" rows="4" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
        </div>

        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.card title="Aksi" padding="p-6">
                <div class="flex flex-col gap-3">
                    <button type="submit" class="w-full py-2.5 px-4 bg-primary text-white text-sm font-bold rounded-xl hover:bg-primary-dark hover:-translate-y-0.5 transition-all shadow-sm">
                        Simpan Department
                    </button>
                    <a href="{{ route('admin.departments.index') }}" class="w-full py-2.5 px-4 bg-white border border-gray-200 text-gray-700 text-sm font-bold rounded-xl text-center hover:bg-gray-50 hover:-translate-y-0.5 transition-all shadow-sm">
                        Batal
                    </a>
                </div>
            </x-admin.form.card>
        </div>
    </form>
@endsection

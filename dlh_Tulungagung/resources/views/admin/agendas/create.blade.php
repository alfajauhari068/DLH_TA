@extends('layouts.admin')

@section('title', 'Tambah Agenda')
@section('subtitle', 'Create a new event or agenda.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Agendas', 'url' => route('admin.agendas.index')],
        ['label' => 'Create']
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.agendas.store') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="Agenda Details" padding="p-6">
                <!-- Title -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title / Event Name</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('title') border-red-500 @enderror" required>
                    @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Start Date -->
                    <div>
                        <label for="start_date" class="block text-sm font-semibold text-gray-700 mb-2">Start Date & Time</label>
                        <input type="datetime-local" name="start_date" id="start_date" value="{{ old('start_date') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('start_date') border-red-500 @enderror" required>
                        @error('start_date') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <!-- End Date -->
                    <div>
                        <label for="end_date" class="block text-sm font-semibold text-gray-700 mb-2">End Date & Time</label>
                        <input type="datetime-local" name="end_date" id="end_date" value="{{ old('end_date') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('end_date') border-red-500 @enderror">
                        <p class="text-xs text-gray-400 mt-1.5">Leave blank if it's a single-day event.</p>
                        @error('end_date') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                    <textarea name="description" id="description" rows="4" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>

            <x-admin.form.card title="Logistics & Relation" padding="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Location -->
                    <div>
                        <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">Location</label>
                        <input type="text" name="location" id="location" value="{{ old('location') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('location') border-red-500 @enderror">
                        @error('location') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <!-- Organizer -->
                    <div>
                        <label for="organizer" class="block text-sm font-semibold text-gray-700 mb-2">Organizer</label>
                        <input type="text" name="organizer" id="organizer" value="{{ old('organizer') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('organizer') border-red-500 @enderror">
                        @error('organizer') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Related News -->
                <div>
                    <label for="related_post_id" class="block text-sm font-semibold text-gray-700 mb-2">Related News / Post</label>
                    <select name="related_post_id" id="related_post_id" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('related_post_id') border-red-500 @enderror">
                        <option value="">None</option>
                        @foreach($news as $n)
                            <option value="{{ $n->id }}" {{ old('related_post_id') == $n->id ? 'selected' : '' }}>{{ $n->title }}</option>
                        @endforeach
                    </select>
                    <p class="text-xs text-gray-400 mt-1.5">Link this agenda to a published news article.</p>
                    @error('related_post_id') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
        </div>

        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.publish-card :model="null" :statusOptions="['planned' => 'Planned', 'ongoing' => 'Ongoing', 'completed' => 'Completed', 'cancelled' => 'Cancelled']" />
            
            <x-admin.form.card title="Aksi" padding="p-6">
                <div class="flex flex-col gap-3">
                    <button type="submit" class="w-full py-2.5 px-4 bg-primary text-white text-sm font-bold rounded-xl hover:bg-primary-dark hover:-translate-y-0.5 transition-all shadow-sm">
                        Simpan Agenda
                    </button>
                    <a href="{{ route('admin.agendas.index') }}" class="w-full py-2.5 px-4 bg-white border border-gray-200 text-gray-700 text-sm font-bold rounded-xl text-center hover:bg-gray-50 hover:-translate-y-0.5 transition-all shadow-sm">
                        Batal
                    </a>
                </div>
            </x-admin.form.card>
        </div>
    </form>
@endsection

@extends('layouts.admin')

@section('title', 'Ubah Pejabat')
@section('subtitle', 'Edit official/staff member profile: ' . $official->name)

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Officials', 'url' => route('admin.officials.index')],
        ['label' => 'Edit']
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.officials.update', $official) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        @method('PUT')
        
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="Official Profile" padding="p-6">
                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $official->name) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('name') border-red-500 @enderror" required>
                    @error('name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Department -->
                    <div>
                        <label for="department_id" class="block text-sm font-semibold text-gray-700 mb-2">Department / Bidang</label>
                        <select name="department_id" id="department_id" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('department_id') border-red-500 @enderror">
                            <option value="">None / Executive</option>
                            @foreach($departments as $dept)
                                <option value="{{ $dept->id }}" {{ old('department_id', $official->department_id) == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                            @endforeach
                        </select>
                        @error('department_id') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <!-- Position Master -->
                    <div>
                        <label for="position_id" class="block text-sm font-semibold text-gray-700 mb-2">Structural Position</label>
                        <select name="position_id" id="position_id" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('position_id') border-red-500 @enderror">
                            <option value="">Select Position...</option>
                            @foreach($positions as $pos)
                                <option value="{{ $pos->id }}" {{ old('position_id', $official->position_id) == $pos->id ? 'selected' : '' }}>{{ $pos->name }}</option>
                            @endforeach
                        </select>
                        @error('position_id') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $official->email) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('email') border-red-500 @enderror">
                        @error('email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', $official->phone) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('phone') border-red-500 @enderror">
                        @error('phone') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Biography -->
                <div>
                    <label for="biography" class="block text-sm font-semibold text-gray-700 mb-2">Biography</label>
                    <x-admin.form.tinymce-editor name="biography" id="biography" :value="old('biography', $official->biography)" height="300" />
                </div>
            </x-admin.form.card>
        </div>

        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.publish-card :model="$official" :statusOptions="['active' => 'Active', 'inactive' => 'Inactive']" />
            
            <x-admin.form.featured-image-card :model="$official" fieldName="photo" title="Profile Photo" />
            
            <x-admin.form.card title="Sorting" padding="p-6">
                <div>
                    <label for="display_order" class="block text-sm font-semibold text-gray-700 mb-2">Display Order</label>
                    <input type="number" name="display_order" id="display_order" value="{{ old('display_order', $official->display_order) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('display_order') border-red-500 @enderror">
                    <p class="text-xs text-gray-400 mt-1.5">Lower number appears first in the organizational chart.</p>
                    @error('display_order') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
        </div>
    </form>

    @endpush
@endsection

@props(['model' => null, 'statusOptions' => ['draft' => 'Draft', 'published' => 'Published']])

<x-ui.card title="Publishing" padding="p-6" class="mb-6 rounded-2xl shadow-sm border-gray-100">
    <div class="space-y-6">
        
        <!-- Status -->
        <div>
            <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
            <select id="status" 
                    name="status" 
                    class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('status') border-red-500 @enderror">
                @foreach($statusOptions as $key => $val)
                    <option value="{{ $key }}" @selected(old('status', $model->status ?? null) == $key)>{{ $val }}</option>
                @endforeach
            </select>
            @error('status') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Publish Date -->
        <div>
            <label for="published_at" class="block text-sm font-semibold text-gray-700 mb-2">Publish Date</label>
            <input type="datetime-local" 
                   id="published_at" 
                   name="published_at" 
                   value="{{ old('published_at', optional($model->published_at ?? null)->format('Y-m-d\TH:i') ?? '') }}" 
                   class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('published_at') border-red-500 @enderror">
            @error('published_at') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        @if(isset($model->id))
            <!-- Metadata Read-only -->
            <div class="pt-4 border-t border-gray-100 space-y-3">
                @if(isset($model->author))
                <div class="flex justify-between items-center text-sm">
                    <span class="text-gray-500">Author:</span>
                    <span class="font-medium text-gray-900">{{ $model->author->name ?? auth()->user()->name }}</span>
                </div>
                @endif
                <div class="flex justify-between items-center text-sm">
                    <span class="text-gray-500">Created:</span>
                    <span class="font-medium text-gray-900">{{ $model->created_at->format('d M Y, H:i') }}</span>
                </div>
                <div class="flex justify-between items-center text-sm">
                    <span class="text-gray-500">Last Updated:</span>
                    <span class="font-medium text-gray-900">{{ $model->updated_at->format('d M Y, H:i') }}</span>
                </div>
            </div>
        @endif

    </div>

    <x-slot name="footer">
        <div class="flex flex-col gap-3">
            <button type="submit" class="w-full py-2.5 px-4 bg-primary text-white text-sm font-bold rounded-xl hover:bg-primary-dark hover:-translate-y-0.5 transition-all shadow-sm">
                {{ isset($model->id) ? 'Update' : 'Publish' }}
            </button>
            <div class="flex gap-3">
                <a href="{{ url()->previous() }}" class="flex-1 py-2.5 px-4 bg-white border border-gray-200 text-gray-700 text-sm font-bold rounded-xl text-center hover:bg-gray-50 hover:-translate-y-0.5 transition-all shadow-sm">
                    Cancel
                </a>
            </div>
        </div>
    </x-slot>
</x-ui.card>

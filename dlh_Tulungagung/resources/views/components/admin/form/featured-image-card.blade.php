@props(['model' => null, 'fieldName' => 'thumbnail', 'title' => 'Featured Image', 'previewUrl' => null])

@php
    $hasImage = false;
    if ($previewUrl) {
        $hasImage = true;
    } elseif ($model && isset($model->{$fieldName})) {
        $val = $model->{$fieldName};
        if (!empty($val) && !str_contains($val, '.tmp') && !str_contains($val, 'php')) {
            $hasImage = true;
            $previewUrl = Storage::url($val);
        }
    }
@endphp

<x-ui.card :title="$title" padding="p-6" class="mb-6 rounded-2xl shadow-sm border-gray-100">
    <div class="space-y-4">
        
        <div id="image-upload-container-{{ $fieldName }}" class="relative border-2 border-dashed border-gray-300 rounded-xl bg-gray-50 hover:bg-gray-100 hover:border-primary/50 transition-all duration-300 text-center overflow-hidden flex items-center justify-center min-h-[200px]">
            
            <input type="file" 
                   id="{{ $fieldName }}" 
                   name="{{ $fieldName }}" 
                   accept="image/jpeg,image/png,image/webp" 
                   class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">

            <!-- Default State -->
            <div id="upload-instruction-{{ $fieldName }}" class="p-6 {{ $hasImage ? 'hidden' : 'block' }}">
                <div class="w-12 h-12 rounded-full bg-white shadow-sm border border-gray-100 text-gray-400 flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-cloud-arrow-up text-xl"></i>
                </div>
                <h5 class="text-sm font-semibold text-gray-700">Click or drag image here</h5>
                <p class="text-xs text-gray-400 mt-1">PNG, JPG, or WEBP (Max 2MB)</p>
            </div>

            <!-- Preview State -->
            <img id="image-preview-{{ $fieldName }}" 
                 src="{{ $previewUrl }}" 
                 class="absolute inset-0 w-full h-full object-cover z-10 {{ $hasImage ? 'block' : 'hidden' }}" 
                 alt="Preview">
            
            <!-- Hover overlay for replace -->
            <div id="replace-overlay-{{ $fieldName }}" class="absolute inset-0 bg-black/50 backdrop-blur-sm flex-col items-center justify-center z-10 hidden pointer-events-none transition-opacity">
                <i class="bi bi-camera text-white text-2xl mb-2"></i>
                <span class="text-white text-sm font-semibold">Click to Replace</span>
            </div>
        </div>
        @error($fieldName) <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror

        <div id="image-actions-{{ $fieldName }}" class="flex items-center justify-between {{ $hasImage ? 'flex' : 'hidden' }}">
            <span class="text-xs text-gray-500 truncate" id="file-name-display-{{ $fieldName }}">Current Image</span>
            <button type="button" id="remove-image-btn-{{ $fieldName }}" class="text-xs font-semibold text-danger hover:text-danger-dark transition-colors px-2 py-1 rounded-md hover:bg-danger/10">
                <i class="bi bi-trash3 mr-1"></i> Remove
            </button>
        </div>

    </div>
</x-ui.card>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('{{ $fieldName }}');
    const preview = document.getElementById('image-preview-{{ $fieldName }}');
    const instruction = document.getElementById('upload-instruction-{{ $fieldName }}');
    const container = document.getElementById('image-upload-container-{{ $fieldName }}');
    const replaceOverlay = document.getElementById('replace-overlay-{{ $fieldName }}');
    const imageActions = document.getElementById('image-actions-{{ $fieldName }}');
    const removeBtn = document.getElementById('remove-image-btn-{{ $fieldName }}');
    const fileNameDisplay = document.getElementById('file-name-display-{{ $fieldName }}');

    if(!input) return;

    // Show replace overlay on hover if image exists
    container.addEventListener('mouseenter', () => {
        if (!preview.classList.contains('hidden')) {
            replaceOverlay.classList.remove('hidden');
            replaceOverlay.classList.add('flex');
        }
    });

    container.addEventListener('mouseleave', () => {
        replaceOverlay.classList.add('hidden');
        replaceOverlay.classList.remove('flex');
    });

    // Handle File Selection
    input.addEventListener('change', function(e) {
        if (this.files && this.files[0]) {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                instruction.classList.add('hidden');
                imageActions.classList.remove('hidden');
                imageActions.classList.add('flex');
                fileNameDisplay.textContent = file.name;
            }
            reader.readAsDataURL(file);
        }
    });

    // Remove Image
    removeBtn.addEventListener('click', function() {
        input.value = '';
        preview.src = '';
        preview.classList.add('hidden');
        instruction.classList.remove('hidden');
        imageActions.classList.add('hidden');
        imageActions.classList.remove('flex');
        replaceOverlay.classList.add('hidden');
        replaceOverlay.classList.remove('flex');
        fileNameDisplay.textContent = '';
    });
});
</script>

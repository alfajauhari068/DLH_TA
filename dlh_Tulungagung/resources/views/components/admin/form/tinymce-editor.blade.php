@props(['name', 'id' => null, 'value' => '', 'height' => 600, 'placeholder' => ''])

@php
    $id = $id ?? $name;
@endphp

<textarea 
    id="{{ $id }}" 
    name="{{ $name }}" 
    class="tinymce-editor w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error($name) border-red-500 @enderror" 
    style="min-height: {{ $height }}px;" 
    placeholder="{{ $placeholder }}"
>{{ $value }}</textarea>

@error($name) 
    <p class="text-xs text-red-500 mt-1"><i class="bi bi-exclamation-circle"></i> {{ $message }}</p> 
@enderror

@pushonce('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof tinymce !== 'undefined') {
            tinymce.remove();
            tinymce.init({
                selector: '.tinymce-editor',
                height: 600,
                menubar: false,
                plugins: ['advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'],
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media table | forecolor backcolor | removeformat | fullscreen code preview',
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 15px; }',
                images_upload_url: '{{ route("admin.media.upload") }}',
                automatic_uploads: true,
                relative_urls: false,
                remove_script_host: false,
                setup: function(editor) {
                    editor.on('change keyup', function() {
                        editor.save();
                        
                        // Update word count and reading time if elements exist
                        if (editor.plugins.wordcount) {
                            const wordcount = editor.plugins.wordcount.getCount();
                            const wcElement = document.getElementById('word-count');
                            const rtElement = document.getElementById('reading-time');
                            if (wcElement) wcElement.innerText = wordcount;
                            if (rtElement) rtElement.innerText = Math.max(1, Math.ceil(wordcount / 200));
                        }

                        // Auto-save indicator simulation if element exists
                        const saveIndicator = document.getElementById('save-indicator');
                        if (saveIndicator) {
                            saveIndicator.style.opacity = '0';
                            if (window.saveTimeout) clearTimeout(window.saveTimeout);
                            window.saveTimeout = setTimeout(() => {
                                saveIndicator.style.opacity = '1';
                                setTimeout(() => saveIndicator.style.opacity = '0', 2000);
                            }, 1000);
                        }
                    });

                    editor.on('init', function() {
                        if (editor.plugins.wordcount) {
                            const wordcount = editor.plugins.wordcount.getCount();
                            const wcElement = document.getElementById('word-count');
                            const rtElement = document.getElementById('reading-time');
                            if (wcElement) wcElement.innerText = wordcount;
                            if (rtElement) rtElement.innerText = Math.max(1, Math.ceil(wordcount / 200));
                        }
                    });
                }
            });
        }
    });
</script>
@endpushonce

<x-ui.card title="Content" padding="p-6" class="mb-6 rounded-2xl shadow-sm border-gray-100">
    <div>
        <x-admin.form.tinymce-editor name="content" id="content" :value="old('content', $news->content ?? '')" height="500" placeholder="Write your article content here..." />
    </div>
</x-ui.card>

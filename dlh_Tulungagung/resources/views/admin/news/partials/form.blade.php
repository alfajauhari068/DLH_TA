<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
    
    <!-- Left Column (Content) -->
    <div class="lg:col-span-8 space-y-6">
        @include('admin.news.partials.information-card')
        @include('admin.news.partials.content-card')
        <x-admin.form.seo-card :model="$news" />
    </div>

    <!-- Right Column (Sidebar) -->
    <div class="lg:col-span-4 space-y-6">
        <x-admin.form.publish-card :model="$news" />
        <x-admin.form.featured-image-card :model="$news" previewUrl="{{ $news->featured_image ? asset('storage/' . $news->featured_image) : null }}" />
    </div>

</div>

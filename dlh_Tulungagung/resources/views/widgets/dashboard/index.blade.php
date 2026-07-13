@php
    $counts = array_merge([
        'users' => 0,
        'news' => 0,
        'publications' => 0,
        'galleries' => 0,
        'programs' => 0,
        'services' => 0,
        'ppid' => 0,
        'pages' => 0,
        'settings' => 0,
    ], $widgetCounts ?? []);

    $widgets = [
        ['title' => 'Total Users', 'value' => $counts['users'], 'color' => 'primary'],
        ['title' => 'News Items', 'value' => $counts['news'], 'color' => 'info'],
        ['title' => 'Publications', 'value' => $counts['publications'], 'color' => 'success'],
        ['title' => 'Gallery Items', 'value' => $counts['galleries'], 'color' => 'warning'],
        ['title' => 'Programs', 'value' => $counts['programs'], 'color' => 'secondary'],
        ['title' => 'Services', 'value' => $counts['services'], 'color' => 'dark'],
        ['title' => 'PPID Documents', 'value' => $counts['ppid'], 'color' => 'info'],
        ['title' => 'Pages', 'value' => $counts['pages'], 'color' => 'secondary'],
        ['title' => 'Settings', 'value' => $counts['settings'], 'color' => 'info'],
    ];
@endphp

<div class="dashboard-widgets row g-3 mb-4">
    @foreach($widgets as $widget)
        <div class="col-12 col-md-6 col-xl-3">
            <x-admin.card :title="$widget['title']" subtitle="Ready for current management tasks." class="h-100">
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <div>
                        <h2 class="display-6 mb-1 text-dark">{{ $widget['value'] }}</h2>
                        <p class="mb-0 text-muted small">Current module overview.</p>
                    </div>
                    <div class="widget-icon bg-{{ $widget['color'] }} rounded-circle d-flex align-items-center justify-content-center text-white" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M8 12l2 2 4-4"></path></svg>
                    </div>
                </div>
            </x-admin.card>
        </div>
    @endforeach
</div>

@php
    $widgetItems = $widgets ?? collect();

    if ($widgetItems->isEmpty()) {
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

        $widgetItems = collect([
            ['title' => 'Total Users', 'value' => $counts['users'], 'color' => 'primary'],
            ['title' => 'News Items', 'value' => $counts['news'], 'color' => 'info'],
            ['title' => 'Publications', 'value' => $counts['publications'], 'color' => 'success'],
            ['title' => 'Gallery Items', 'value' => $counts['galleries'], 'color' => 'warning'],
            ['title' => 'Programs', 'value' => $counts['programs'], 'color' => 'secondary'],
            ['title' => 'Services', 'value' => $counts['services'], 'color' => 'dark'],
            ['title' => 'PPID Documents', 'value' => $counts['ppid'], 'color' => 'info'],
            ['title' => 'Pages', 'value' => $counts['pages'], 'color' => 'secondary'],
            ['title' => 'Settings', 'value' => $counts['settings'], 'color' => 'info'],
        ]);
    }
@endphp

<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4 mb-8">
    @foreach($widgetItems as $widget)
        @php
            $widgetData = is_array($widget) ? $widget : [];
            $title = $widgetData['title'] ?? ($widgetData['data']['title'] ?? 'Widget');
            $value = $widgetData['value'] ?? ($widgetData['data']['value'] ?? 0);
            $color = $widgetData['color'] ?? ($widgetData['data']['color'] ?? 'primary');

            $iconMap = [
                'Total Users' => 'people',
                'News Items' => 'newspaper',
                'Publications' => 'journal-text',
                'Gallery Items' => 'images',
                'Programs' => 'briefcase',
                'Services' => 'tools',
                'PPID Documents' => 'envelope-open',
                'Pages' => 'file-earmark-text',
                'Settings' => 'gear',
            ];

            $icon = $iconMap[$title] ?? 'info-circle';
            
            // Map bootstrap colors to x-ui.stat-card colors (primary, success, warning, danger, info)
            $uiColor = in_array($color, ['primary', 'success', 'warning', 'danger', 'info']) ? $color : 'primary';
        @endphp
        
        <x-ui.stat-card 
            title="{{ $title }}" 
            value="{{ $value }}" 
            icon="{{ $icon }}"
            color="{{ $uiColor }}"
        />
    @endforeach
</div>

@php
    $user = auth()->user();
    $menuItems = [
        ['label' => 'Dashboard', 'route' => 'dashboard', 'permission' => 'Dashboard.View', 'icon' => 'grid-1x2'],
        ['label' => 'Users', 'route' => 'admin.users.index', 'permission' => 'Users.View', 'icon' => 'people'],
        ['label' => 'News', 'route' => 'admin.news.index', 'permission' => 'News.View', 'icon' => 'newspaper'],
        ['label' => 'Gallery', 'route' => 'admin.galleries.index', 'permission' => 'Gallery.View', 'icon' => 'images'],
        ['label' => 'Publications', 'route' => 'admin.publications.index', 'permission' => 'Publication.View', 'icon' => 'journal-text'],
        ['label' => 'Programs', 'route' => 'admin.programs.index', 'permission' => 'Program.View', 'icon' => 'briefcase'],
        ['label' => 'Services', 'route' => 'admin.services.index', 'permission' => 'Service.View', 'icon' => 'tools'],
        ['label' => 'PPID', 'route' => 'admin.ppid.index', 'permission' => 'PPID.View', 'icon' => 'envelope-open'],
        ['label' => 'Pages', 'route' => 'admin.pages.index', 'permission' => 'Page.View', 'icon' => 'file-earmark-text'],
        ['label' => 'Website Settings', 'route' => 'admin.settings.index', 'permission' => 'Settings.View', 'icon' => 'gear']
    ];
@endphp

<aside {{ $attributes->merge(['class' => 'w-[280px] shrink-0 bg-surface border-r border-surface-border flex-shrink-0 hidden lg:flex flex-col h-screen sticky top-0 transition-all duration-300 z-40']) }} role="navigation" aria-label="Primary navigation">
    <div class="h-[72px] px-6 flex items-center border-b border-surface-border shrink-0">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 no-underline group w-full min-w-0">
            <img src="{{ asset('build/assets/icon-dinas.png') }}" alt="Logo DLH" class="shrink-0" style="width: 40px; height: 40px; object-fit: contain;">
            <div class="flex-1 min-w-0">
                <h2 class="text-xl font-bold text-gray-900 truncate leading-none mb-1">DLH Tulungagung</h2>
                <p class="text-sm text-muted truncate leading-none">Administration</p>
            </div>
        </a>
    </div>

    <div class="flex-1 overflow-y-auto py-4 px-3 custom-scrollbar">
        <ul class="space-y-1" role="menu">
            @foreach($menuItems as $item)
                @if($user && $user->hasPermission($item['permission']))
                    @php 
                        $isActive = request()->routeIs($item['route'] . '*'); 
                        $iconClass = $isActive ? 'text-primary' : 'text-gray-400 group-hover:text-primary';
                        $bgClass = $isActive ? 'bg-primary/10 text-primary font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900';
                    @endphp
                    <li>
                        <a href="{{ route($item['route']) }}" 
                           role="menuitem" 
                           class="group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 {{ $bgClass }}"
                           {{ $isActive ? 'aria-current="page"' : '' }}>
                            
                            <i class="bi bi-{{ $item['icon'] }} text-lg transition-colors {{ $iconClass }}"></i>
                            <span class="text-sm truncate">{{ $item['label'] }}</span>
                            
                            @if($isActive)
                                <div class="w-1.5 h-1.5 rounded-full bg-primary ml-auto shadow-[0_0_8px_rgba(30,126,52,0.6)]"></div>
                            @endif
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    
    <div class="p-4 border-t border-surface-border shrink-0">
        <div class="bg-surface-muted rounded-xl p-4 text-center">
            <p class="text-xs text-muted">Versi Sistem</p>
            <p class="text-sm font-semibold text-gray-900">v2.0.0</p>
        </div>
    </div>
</aside>

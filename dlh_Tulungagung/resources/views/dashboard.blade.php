@extends('layouts.admin')

@section('title', 'Dashboard')
@section('subtitle', 'Welcome back, ' . (auth()->user()->name ?? 'Admin') . '. Today is ' . now()->format('d F Y') . '.')

@section('actions')
    <div class="flex gap-2">
        <x-ui.button href="{{ route('dashboard') }}" variant="outline" size="sm" icon="bar-chart">Overview</x-ui.button>
        <x-ui.button href="{{ route('admin.news.create') }}" variant="primary" size="sm" icon="plus-lg">Create Content</x-ui.button>
    </div>
@endsection

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Overview'],
    ]" />
@endsection

@section('content')
    @include('widgets.dashboard.index', ['widgets' => $widgets])

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content Column -->
        <div class="lg:col-span-2 space-y-6">
            <x-ui.card title="Recent Activities" subtitle="Latest system actions and pending review items.">
                <!-- Mobile: Timeline -->
                <div class="block md:hidden space-y-4">
                    @for($i = 0; $i < 4; $i++)
                        <div class="flex gap-4 border-b border-gray-100 pb-4 last:border-0 last:pb-0">
                            <div class="flex flex-col items-center">
                                <div class="w-2 h-2 rounded-full bg-warning mt-2"></div>
                                <div class="w-px h-full bg-gray-200 mt-2"></div>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-gray-900">Pending review for new content entry</p>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-xs text-gray-500">News</span>
                                    <span class="text-gray-300">•</span>
                                    <span class="text-xs text-gray-500">2 hours ago</span>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Desktop: Table -->
                <div class="hidden md:block overflow-x-auto -mx-5 -mb-4 mt-2">
                    <x-ui.table 
                        :headers="['Activity', 'Module', 'Status', 'Time']" 
                        :hover="true"
                    >
                        @for($i = 0; $i < 4; $i++)
                            <tr class="border-b border-gray-100 last:border-0 transition-colors">
                                <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">Pending review for new content entry</td>
                                <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-500">News</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <x-ui.badge variant="warning">Pending</x-ui.badge>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-500 text-right">2 hours ago</td>
                            </tr>
                        @endfor
                    </x-ui.table>
                </div>
            </x-ui.card>
            
            <x-ui.card title="Recent News" subtitle="Latest content items in the CMS.">
                <!-- Mobile: Card List -->
                <div class="block md:hidden space-y-3">
                    @for($i = 0; $i < 4; $i++)
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <div class="flex justify-between items-start mb-2">
                                <x-ui.badge variant="success">Published</x-ui.badge>
                                <span class="text-xs text-gray-500">Today</span>
                            </div>
                            <h4 class="text-sm font-semibold text-gray-900 mb-1">News headline example</h4>
                            <p class="text-xs text-gray-500 mb-3">Environment</p>
                            <x-ui.button href="{{ route('admin.news.index') }}" variant="outline" size="sm" class="w-full justify-center">View Details</x-ui.button>
                        </div>
                    @endfor
                </div>

                <!-- Desktop: Table -->
                <div class="hidden md:block overflow-x-auto -mx-5 -mb-4 mt-2">
                    <x-ui.table 
                        :headers="['Title', 'Category', 'Status', 'Published', '']" 
                        :hover="true"
                    >
                        @for($i = 0; $i < 4; $i++)
                            <tr class="border-b border-gray-100 last:border-0 transition-colors">
                                <td class="px-5 py-3 whitespace-nowrap text-sm font-semibold text-gray-900">News headline example</td>
                                <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-500">Environment</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <x-ui.badge variant="success">Published</x-ui.badge>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-500">Today</td>
                                <td class="px-5 py-3 whitespace-nowrap text-right">
                                    <x-ui.button href="{{ route('admin.news.index') }}" variant="ghost" size="sm">Details</x-ui.button>
                                </td>
                            </tr>
                        @endfor
                    </x-ui.table>
                </div>
            </x-ui.card>
        </div>

        <!-- Sidebar Column -->
        <div class="lg:col-span-1 space-y-6">
            <x-ui.card title="Quick Shortcuts" subtitle="Most-used administration actions.">
                <div class="grid grid-cols-1 gap-2 mt-2">
                    <a href="{{ route('admin.news.create') }}" class="flex items-center justify-between p-3 bg-gray-50 hover:bg-gray-100 border border-gray-100 rounded-xl transition-colors group">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-900 group-hover:text-primary transition-colors">Create News</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400 group-hover:text-primary transition-colors"></i>
                    </a>
                    <a href="{{ route('admin.galleries.index') }}" class="flex items-center justify-between p-3 bg-gray-50 hover:bg-gray-100 border border-gray-100 rounded-xl transition-colors group">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-warning/10 text-warning flex items-center justify-center shrink-0">
                                <i class="bi bi-images"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-900 group-hover:text-warning transition-colors">Review Gallery</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400 group-hover:text-warning transition-colors"></i>
                    </a>
                    <a href="{{ route('admin.ppid.index') }}" class="flex items-center justify-between p-3 bg-gray-50 hover:bg-gray-100 border border-gray-100 rounded-xl transition-colors group">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-info/10 text-info flex items-center justify-center shrink-0">
                                <i class="bi bi-envelope-open"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-900 group-hover:text-info transition-colors">Approve PPID</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400 group-hover:text-info transition-colors"></i>
                    </a>
                </div>
            </x-ui.card>

            <x-ui.card title="System Information" subtitle="Current platform status.">
                <dl class="space-y-3 mt-2">
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-sm text-gray-500">Last login</dt>
                        <dd class="text-sm font-semibold text-gray-900">Today</dd>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-sm text-gray-500">Environment</dt>
                        <dd class="text-sm font-semibold text-gray-900">{{ app()->environment() }}</dd>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-sm text-gray-500">PHP Version</dt>
                        <dd class="text-sm font-semibold text-gray-900">{{ phpversion() }}</dd>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-sm text-gray-500">Laravel</dt>
                        <dd class="text-sm font-semibold text-gray-900">{{ app()->version() }}</dd>
                    </div>
                </dl>
            </x-ui.card>
        </div>
    </div>
@endsection

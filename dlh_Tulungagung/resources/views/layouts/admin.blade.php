<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | DLH Tulungagung CMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    @if (file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endif
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @stack('head')
</head>
<body class="bg-surface-muted text-gray-800 font-sans antialiased overflow-hidden">
    <a class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:p-4 focus:bg-white focus:text-primary" href="#main-content">Skip to main content</a>

    <div class="flex h-screen w-full">
        <!-- Sidebar -->
        <x-admin.sidebar />

        <!-- Content Shell -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden relative">
            
            <!-- Topbar -->
            <header class="bg-white/80 backdrop-blur-md border-b border-surface-border sticky top-0 z-30">
                <x-admin.topbar />
            </header>

            <!-- Main Scrollable Content -->
            <div class="flex-1 overflow-y-auto overflow-x-hidden">
                <main id="main-content" class="p-6 md:p-8 max-w-7xl mx-auto w-full">
                    
                    <!-- Page Header -->
                    <div class="mb-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            @hasSection('section')
                                <div class="text-primary font-medium text-sm tracking-wider uppercase mb-1">@yield('section')</div>
                            @endif
                            <x-ui.heading size="title">@yield('title', 'Dashboard')</x-ui.heading>
                            <x-ui.text size="body" color="text-muted">@yield('subtitle', 'Kelola layanan dan konten Dinas Lingkungan Hidup Kabupaten Tulungagung dalam satu antarmuka terpusat.')</x-ui.text>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            @hasSection('actions')@yield('actions')@endif
                        </div>
                    </div>

                    @if (View::hasSection('breadcrumb'))
                        <div class="mb-8">
                            @yield('breadcrumb')
                        </div>
                    @endif

                    <!-- Alerts -->
                    @if(session('success'))
                        <x-ui.alert type="success" title="Berhasil!" dismissible="true">
                            {{ session('success') }}
                        </x-ui.alert>
                    @endif

                    @if(session('error'))
                        <x-ui.alert type="error" title="Gagal!" dismissible="true">
                            {{ session('error') }}
                        </x-ui.alert>
                    @endif

                    <!-- Page Body -->
                    <section class="pb-12">
                        @yield('content')
                    </section>
                </main>

                <x-admin.footer />
            </div>
        </div>
    </div>

    <!-- Mobile Overlay -->
    <div class="fixed inset-0 bg-gray-900/50 z-40 lg:hidden hidden pointer-events-none" id="mobile-sidebar-overlay" aria-hidden="true"></div>
    
    @stack('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | DLH Tulungagung CMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @stack('head')
</head>
<body class="bg-surface-muted text-gray-800 font-sans antialiased overflow-hidden bg-grid-pattern bg-noise">
    <a class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:p-4 focus:bg-white focus:text-primary" href="#main-content">Skip to main content</a>

    <div class="flex h-screen w-full relative z-10">
        <!-- Sidebar -->
        <x-admin.sidebar />

        <!-- Mobile Overlay -->
        <div class="fixed inset-0 bg-gray-900/50 z-40 lg:hidden hidden pointer-events-none" id="mobile-sidebar-overlay" aria-hidden="true"></div>

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

    <!-- Mobile Overlay moved inside flex container -->
    
    @stack('scripts')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('admin-sidebar');
            const overlay = document.getElementById('mobile-sidebar-overlay');
            const toggleBtns = document.querySelectorAll('[data-admin-toggle-sidebar]');

            if (sidebar && overlay) {
                const openSidebar = () => {
                    sidebar.classList.remove('hidden');
                    sidebar.classList.add('fixed', 'left-0', 'top-0', 'z-50', 'flex');
                    overlay.classList.remove('hidden', 'pointer-events-none');
                    // Add animation/transition feel
                    setTimeout(() => {
                        sidebar.classList.add('translate-x-0');
                    }, 10);
                };

                const closeSidebar = () => {
                    sidebar.classList.add('hidden');
                    sidebar.classList.remove('fixed', 'left-0', 'top-0', 'z-50', 'flex');
                    overlay.classList.add('hidden', 'pointer-events-none');
                };

                toggleBtns.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        if (sidebar.classList.contains('hidden')) {
                            openSidebar();
                        } else {
                            closeSidebar();
                        }
                    });
                });

                overlay.addEventListener('click', closeSidebar);

                // Auto-close sidebar on mobile menu link click
                document.querySelectorAll('#admin-sidebar a').forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth <= 1024) {
                            closeSidebar();
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>

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

    @stack('head')
</head>
<body class="admin-page">
    <a class="visually-hidden-focusable skip-link" href="#main-content">Skip to main content</a>

    <div class="admin-shell">
        <x-admin.sidebar />

        <div class="admin-content-shell">
            <div class="admin-page-content">
                <header class="admin-header bg-white">
                    <x-admin.topbar />
                </header>

                <main id="main-content" class="admin-main">
                    <div class="admin-page-toolbar mb-4">
                        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3">
                            <div class="page-heading-copy">
                                <p class="text-uppercase text-muted small mb-2">@yield('section', 'Admin')</p>
                                <h1 class="page-title mb-1">@yield('title', 'Dashboard')</h1>
                                <p class="page-subtitle text-muted mb-0">@yield('subtitle', 'Manage DLH Tulungagung services and content in one central interface.')</p>
                            </div>
                            <div class="d-flex flex-wrap gap-2">@hasSection('actions')@yield('actions')@endif</div>
                        </div>

                        @if (View::hasSection('breadcrumb'))
                            <div class="mt-4 admin-breadcrumb-shell">
                                @yield('breadcrumb')
                            </div>
                        @endif
                    </div>

                    @if(session('success'))
                        <x-admin.alert type="success" message="{{ session('success') }}" />
                    @endif

                    @if(session('error'))
                        <x-admin.alert type="danger" message="{{ session('error') }}" />
                    @endif

                    <section class="admin-page-body">
                        @yield('content')
                    </section>
                </main>

                <x-admin.footer />
            </div>
        </div>
    </div>

    <div class="admin-overlay" aria-hidden="true"></div>
</body>
</html>

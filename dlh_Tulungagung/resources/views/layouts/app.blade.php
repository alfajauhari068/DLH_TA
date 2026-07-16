<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dinas Lingkungan Hidup Kabupaten Tulungagung')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100 bg-gray-50 text-gray-800 font-sans antialiased">
    
    <x-navbar />

    @yield('content')

    @include('layouts.footer')

    @stack('scripts')
</body>
</html>

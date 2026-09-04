@extends('layouts.auth')

@section('title', 'Admin Login')

@section('content')
<div class="min-h-screen flex overflow-hidden bg-white">
    <!-- Left Side: Hero Branding -->
    <div class="hidden lg:flex lg:w-1/2 relative bg-gradient-to-br from-[var(--primary-dark)] via-[var(--primary)] to-[var(--primary-green)] items-center justify-center p-12 overflow-hidden">
        <!-- Decorative shapes -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-72 h-72 bg-white rounded-full mix-blend-screen blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-200 rounded-full mix-blend-screen blur-3xl"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white max-w-md">
            <div class="mb-8">
                <img src="{{ asset('images/icon-dinas.png') }}" alt="Logo DLH" class="w-20 h-20 mx-auto mb-6 drop-shadow-lg">
                <h2 class="text-4xl font-extrabold mb-4 leading-tight">Selamat Datang</h2>
                <p class="text-emerald-100 text-lg leading-relaxed">Panel administrasi Dinas Lingkungan Hidup Kabupaten Tulungagung</p>
            </div>
            
            <div class="mt-16 space-y-4 pt-8 border-t border-white/20">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center flex-shrink-0">
                        <i class="bi bi-shield-check text-emerald-300 text-lg"></i>
                    </div>
                    <p class="text-sm text-emerald-50">Keamanan tingkat enterprise</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center flex-shrink-0">
                        <i class="bi bi-lightning-charge text-emerald-300 text-lg"></i>
                    </div>
                    <p class="text-sm text-emerald-50">Performa optimal dan responsif</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side: Login Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-8">
        <div class="w-full max-w-md">
            <!-- Mobile Header -->
            <div class="lg:hidden mb-8 text-center">
                <img src="{{ asset('images/icon-dinas.png') }}" alt="Logo DLH" class="w-16 h-16 mx-auto mb-4">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Admin Login</h2>
                <p class="text-slate-500">Masuk ke panel administrasi Anda</p>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-2xl border border-slate-100 p-8 shadow-sm">
                <h3 class="hidden lg:block text-2xl font-bold text-slate-900 mb-6">Masuk Admin</h3>

                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                        <div class="flex gap-3 mb-2">
                            <i class="bi bi-exclamation-circle text-red-600"></i>
                            <p class="text-red-800 font-semibold text-sm">Terjadi kesalahan</p>
                        </div>
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-700 text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-900 mb-2">Email</label>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 placeholder:text-slate-400 transition-all duration-300 focus:outline-none focus:border-emerald-600 focus:ring-4 focus:ring-emerald-500/10"
                            value="{{ old('email') }}" 
                            placeholder="name@example.com"
                            required 
                            autofocus 
                            autocomplete="username"
                        >
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-900 mb-2">Kata Sandi</label>
                        <div class="relative">
                            <input 
                                id="password" 
                                type="password" 
                                name="password" 
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl text-slate-900 placeholder:text-slate-400 transition-all duration-300 focus:outline-none focus:border-emerald-600 focus:ring-4 focus:ring-emerald-500/10"
                                placeholder="••••••••"
                                required 
                                autocomplete="current-password"
                            >
                            <button 
                                type="button" 
                                id="toggle-password" 
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-500 hover:text-slate-700 transition-colors"
                                aria-label="Toggle password visibility"
                            >
                                <i class="bi bi-eye" id="toggle-password-icon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center gap-3">
                        <input 
                            class="w-5 h-5 rounded border border-slate-300 text-[var(--primary)] focus:ring-2 focus:ring-emerald-500/20 cursor-pointer" 
                            type="checkbox" 
                            name="remember" 
                            id="remember" 
                            value="1" 
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label class="text-sm font-medium text-slate-700 cursor-pointer" for="remember">Ingat saya di perangkat ini</label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full mt-6 px-4 py-3 bg-[var(--primary)] text-white font-semibold rounded-xl shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-emerald-500/30"
                    >
                        Masuk ke Admin Panel
                    </button>

                    <!-- Back to Home -->
                    <a 
                        href="{{ route('home') }}" 
                        class="w-full block text-center px-4 py-3 bg-slate-100 text-slate-700 font-semibold rounded-xl hover:bg-slate-200 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-slate-400"
                    >
                        <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
                    </a>
                </form>

                <!-- Footer -->
                <p class="text-center text-xs text-slate-500 mt-6">
                    Akses terbatas untuk administrator terdaftar
                </p>
            </div>
        </div>
    </div>
</div>
@endsection


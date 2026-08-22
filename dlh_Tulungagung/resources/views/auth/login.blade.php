@extends('layouts.auth')

@section('title', 'Admin Login')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/icon-dinas.png') }}" alt="Logo DLH" class="mb-3" style="width: 80px; height: auto;">
                        <h3 class="mb-0">Admin Login</h3>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus autocomplete="username">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <div class="input-group">
                                <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
                                <button type="button" class="btn btn-outline-secondary" id="toggle-password" aria-label="Toggle password visibility">
                                    <i class="bi bi-eye" id="toggle-password-icon"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Ingat Saya</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3">Masuk</button>
                        
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary w-100">
                            <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

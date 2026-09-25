@extends('layouts.auth')

@section('title', 'Login - Fresh Flower')

@section('content')

<div class="auth-container">

    <div class="auth-logo">
        <h1>FRESH FLOWER</h1>
        <p>Bunga Segar untuk Setiap Momen</p>
    </div>

    <h2 class="auth-title">LOGIN</h2>

    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <div class="auth-form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"
                   value="{{ old('email') }}" placeholder="Masukkan email" required>
            @error('email')
                <div class="auth-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="auth-form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password"
                   placeholder="Masukkan password" required>
            @error('password')
                <div class="auth-error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="auth-submit-btn">LOGIN</button>
    </form>

    <div class="auth-alt-link">
        Belum punya akun? <a href="{{ route('register') }}">Register</a>
    </div>

    <a href="{{ route('home') }}" class="auth-home-link">← Kembali ke Home</a>

</div>

@endsection

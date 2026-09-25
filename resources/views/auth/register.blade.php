@extends('layouts.auth')

@section('title', 'Register - Fresh Flower')

@section('content')

<div class="auth-container">

    <div class="auth-logo">
        <h1>FRESH FLOWER</h1>
        <p>Bunga Segar untuk Setiap Momen</p>
    </div>

    <h2 class="auth-title">REGISTER</h2>

    <form action="{{ route('register.process') }}" method="POST">
        @csrf

        <div class="auth-form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name"
                   value="{{ old('name') }}" placeholder="Masukkan nama" required>
            @error('name')
                <div class="auth-error">{{ $message }}</div>
            @enderror
        </div>

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

        <div class="auth-form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                   placeholder="Masukkan ulang password" required>
        </div>

        <button type="submit" class="auth-submit-btn">REGISTER</button>
    </form>

    <div class="auth-alt-link">
        Sudah punya akun? <a href="{{ route('login') }}">Login</a>
    </div>

    <a href="{{ route('home') }}" class="auth-home-link">← Kembali ke Home</a>

</div>

@endsection

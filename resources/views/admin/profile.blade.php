@extends('layouts.admin')

@section('title', 'Ubah Profil Admin - Fresh Flower')

@section('content')

<h1>Ubah Profil Admin</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.profile.update') }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Nama</label><br>
        <input type="text" id="name" name="name"
               value="{{ old('name', $admin->name) }}" required>
    </div>

    <br>

    <div>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"
               value="{{ old('email', $admin->email) }}" required>
    </div>

    <br>

    <div>
        <label for="password">Password Baru</label><br>
        <input type="password" id="password" name="password"
               placeholder="Kosongkan jika tidak ingin mengubah password">
    </div>

    <br>

    <div>
        <label for="password_confirmation">Konfirmasi Password Baru</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation"
               placeholder="Ulangi password baru">
    </div>

    <br>

    <button type="submit">Simpan Perubahan</button>

</form>

<br>

<a href="{{ route('admin.dashboard') }}">Kembali ke Dashboard</a>

@endsection

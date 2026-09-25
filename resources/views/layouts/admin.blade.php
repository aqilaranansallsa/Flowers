<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - Fresh Flower')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="admin-body">

    <nav class="admin-navbar">
        <div class="admin-brand">
            <strong>Fresh Flower</strong> &mdash; Admin
        </div>
        <div class="admin-nav-links">
            <a href="{{ route('admin.dashboard') }}"
               class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
            <a href="{{ route('admin.products.index') }}"
               class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                Produk
            </a>
            <a href="{{ route('admin.orders.index') }}"
               class="{{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                Pesanan
            </a>
            <a href="{{ route('admin.profile') }}"
               class="{{ request()->routeIs('admin.profile') ? 'active' : '' }}">
                Profil
            </a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="admin-logout-btn">Logout</button>
            </form>
        </div>
    </nav>

    <main class="admin-content">
        @if(session('success'))
            <p class="admin-alert admin-alert-success">{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>

    @stack('scripts')

</body>

</html>

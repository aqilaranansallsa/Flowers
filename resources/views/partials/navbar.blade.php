{{-- =====================================================
     PARTIAL: NAVBAR
     Digunakan oleh layouts/app.blade.php
     Variabel: $activeNav (string) — 'home', 'products', 'cart', 'orders'
===================================================== --}}

<nav class="navbar">

    {{-- BRAND / LOGO --}}
    <div class="brand">
        <img
            src="{{ asset('images/logo-florea.png') }}"
            alt="Floréa"
            class="logo-image"
        >
        <div class="brand-text">
            <h2>Floréa</h2>
            <p>Fresh Flowers for Every Moment</p>
        </div>
    </div>

    {{-- MENU NAVIGASI --}}
    <div class="nav-menu">

        <a href="{{ route('home') }}"
           class="{{ ($activeNav ?? '') === 'home' ? 'active' : '' }}">
            Home
        </a>

        <a href="{{ route('products.index') }}"
           class="{{ ($activeNav ?? '') === 'products' ? 'active' : '' }}">
            Fresh Flower
        </a>

        <a href="{{ route('cart.index') }}"
           class="{{ ($activeNav ?? '') === 'cart' ? 'active' : '' }}">
            Keranjang
        </a>

        <a href="{{ route('orders.my') }}"
           class="{{ ($activeNav ?? '') === 'orders' ? 'active' : '' }}">
            Pesanan Saya
        </a>

        {{-- TOMBOL AUTH --}}
        @guest

            <a href="{{ route('login') }}" class="nav-button">
                <svg class="nav-icon" viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M4 21c0-4.2 3.6-7 8-7s8 2.8 8 7"/>
                </svg>
                Login
            </a>

            <a href="{{ route('register') }}" class="nav-button register-button">
                <svg class="nav-icon" viewBox="0 0 24 24">
                    <circle cx="9" cy="8" r="4"/>
                    <path d="M2 21c0-4.2 3.1-7 7-7"/>
                    <path d="M18 13v8"/>
                    <path d="M14 17h8"/>
                </svg>
                Register
            </a>

        @else

            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="logout-button">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                        <path d="M16 17l5-5-5-5"/>
                        <path d="M21 12H9"/>
                    </svg>
                    Logout
                </button>
            </form>

        @endguest

    </div>

</nav>

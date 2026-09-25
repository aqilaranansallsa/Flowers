@extends('layouts.app')

@section('title', 'Fresh Flower - Floréa')

@php $activeNav = 'home'; @endphp

@section('content')

{{-- =====================================================
     NOTIFIKASI
===================================================== --}}
@if(session('success'))
    <div class="notification">
        ✅ {{ session('success') }}
    </div>
@endif


{{-- =====================================================
     HERO / BANNER
===================================================== --}}
<section class="hero">

    <div class="hero-content">
        <h1>FLORÉA</h1>
        <h2>Bunga Segar untuk Setiap Momen Spesial Anda</h2>
        <p>Kami menyediakan rangkaian bunga segar berkualitas dengan harga terbaik.</p>
        <a href="{{ route('products.index') }}" class="hero-button">
            🛍️ Belanja Sekarang
        </a>
    </div>

    <div class="hero-image-area">
        <img
            src="{{ asset('images/banner.jpg') }}"
            alt="Banner Fresh Flower"
            class="hero-image"
        >
    </div>

</section>


{{-- =====================================================
     KEUNGGULAN
===================================================== --}}
<section class="advantages">

    <div class="advantage">
        <div class="advantage-icon">
            <svg viewBox="0 0 24 24">
                <circle cx="12" cy="9" r="3"/>
                <path d="M12 12v9"/>
                <path d="M12 15c-3-2-6-1-7 2 3 1 6 0 7-2"/>
                <path d="M12 17c3-2 6-1 7 2-3 1-6 0-7-2"/>
                <path d="M12 9c-2-2-1-5 1-6 2 2 2 4-1 6"/>
                <path d="M10 10c-3 0-5-2-4-5 3 0 5 2 4 5"/>
            </svg>
        </div>
        <div class="advantage-text">
            <h3>Bunga Segar</h3>
            <p>Pilihan setiap hari</p>
        </div>
    </div>

    <div class="advantage">
        <div class="advantage-icon">
            <svg viewBox="0 0 24 24">
                <rect x="2" y="6" width="12" height="10" rx="1"/>
                <path d="M14 9h4l4 4v3h-8"/>
                <circle cx="6" cy="18" r="2"/>
                <circle cx="18" cy="18" r="2"/>
            </svg>
        </div>
        <div class="advantage-text">
            <h3>Pengiriman Cepat</h3>
            <p>Pengiriman aman dan tepat waktu</p>
        </div>
    </div>

    <div class="advantage">
        <div class="advantage-icon">
            <svg viewBox="0 0 24 24">
                <path d="M12 3l8 3v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-3z"/>
                <path d="M8 12l2.5 2.5L16 9"/>
            </svg>
        </div>
        <div class="advantage-text">
            <h3>Pembayaran Aman &amp; Terpercaya</h3>
            <p>Transaksi mudah dan terpercaya</p>
        </div>
    </div>

    <div class="advantage">
        <div class="advantage-icon">
            <svg viewBox="0 0 24 24">
                <path d="M4 13a8 8 0 0 1 16 0"/>
                <rect x="2" y="12" width="4" height="7" rx="2"/>
                <rect x="18" y="12" width="4" height="7" rx="2"/>
                <path d="M18 19c0 2-2 3-5 3"/>
            </svg>
        </div>
        <div class="advantage-text">
            <h3>Layanan 24/7</h3>
            <p>Siap membantu anda kapan saja</p>
        </div>
    </div>

</section>


{{-- =====================================================
     PRODUK UNGGULAN
===================================================== --}}
<section class="products-section">

    <div class="section-line"></div>
    <h2 class="section-title">PRODUK UNGGULAN</h2>
    <p class="section-subtitle">Pilih rangkaian bunga favorit untuk orang tersayang</p>

    @if($products->count())

        <div class="products">

            @foreach($products as $product)

                <div class="product-card">

                    {{-- FOTO PRODUK --}}
                    @if($product->photos->count())
                        <img
                            src="{{ asset('storage/' . $product->photos->first()->photo) }}"
                            alt="{{ $product->name }}"
                            class="product-image"
                        >
                    @else
                        <div class="no-photo">
                            Foto produk<br>belum tersedia
                        </div>
                    @endif

                    {{-- INFORMASI PRODUK --}}
                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>
                        <p class="product-description">
                            {{ $product->description ?: 'Rangkaian bunga pilihan Fresh Flower.' }}
                        </p>
                        <p class="product-price">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <p class="product-stock">Stok: {{ $product->stock }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="product-button">
                            Lihat Produk
                        </a>
                    </div>

                </div>

            @endforeach

        </div>

        <div class="all-products">
            <a href="{{ route('products.index') }}">Lihat Semua Produk</a>
        </div>

    @else

        <p style="text-align:center;">Belum ada produk.</p>

    @endif

</section>

@endsection

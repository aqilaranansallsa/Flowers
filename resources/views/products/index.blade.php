@extends('layouts.app')

@section('title', 'Fresh Flower - Floréa')

@php $activeNav = 'products'; @endphp

@section('content')

<div class="container">

    {{-- =====================================================
         SEARCH
    ===================================================== --}}
    <div class="search-filter">

        <form action="{{ route('products.index') }}" method="GET" class="search-form">
            <div class="search-box">
                <svg class="search-icon" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7"/>
                    <path d="M16.5 16.5L21 21"/>
                </svg>
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Cari produk..."
                    autocomplete="off"
                    autocorrect="off"
                    autocapitalize="off"
                    spellcheck="false"
                >
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <button type="submit" class="search-button" title="Cari produk">Cari</button>
            </div>
        </form>

    </div>


    {{-- =====================================================
         KATEGORI
    ===================================================== --}}
    <div class="category-section">
        <div class="categories">

            <a href="{{ route('products.index', array_filter(['search' => request('search')])) }}"
               class="category-button {{ !request('category') || request('category') == 'Semua' ? 'active' : '' }}">
                Semua
            </a>

            <a href="{{ route('products.index', array_filter(['category' => 'Rose', 'search' => request('search')])) }}"
               class="category-button {{ request('category') == 'Rose' ? 'active' : '' }}">
                Rose
            </a>

            <a href="{{ route('products.index', array_filter(['category' => 'Lily', 'search' => request('search')])) }}"
               class="category-button {{ request('category') == 'Lily' ? 'active' : '' }}">
                Lily
            </a>

            <a href="{{ route('products.index', array_filter(['category' => 'Daisy', 'search' => request('search')])) }}"
               class="category-button {{ request('category') == 'Daisy' ? 'active' : '' }}">
                Daisy
            </a>

            <a href="{{ route('products.index', array_filter(['category' => 'Lainnya', 'search' => request('search')])) }}"
               class="category-button {{ request('category') == 'Lainnya' ? 'active' : '' }}">
                Lainnya
            </a>

        </div>
    </div>


    {{-- =====================================================
         DAFTAR PRODUK
    ===================================================== --}}
    <section class="product-section">

        <h3 class="product-section-title">DAFTAR PRODUK</h3>

        @if($products->count() > 0)

            <div class="products-grid">

                @foreach($products as $product)

                    <div class="product-card-full">

                        {{-- FOTO --}}
                        @if($product->photos->count())
                            <div class="product-image-wrapper">
                                <img
                                    src="{{ asset('storage/' . $product->photos->first()->photo) }}"
                                    alt="{{ $product->name }}"
                                >
                            </div>
                        @else
                            <div class="no-photo-sm">
                                Foto produk<br>belum tersedia
                            </div>
                        @endif

                        {{-- INFO --}}
                        <div class="product-info-center">
                            <h2>{{ strtoupper($product->name) }}</h2>
                            <p class="product-type">{{ $product->type }}</p>
                            <p class="product-description-sm">
                                {{ $product->description ?: 'Rangkaian bunga pilihan untuk setiap momen spesial.' }}
                            </p>
                            <p class="product-price-sm">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </p>
                            <p class="product-stock-sm">Stok: {{ $product->stock }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="product-btn-sm">
                                LIHAT PRODUK
                            </a>
                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="empty">
                @if(request('search') || request('category'))
                    <h3>Produk Tidak Ditemukan</h3>
                    <p>Produk yang kamu cari tidak tersedia.</p>
                    <a href="{{ route('products.index') }}" class="product-btn-sm">
                        TAMPILKAN SEMUA PRODUK
                    </a>
                @else
                    <h3>Belum Ada Produk</h3>
                    <p>Data produk belum tersedia.</p>
                @endif
            </div>

        @endif

    </section>

</div>

@endsection

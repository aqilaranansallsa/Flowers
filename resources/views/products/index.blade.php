<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fresh Flower - Floréa</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fffaf0;
            color: #333;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {
            min-height: 90px;
            padding: 10px 45px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background-color: #fffdf7;

            border-bottom: 1px solid #f2d6a2;
        }


        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }


        .logo-image {
            width: 62px;
            height: 62px;
            object-fit: contain;
        }


        .brand-text h2 {
            margin: 0;

            font-family: Georgia, serif;
            font-style: italic;

            font-size: 25px;

            color: #d95f86;
        }


        .brand-text p {
            margin: 4px 0 0;

            font-size: 12px;

            color: #77705f;
        }


        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
        }


        .nav-menu a {
            text-decoration: none;

            color: #4d493f;

            font-size: 14px;

            padding: 10px 4px;

            transition: 0.2s;
        }


        .nav-menu a:hover {
            color: #d95f86;
        }


        .nav-menu .active {
            color: #d95f86;

            border-bottom: 2px solid #e6b84f;
        }


        /* =====================================================
           LOGIN / REGISTER
        ===================================================== */

        .nav-button {
            display: flex !important;

            align-items: center;
            justify-content: center;

            gap: 8px;

            padding: 9px 18px !important;

            border: 1px solid #e2b86d;

            border-radius: 6px;

            color: #4d493f !important;

            background-color: #fffdf7;
        }


        .nav-button:hover {
            background-color: #fff4d8;
        }


        .register-button {
            background-color: #f8d6df !important;

            border-color: #e7a3b6 !important;
        }


        .register-button:hover {
            background-color: #f4bdce !important;
        }


        .nav-icon {
            width: 20px;
            height: 20px;

            stroke: #d95f86;

            stroke-width: 1.8;

            fill: none;

            stroke-linecap: round;
            stroke-linejoin: round;
        }


        /* =====================================================
           LOGOUT
        ===================================================== */

        .logout-form {
            display: inline;
        }


        .logout-button {
            display: flex;
            align-items: center;

            gap: 8px;

            padding: 9px 18px;

            border: 1px solid #e2b86d;

            border-radius: 6px;

            background-color: #fffdf7;

            cursor: pointer;

            font-size: 14px;

            color: #4d493f;
        }


        .logout-button:hover {
            background-color: #fff4d8;
        }


        /* =====================================================
           MAIN CONTAINER
        ===================================================== */

        .container {
            max-width: 1150px;

            margin: auto;

            padding: 35px 30px 55px;
        }


        /* =====================================================
           SEARCH
        ===================================================== */

        .search-filter {
            width: 100%;

            min-height: 70px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;

            padding: 14px;

            background-color: #fffdf7;

            border: 1px solid #e5cc96;

            border-radius: 7px;

            box-shadow:
                0 3px 10px rgba(217, 145, 104, 0.06);
        }


        .search-form {
            width: 320px;
        }


        .search-box {
            width: 100%;
            height: 42px;

            display: flex;
            align-items: center;

            gap: 10px;

            padding: 0 13px;

            background-color: #ffffff;

            border: 1px solid #d8b95f;

            border-radius: 5px;
        }


        .search-icon {
            width: 22px;
            height: 22px;

            stroke: #d95f86;

            stroke-width: 1.7;

            fill: none;

            flex-shrink: 0;
        }


        .search-box input {
            width: 100%;

            border: none;
            outline: none;

            font-size: 13px;

            color: #555;

            background: transparent;
        }


        .search-box input::placeholder {
            color: #999;
        }


        /* =====================================================
           TOMBOL SEARCH
        ===================================================== */

        .search-button {
            width: 34px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: none;

            background: transparent;

            cursor: pointer;

            padding: 0;

            font-size: 12px;

            color: #d95f86;
        }


        .search-button:hover {
            opacity: 0.75;
        }


        /* =====================================================
           KATEGORI
        ===================================================== */

        .category-section {
            margin-top: 20px;

            padding-bottom: 18px;

            border-bottom: 1px solid #e5d6b4;
        }


        .categories {
            display: flex;

            gap: 10px;

            flex-wrap: wrap;
        }


        .category-button {
            min-width: 90px;

            padding: 11px 20px;

            background-color: #fffdf7;

            border: 1px solid #d8b95f;

            color: #4d493f;

            font-size: 13px;

            text-decoration: none;

            text-align: center;

            transition: 0.2s;

            border-radius: 4px;
        }


        .category-button:hover {
            background-color: #fce2e9;

            border-color: #d95f86;

            color: #b94f70;
        }


        .category-button.active {
            background: linear-gradient(
                90deg,
                #f7d66f,
                #f4bfd0
            );

            border-color: #d9aa61;

            color: #704354;
        }


        /* =====================================================
           DAFTAR PRODUK
        ===================================================== */

        .product-section {
            margin-top: 27px;
        }


        .product-section-title {
            margin: 0 0 28px 3px;

            font-size: 15px;

            color: #4d493f;
        }


        .products {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 20px;
        }


        /* =====================================================
           PRODUCT CARD
        ===================================================== */

        .product-card {
            min-height: 350px;

            padding: 12px;

            display: flex;
            flex-direction: column;

            background-color: #fffdf8;

            border: 1px solid #e2cb98;

            border-radius: 7px;

            box-shadow:
                0 4px 12px rgba(217, 145, 104, 0.08);

            transition: 0.25s;
        }


        .product-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 8px 20px rgba(217, 145, 104, 0.15);
        }


        /* =====================================================
           FOTO PRODUK
        ===================================================== */

        .product-image-wrapper {
            width: 100%;
            height: 190px;

            overflow: hidden;

            border-radius: 5px;

            background: linear-gradient(
                145deg,
                #fff1c9,
                #f8dce4
            );

            margin-bottom: 13px;
        }


        .product-image {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;

            transition: 0.3s;
        }


        .product-card:hover .product-image {
            transform: scale(1.03);
        }


        .no-photo {
            width: 100%;
            height: 190px;

            display: flex;

            align-items: center;
            justify-content: center;

            text-align: center;

            border: 1px dashed #dfbb70;

            border-radius: 5px;

            color: #c48675;

            background-color: #fff7e4;

            font-size: 13px;

            margin-bottom: 13px;
        }


        /* =====================================================
           INFO PRODUK
        ===================================================== */

        .product-info {
            flex: 1;

            text-align: center;
        }


        .product-info h2 {
            margin: 0 0 10px;

            font-size: 14px;

            text-transform: uppercase;

            color: #4d493f;
        }


        .product-type {
            margin: 0 0 8px;

            font-size: 12px;

            color: #77705f;
        }


        .product-description {
            min-height: 42px;

            margin: 0 auto 8px;

            font-size: 12px;

            line-height: 1.45;

            color: #6d685d;
        }


        .product-price {
            margin: 9px 0 3px;

            font-size: 15px;

            font-weight: bold;

            color: #d95f86;
        }


        .product-stock {
            margin: 0 0 12px;

            font-size: 12px;

            color: #77705f;
        }


        /* =====================================================
           BUTTON LIHAT PRODUK
        ===================================================== */

        .product-button {
            display: inline-block;

            padding: 8px 13px;

            text-decoration: none;

            color: #704354;

            background: linear-gradient(
                90deg,
                #fff0c2,
                #f8d9e2
            );

            border: 1px solid #d8b95f;

            border-radius: 4px;

            font-size: 11px;

            font-weight: bold;

            transition: 0.2s;
        }


        .product-button:hover {
            background: linear-gradient(
                90deg,
                #f9df96,
                #f2b7ca
            );

            border-color: #d95f86;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {
            text-align: center;

            background-color: #fffdf8;

            padding: 40px;

            border: 1px solid #e5cc96;

            border-radius: 8px;
        }


        .empty h3 {
            color: #d95f86;
        }


        .empty p {
            color: #77705f;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            background: linear-gradient(
                135deg,
                #f8d5df 0%,
                #fff1d2 48%,
                #f9dfc9 100%
            );

            border-top: 1px solid #e7c36f;

            color: #5d554d;
        }


        .footer-container {
            max-width: 1150px;

            margin: auto;

            padding: 45px 35px 30px;

            display: grid;

            grid-template-columns: 1.5fr 1fr 1fr 1.1fr;

            gap: 40px;
        }


        /* =====================================================
           FOOTER BRAND
        ===================================================== */

        .footer-brand {
            padding-right: 20px;
        }


        .footer-logo {
            width: 72px;
            height: 72px;

            object-fit: contain;

            margin-bottom: 8px;
        }


        .footer-brand h2 {
            margin: 0 0 8px;

            font-family: Georgia, serif;

            font-size: 25px;

            font-style: italic;

            color: #c9577b;
        }


        .footer-brand p {
            margin: 0;

            max-width: 300px;

            font-size: 13px;

            line-height: 1.7;

            color: #756d64;
        }


        /* =====================================================
           FOOTER COLUMN
        ===================================================== */

        .footer-column h3 {
            margin: 0 0 16px;

            font-family: Georgia, serif;

            font-size: 16px;

            color: #9f526d;
        }


        .footer-column h3::after {
            content: "";

            display: block;

            width: 28px;
            height: 2px;

            margin-top: 7px;

            background: #d9ae4d;

            border-radius: 5px;
        }


        .footer-links {
            display: flex;

            flex-direction: column;

            gap: 10px;
        }


        .footer-links a {
            text-decoration: none;

            color: #6d655c;

            font-size: 13px;

            transition: 0.2s;
        }


        .footer-links a:hover {
            color: #d95f86;

            padding-left: 4px;
        }


        /* =====================================================
           FOOTER SERVICE
        ===================================================== */

        .footer-service {
            display: flex;

            flex-direction: column;

            gap: 12px;
        }


        .service-item {
            display: flex;

            align-items: flex-start;

            gap: 10px;

            font-size: 13px;

            line-height: 1.5;

            color: #6d655c;
        }


        .service-icon {
            width: 20px;
            height: 20px;

            min-width: 20px;

            stroke: #d95f86;

            stroke-width: 1.7;

            fill: none;

            stroke-linecap: round;

            stroke-linejoin: round;
        }


        /* =====================================================
           FOOTER BOTTOM
        ===================================================== */

        .footer-bottom {
            border-top: 1px solid rgba(183, 139, 64, 0.25);

            padding: 17px 30px;

            text-align: center;
        }


        .footer-bottom p {
            margin: 0;

            font-size: 12px;

            color: #7c7168;
        }


        .footer-bottom span {
            color: #c9577b;

            font-weight: bold;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1050px) {

            .navbar {
                padding: 10px 25px;
            }


            .nav-menu {
                gap: 15px;
            }


            .products {
                grid-template-columns: repeat(2, 1fr);
            }


            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 750px) {

            .navbar {
                height: auto;

                flex-direction: column;

                gap: 15px;

                padding: 15px;
            }


            .nav-menu {
                flex-wrap: wrap;

                justify-content: center;

                gap: 12px;
            }


            .search-filter {
                flex-direction: column;

                align-items: stretch;
            }


            .search-form {
                width: 100%;
            }


            .products {
                grid-template-columns: 1fr;
            }


            .container {
                padding: 25px 18px 40px;
            }


            .footer-container {
                grid-template-columns: 1fr;

                gap: 30px;

                padding: 35px 25px 25px;
            }


            .footer-brand {
                padding-right: 0;
            }

        }

    </style>

</head>


<body>


{{-- =====================================================
     NAVBAR
===================================================== --}}

<nav class="navbar">


    {{-- LOGO --}}

    <div class="brand">

        <img
            src="{{ asset('images/logo-florea.png') }}"
            alt="Floréa"
            class="logo-image"
        >

        <div class="brand-text">

            <h2>
                Floréa
            </h2>

            <p>
                Fresh Flowers for Every Moment
            </p>

        </div>

    </div>


    {{-- MENU --}}

    <div class="nav-menu">


        {{-- HOME --}}

        <a href="{{ route('home') }}">
            Home
        </a>


        {{-- FRESH FLOWER --}}

        <a
            href="{{ route('products.index') }}"
            class="active"
        >
            Fresh Flower
        </a>


        {{-- KERANJANG --}}

        <a href="{{ route('cart.index') }}">
            Keranjang
        </a>


        {{-- PESANAN SAYA --}}

        <a href="{{ route('orders.my') }}">
            Pesanan Saya
        </a>


        {{-- LOGIN / REGISTER --}}

        @guest


            {{-- LOGIN --}}

            <a
                href="{{ route('login') }}"
                class="nav-button"
            >

                <svg
                    class="nav-icon"
                    viewBox="0 0 24 24"
                >

                    <circle
                        cx="12"
                        cy="8"
                        r="4"
                    />

                    <path
                        d="M4 21c0-4.2 3.6-7 8-7s8 2.8 8 7"
                    />

                </svg>

                Login

            </a>


            {{-- REGISTER --}}

            <a
                href="{{ route('register') }}"
                class="nav-button register-button"
            >

                <svg
                    class="nav-icon"
                    viewBox="0 0 24 24"
                >

                    <circle
                        cx="9"
                        cy="8"
                        r="4"
                    />

                    <path
                        d="M2 21c0-4.2 3.1-7 7-7"
                    />

                    <path
                        d="M18 13v8"
                    />

                    <path
                        d="M14 17h8"
                    />

                </svg>

                Register

            </a>


        @else


            {{-- LOGOUT --}}

            <form
                action="{{ route('logout') }}"
                method="POST"
                class="logout-form"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >

                    <svg
                        class="nav-icon"
                        viewBox="0 0 24 24"
                    >

                        <path
                            d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"
                        />

                        <path
                            d="M16 17l5-5-5-5"
                        />

                        <path
                            d="M21 12H9"
                        />

                    </svg>

                    Logout

                </button>

            </form>


        @endguest

    </div>

</nav>



{{-- =====================================================
     CONTENT
===================================================== --}}

<div class="container">


    {{-- =====================================================
         SEARCH
    ===================================================== --}}

    <div class="search-filter">

        <form
            action="{{ route('products.index') }}"
            method="GET"
            class="search-form"
        >

            <div class="search-box">

                {{-- SATU-SATUNYA IKON SEARCH --}}

                <svg
                    class="search-icon"
                    viewBox="0 0 24 24"
                >

                    <circle
                        cx="11"
                        cy="11"
                        r="7"
                    />

                    <path
                        d="M16.5 16.5L21 21"
                    />

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


                {{-- Mempertahankan kategori ketika melakukan search --}}

                @if(request('category'))

                    <input
                        type="hidden"
                        name="category"
                        value="{{ request('category') }}"
                    >

                @endif


                {{-- Tombol search --}}

                <button
                    type="submit"
                    class="search-button"
                    title="Cari produk"
                >
                    Cari
                </button>

            </div>

        </form>

    </div>



    {{-- =====================================================
         KATEGORI
    ===================================================== --}}

    <div class="category-section">

        <div class="categories">


            {{-- SEMUA --}}

            <a
                href="{{ route('products.index', array_filter([
                    'search' => request('search')
                ])) }}"
                class="category-button
                    {{ !request('category') || request('category') == 'Semua' ? 'active' : '' }}"
            >
                Semua
            </a>


            {{-- ROSE --}}

            <a
                href="{{ route('products.index', array_filter([
                    'category' => 'Rose',
                    'search' => request('search')
                ])) }}"
                class="category-button
                    {{ request('category') == 'Rose' ? 'active' : '' }}"
            >
                Rose
            </a>


            {{-- LILY --}}

            <a
                href="{{ route('products.index', array_filter([
                    'category' => 'Lily',
                    'search' => request('search')
                ])) }}"
                class="category-button
                    {{ request('category') == 'Lily' ? 'active' : '' }}"
            >
                Lily
            </a>


            {{-- DAISY --}}

            <a
                href="{{ route('products.index', array_filter([
                    'category' => 'Daisy',
                    'search' => request('search')
                ])) }}"
                class="category-button
                    {{ request('category') == 'Daisy' ? 'active' : '' }}"
            >
                Daisy
            </a>


            {{-- LAINNYA --}}

            <a
                href="{{ route('products.index', array_filter([
                    'category' => 'Lainnya',
                    'search' => request('search')
                ])) }}"
                class="category-button
                    {{ request('category') == 'Lainnya' ? 'active' : '' }}"
            >
                Lainnya
            </a>


        </div>

    </div>



    {{-- =====================================================
         DAFTAR PRODUK
    ===================================================== --}}

    <section class="product-section">

        <h3 class="product-section-title">
            DAFTAR PRODUK
        </h3>


        @if($products->count() > 0)


            <div class="products">


                @foreach($products as $product)


                    <div class="product-card">


                        {{-- FOTO PRODUK --}}

                        @if($product->photos->count())


                            <div class="product-image-wrapper">

                                <img
                                    src="{{ asset('storage/' . $product->photos->first()->photo) }}"
                                    alt="{{ $product->name }}"
                                    class="product-image"
                                >

                            </div>


                        @else


                            <div class="no-photo">

                                Foto produk
                                <br>
                                belum tersedia

                            </div>


                        @endif



                        {{-- INFORMASI PRODUK --}}

                        <div class="product-info">


                            <h2>
                                {{ strtoupper($product->name) }}
                            </h2>


                            <p class="product-type">

                                {{ $product->type }}

                            </p>


                            <p class="product-description">

                                @if($product->description)

                                    {{ $product->description }}

                                @else

                                    Rangkaian bunga pilihan
                                    untuk setiap momen spesial.

                                @endif

                            </p>


                            <p class="product-price">

                                Rp {{ number_format($product->price, 0, ',', '.') }}

                            </p>


                            <p class="product-stock">

                                Stok: {{ $product->stock }}

                            </p>


                            <a
                                href="{{ route('products.show', $product->id) }}"
                                class="product-button"
                            >

                                LIHAT PRODUK

                            </a>


                        </div>


                    </div>


                @endforeach


            </div>


        @else


            <div class="empty">

                @if(request('search') || request('category'))

                    <h3>
                        Produk Tidak Ditemukan
                    </h3>

                    <p>
                        Produk yang kamu cari tidak tersedia.
                    </p>

                    <a
                        href="{{ route('products.index') }}"
                        class="product-button"
                    >
                        TAMPILKAN SEMUA PRODUK
                    </a>

                @else

                    <h3>
                        Belum Ada Produk
                    </h3>

                    <p>
                        Data produk belum tersedia.
                    </p>

                @endif

            </div>


        @endif

    </section>

</div>



{{-- =====================================================
     FOOTER
===================================================== --}}

<footer class="footer">

    <div class="footer-container">


        {{-- BRAND --}}

        <div class="footer-brand">

            <img
                src="{{ asset('images/logo-florea.png') }}"
                alt="Floréa"
                class="footer-logo"
            >

            <h2>
                Floréa
            </h2>

            <p>
                Fresh flowers untuk menghadirkan keindahan
                dan kebahagiaan di setiap momen spesial Anda.
            </p>

        </div>


        {{-- NAVIGASI --}}

        <div class="footer-column">

            <h3>
                Navigasi
            </h3>

            <div class="footer-links">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <a href="{{ route('products.index') }}">
                    Fresh Flower
                </a>

                <a href="{{ route('cart.index') }}">
                    Keranjang
                </a>

                <a href="{{ route('orders.my') }}">
                    Pesanan Saya
                </a>

            </div>

        </div>


        {{-- LAYANAN --}}

        <div class="footer-column">

            <h3>
                Layanan
            </h3>

            <div class="footer-links">

                <a href="{{ route('products.index') }}">
                    Bunga Segar
                </a>

                <a href="{{ route('products.index') }}">
                    Pengiriman Cepat
                </a>

                <a href="{{ route('products.index') }}">
                    Pembayaran Aman
                </a>

                <a href="{{ route('products.index') }}">
                    Layanan 24/7
                </a>

            </div>

        </div>


        {{-- TENTANG FLORÉA --}}

        <div class="footer-column">

            <h3>
                Tentang Floréa
            </h3>

            <div class="footer-service">


                <div class="service-item">

                    <svg
                        class="service-icon"
                        viewBox="0 0 24 24"
                    >

                        <path
                            d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0z"
                        />

                        <circle
                            cx="12"
                            cy="10"
                            r="2.5"
                        />

                    </svg>

                    <span>
                        Fresh Flower untuk berbagai
                        momen istimewa.
                    </span>

                </div>


                <div class="service-item">

                    <svg
                        class="service-icon"
                        viewBox="0 0 24 24"
                    >

                        <circle
                            cx="12"
                            cy="12"
                            r="9"
                        />

                        <path
                            d="M12 7v5l3 2"
                        />

                    </svg>

                    <span>
                        Melayani kebutuhan bunga
                        dengan sepenuh hati.
                    </span>

                </div>


                <div class="service-item">

                    <svg
                        class="service-icon"
                        viewBox="0 0 24 24"
                    >

                        <path
                            d="M20 11a8.1 8.1 0 0 0-15.5-2"
                        />

                        <path
                            d="M4 5v4h4"
                        />

                        <path
                            d="M4 13a8.1 8.1 0 0 0 15.5 2"
                        />

                        <path
                            d="M20 19v-4h-4"
                        />

                    </svg>

                    <span>
                        Pesanan diproses dengan
                        aman dan terpercaya.
                    </span>

                </div>


            </div>

        </div>


    </div>


    {{-- FOOTER BOTTOM --}}

    <div class="footer-bottom">

        <p>
            © {{ date('Y') }} <span>Floréa</span>.
            All Rights Reserved.
        </p>

    </div>

</footer>


</body>

</html>
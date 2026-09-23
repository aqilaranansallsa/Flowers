<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fresh Flower</title>

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
            height: 90px;
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
           LOGIN REGISTER
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
           NOTIFICATION
        ===================================================== */

        .notification {
            max-width: 900px;
            margin: 15px auto;
            padding: 12px 18px;
            text-align: center;
            background-color: #fff1d0;
            border: 1px solid #e6c06f;
            border-radius: 6px;
            color: #b34f6e;
        }

        /* =====================================================
           HERO / BANNER
        ===================================================== */

        .hero {
            min-height: 380px;
            display: flex;
            align-items: center;
            padding: 45px 8%;
            background: linear-gradient(
                110deg,
                #fff8df 0%,
                #fff4d2 45%,
                #fce3e9 100%
            );
            border-bottom: 1px solid #efd49b;
        }

        .hero-content {
            width: 50%;
            padding-left: 5%;
        }

        .hero-content h1 {
            margin: 0 0 12px;
            font-size: 46px;
            color: #d95f86;
        }

        .hero-content h2 {
            margin: 0 0 18px;
            font-size: 19px;
            font-weight: normal;
            color: #4d493f;
        }

        .hero-content p {
            max-width: 480px;
            line-height: 1.7;
            font-size: 15px;
            color: #6d685d;
            margin-bottom: 25px;
        }

        .hero-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 25px;
            text-decoration: none;
            color: #9c3f60;
            background: linear-gradient(
                90deg,
                #f5d56d,
                #f4b8c9
            );
            border: 1px solid #dfad66;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.2s;
        }

        .hero-button:hover {
            background: linear-gradient(
                90deg,
                #efc957,
                #eea5bb
            );
        }

        /* FOTO BANNER */

        .hero-image-area {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image {
            width: 500px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
        }

        /* =====================================================
           KEUNGGULAN
        ===================================================== */

        .advantages {
            min-height: 135px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            background-color: #fffdf7;
            border-bottom: 1px solid #efd8a9;
        }

        .advantage {
            display: flex;
            align-items: center;
            padding: 22px 30px;
            border-right: 1px solid #eadbb8;
        }

        .advantage:last-child {
            border-right: none;
        }

        .advantage-icon {
            width: 68px;
            height: 68px;
            min-width: 68px;
            border: 1.5px solid #e1b84f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            background: linear-gradient(
                145deg,
                #fff6d5,
                #fce0e8
            );
        }

        .advantage-icon svg {
            width: 34px;
            height: 34px;
            stroke: #d95f86;
            stroke-width: 1.6;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .advantage-text h3 {
            margin: 0 0 7px;
            font-size: 14px;
            color: #4d493f;
        }

        .advantage-text p {
            margin: 0;
            font-size: 12px;
            line-height: 1.5;
            color: #77705f;
        }

        /* =====================================================
           PRODUK UNGGULAN
        ===================================================== */

        .products-section {
            padding: 38px 8% 55px;
            background: linear-gradient(
                180deg,
                #fffaf0,
                #fff6e6
            );
        }

        .section-line {
            width: 45px;
            height: 3px;
            background: linear-gradient(
                90deg,
                #e5bd4f,
                #e27a9b
            );
            margin: 0 auto 10px;
            border-radius: 5px;
        }

        .section-title {
            text-align: center;
            margin: 0;
            font-size: 25px;
            color: #4d493f;
        }

        .section-subtitle {
            text-align: center;
            margin: 9px 0 30px;
            font-size: 14px;
            color: #77705f;
        }

        .products {
            max-width: 900px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 35px;
        }

        .product-card {
            min-height: 215px;
            display: flex;
            gap: 18px;
            padding: 14px;
            background-color: #fffdf8;
            border: 1px solid #e5cc96;
            border-radius: 9px;
            box-shadow: 0 3px 10px rgba(217, 145, 104, 0.10);
            transition: 0.25s;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(217, 145, 104, 0.16);
        }

        .product-image {
            width: 190px;
            height: 185px;
            object-fit: cover;
            border-radius: 6px;
            background-color: #fff2d8;
        }

        .no-photo {
            width: 190px;
            height: 185px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border: 1px dashed #dfbb70;
            border-radius: 6px;
            color: #c48675;
            background-color: #fff7e4;
            font-size: 13px;
        }

        .product-info {
            flex: 1;
            padding-top: 5px;
        }

        .product-info h3 {
            margin: 0 0 9px;
            font-size: 17px;
            color: #4d493f;
        }

        .product-description {
            margin: 0 0 12px;
            font-size: 12px;
            line-height: 1.5;
            color: #6d685d;
        }

        .product-price {
            margin: 8px 0 4px;
            font-size: 19px;
            font-weight: bold;
            color: #d95f86;
        }

        .product-stock {
            margin: 0 0 10px;
            font-size: 12px;
            color: #77705f;
        }

        .product-button {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: #8e4960;
            border: 1px solid #d8b95f;
            border-radius: 5px;
            font-size: 12px;
            background: linear-gradient(
                90deg,
                #fff1c5,
                #fbdde6
            );
        }

        .product-button:hover {
            background: linear-gradient(
                90deg,
                #fbe5a5,
                #f6c5d4
            );
            border-color: #d95f86;
        }

        .all-products {
            text-align: center;
            margin-top: 28px;
        }

        .all-products a {
            display: inline-block;
            padding: 10px 22px;
            text-decoration: none;
            color: #8e4960;
            background: linear-gradient(
                90deg,
                #f6d66f,
                #f3bdcf
            );
            border: 1px solid #dfad66;
            border-radius: 6px;
            font-size: 13px;
        }

        .all-products a:hover {
            background: linear-gradient(
                90deg,
                #efc957,
                #efa8bd
            );
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

        @media (max-width: 1100px) {

            .navbar {
                padding: 10px 25px;
            }

            .nav-menu {
                gap: 15px;
            }

            .hero {
                padding: 35px;
            }

            .advantages {
                grid-template-columns: repeat(2, 1fr);
            }

            .advantage:nth-child(2) {
                border-right: none;
            }

            .products {
                grid-template-columns: 1fr;
                max-width: 700px;
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

            .hero {
                flex-direction: column;
                gap: 30px;
                text-align: center;
            }

            .hero-content {
                width: 100%;
                padding-left: 0;
            }

            .hero-image-area {
                width: 100%;
            }

            .hero-image {
                width: 90%;
                height: 250px;
            }

            .advantages {
                grid-template-columns: 1fr;
            }

            .advantage {
                border-right: none;
                border-bottom: 1px solid #eadbb8;
            }

            .product-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .product-image,
            .no-photo {
                width: 100%;
                max-width: 300px;
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

    {{-- LOGO BARU --}}

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

        <a
            href="{{ route('home') }}"
            class="active"
        >
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

        <h1>
            FLORÉA
        </h1>

        <h2>
            Bunga Segar untuk Setiap Momen Spesial Anda
        </h2>

        <p>
            Kami menyediakan rangkaian bunga segar
            berkualitas dengan harga terbaik.
        </p>

        <a
            href="{{ route('products.index') }}"
            class="hero-button"
        >

            🛍️

            Belanja Sekarang

        </a>

    </div>


    {{-- FOTO BANNER --}}

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


    {{-- BUNGA SEGAR --}}

    <div class="advantage">

        <div class="advantage-icon">

            <svg viewBox="0 0 24 24">

                <circle cx="12" cy="9" r="3" />

                <path d="M12 12v9" />

                <path d="M12 15c-3-2-6-1-7 2 3 1 6 0 7-2" />

                <path d="M12 17c3-2 6-1 7 2-3 1-6 0-7-2" />

                <path d="M12 9c-2-2-1-5 1-6 2 2 2 4-1 6" />

                <path d="M10 10c-3 0-5-2-4-5 3 0 5 2 4 5" />

            </svg>

        </div>

        <div class="advantage-text">

            <h3>
                Bunga Segar
            </h3>

            <p>
                Pilihan setiap hari
            </p>

        </div>

    </div>


    {{-- PENGIRIMAN CEPAT --}}

    <div class="advantage">

        <div class="advantage-icon">

            <svg viewBox="0 0 24 24">

                <rect
                    x="2"
                    y="6"
                    width="12"
                    height="10"
                    rx="1"
                />

                <path d="M14 9h4l4 4v3h-8" />

                <circle cx="6" cy="18" r="2" />

                <circle cx="18" cy="18" r="2" />

            </svg>

        </div>

        <div class="advantage-text">

            <h3>
                Pengiriman Cepat
            </h3>

            <p>
                Pengiriman aman dan tepat waktu
            </p>

        </div>

    </div>


    {{-- PEMBAYARAN AMAN --}}

    <div class="advantage">

        <div class="advantage-icon">

            <svg viewBox="0 0 24 24">

                <path
                    d="M12 3l8 3v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-3z"
                />

                <path d="M8 12l2.5 2.5L16 9" />

            </svg>

        </div>

        <div class="advantage-text">

            <h3>
                Pembayaran Aman &amp; Terpercaya
            </h3>

            <p>
                Transaksi mudah dan terpercaya
            </p>

        </div>

    </div>


    {{-- LAYANAN 24/7 --}}

    <div class="advantage">

        <div class="advantage-icon">

            <svg viewBox="0 0 24 24">

                <path d="M4 13a8 8 0 0 1 16 0" />

                <rect
                    x="2"
                    y="12"
                    width="4"
                    height="7"
                    rx="2"
                />

                <rect
                    x="18"
                    y="12"
                    width="4"
                    height="7"
                    rx="2"
                />

                <path d="M18 19c0 2-2 3-5 3" />

            </svg>

        </div>

        <div class="advantage-text">

            <h3>
                Layanan 24/7
            </h3>

            <p>
                Siap membantu anda kapan saja
            </p>

        </div>

    </div>

</section>


{{-- =====================================================
     PRODUK UNGGULAN
===================================================== --}}

<section class="products-section">

    <div class="section-line"></div>

    <h2 class="section-title">
        PRODUK UNGGULAN
    </h2>

    <p class="section-subtitle">
        Pilih rangkaian bunga favorit untuk orang tersayang
    </p>


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

                            Foto produk
                            <br>
                            belum tersedia

                        </div>

                    @endif


                    {{-- INFORMASI PRODUK --}}

                    <div class="product-info">

                        <h3>
                            {{ $product->name }}
                        </h3>

                        <p class="product-description">

                            @if($product->description)

                                {{ $product->description }}

                            @else

                                Rangkaian bunga pilihan Fresh Flower.

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

                            Lihat Produk

                        </a>

                    </div>

                </div>

            @endforeach

        </div>


        {{-- LIHAT SEMUA PRODUK --}}

        <div class="all-products">

            <a href="{{ route('products.index') }}">

                Lihat Semua Produk

            </a>

        </div>

    @else

        <p style="text-align:center;">

            Belum ada produk.

        </p>

    @endif

</section>


<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

    <div class="footer-container">


        <!-- BRAND -->
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


        <!-- NAVIGASI -->
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


        <!-- LAYANAN -->
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
                    Layanan Pelanggan
                </a>

            </div>

        </div>


        <!-- INFORMASI TOKO -->
        <div class="footer-column">

            <h3>
                Tentang Floréa
            </h3>


            <div class="footer-service">


                <!-- ALAMAT -->
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
                        Jl. Jenderal Soedirman No. 25,
                        Purbalingga, Jawa Tengah.
                    </span>

                </div>


                <!-- TELEPON -->
                <div class="service-item">

                    <svg
                        class="service-icon"
                        viewBox="0 0 24 24"
                    >

                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2
                            19.79 19.79 0 0 1-8.63-3.07
                            19.5 19.5 0 0 1-6-6
                            19.79 19.79 0 0 1-3.07-8.67
                            A2 2 0 0 1 4.11 2h3
                            a2 2 0 0 1 2 1.72
                            12.84 12.84 0 0 0 .7 2.81
                            2 2 0 0 1-.45 2.11L8.09 9.91
                            a16 16 0 0 0 6 6l1.27-1.27
                            a2 2 0 0 1 2.11-.45
                            12.84 12.84 0 0 0 2.81.7
                            A2 2 0 0 1 22 16.92z"
                        />

                    </svg>

                    <span>
                        0812-3456-7890
                    </span>

                </div>


                <!-- EMAIL -->
                <div class="service-item">

                    <svg
                        class="service-icon"
                        viewBox="0 0 24 24"
                    >

                        <rect
                            x="3"
                            y="5"
                            width="18"
                            height="14"
                            rx="2"
                        />

                        <path
                            d="M3 7l9 6 9-6"
                        />

                    </svg>

                    <span>
                        hello@florea.id
                    </span>

                </div>


                <!-- JAM OPERASIONAL -->
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
                        Senin–Sabtu, 08.00–17.00 WIB
                    </span>

                </div>


            </div>

        </div>


    </div>


    <!-- FOOTER BOTTOM -->

    <div class="footer-bottom">

        <p>

            © {{ date('Y') }} <span>Floréa</span>.
            All Rights Reserved.

        </p>

    </div>

</footer>


</body>

</html>
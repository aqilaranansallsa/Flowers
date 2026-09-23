<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Produk - Floréa</title>

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


        /* GARIS AKTIF DISAMAKAN DENGAN FRESH FLOWER */

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
           DETAIL PRODUK
        ===================================================== */

        .detail-container {
            max-width: 1150px;

            margin: auto;

            padding: 35px 30px 55px;
        }


        .detail-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 55px;

            align-items: start;
        }


        /* =====================================================
           GALERI FOTO
        ===================================================== */

        .gallery {
            position: relative;

            padding: 18px;

            border: 1px solid #e2cb98;

            border-radius: 7px;

            background-color: #fffdf8;

            box-shadow:
                0 4px 12px rgba(217, 145, 104, 0.08);
        }


        .main-photo-wrapper {
            position: relative;

            width: 100%;
        }


        .main-photo {
            width: 100%;

            height: 420px;

            object-fit: cover;

            display: block;

            border-radius: 5px;

            background: linear-gradient(
                145deg,
                #fff1c9,
                #f8dce4
            );
        }


        .no-photo {
            width: 100%;

            height: 420px;

            display: flex;

            align-items: center;
            justify-content: center;

            text-align: center;

            border: 1px dashed #dfbb70;

            border-radius: 5px;

            background-color: #fff7e4;

            color: #c48675;

            font-size: 13px;
        }


        /* =====================================================
           TOMBOL FOTO KIRI KANAN
        ===================================================== */

        .gallery-arrow {
            position: absolute;

            top: 50%;

            transform: translateY(-50%);

            width: 42px;
            height: 42px;

            border: 1px solid #e6a6b9;

            border-radius: 50%;

            background: #fff0f4;

            color: #c9567b;

            font-size: 24px;

            cursor: pointer;

            z-index: 2;
        }


        .gallery-arrow:hover {
            background: #f8d3df;
        }


        .gallery-prev {
            left: -18px;
        }


        .gallery-next {
            right: -18px;
        }


        /* =====================================================
           THUMBNAIL
        ===================================================== */

        .thumbnails {
            display: flex;

            justify-content: center;

            gap: 14px;

            margin-top: 15px;

            flex-wrap: wrap;
        }


        .thumbnail {
            width: 82px;
            height: 72px;

            padding: 3px;

            border: 2px solid #d8b95f;

            border-radius: 6px;

            background: #fff;

            cursor: pointer;

            overflow: hidden;
        }


        .thumbnail img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            border-radius: 3px;
        }


        .thumbnail.active {
            border-color: #d95f86;

            box-shadow:
                0 0 0 2px #f8d6df;
        }


        /* =====================================================
           INFORMASI PRODUK
        ===================================================== */

        .product-info {
            padding-top: 2px;
        }


        .product-name {
            margin: 0 0 8px;

            font-size: 29px;

            color: #4d493f;
        }


        .price-row,
        .stock-row {
            display: grid;

            grid-template-columns: 85px 15px 1fr;

            margin-bottom: 7px;

            font-size: 14px;
        }


        .price-row strong,
        .stock-row strong {
            color: #4d493f;
        }


        .price {
            color: #d95f86;

            font-size: 18px;

            font-weight: bold;
        }


        .stock {
            color: #555;
        }


        /* =====================================================
           INFORMASI DETAIL
        ===================================================== */

        .info-section {
            margin-top: 28px;

            border-top: 1px solid #e5d6b4;
        }


        .info-box {
            padding: 12px 15px;

            border-bottom: 1px solid #e5d6b4;
        }


        .info-title {
            margin: 0 0 7px;

            font-size: 13px;

            color: #4d493f;
        }


        .info-text {
            margin: 0;

            font-size: 13px;

            line-height: 1.6;

            color: #6d685d;
        }


        .info-center {
            text-align: center;
        }


        /* =====================================================
           JUMLAH PRODUK
        ===================================================== */

        .quantity-section {
            padding: 17px 15px 10px;
        }


        .quantity-title {
            margin: 0 0 10px;

            font-size: 13px;

            color: #4d493f;
        }


        .quantity-control {
            display: flex;

            width: 122px;

            height: 36px;

            border: 1px solid #e4a8b9;

            border-radius: 5px;

            overflow: hidden;

            background: white;
        }


        .quantity-control button {
            width: 40px;

            border: none;

            background: #fff2f5;

            color: #d55f84;

            font-size: 18px;

            cursor: pointer;
        }


        .quantity-control button:hover {
            background: #f9d9e2;
        }


        .quantity-control input {
            width: 42px;

            border: none;

            border-left: 1px solid #e4a8b9;

            border-right: 1px solid #e4a8b9;

            text-align: center;

            font-size: 14px;

            outline: none;
        }


        /* =====================================================
           TAMBAH KERANJANG
        ===================================================== */

        .cart-form {
            margin-top: 15px;
        }


        .cart-button {
            width: 100%;

            height: 48px;

            border: 1px solid #d95f86;

            border-radius: 5px;

            background: linear-gradient(
                90deg,
                #d95f86,
                #ee7da0
            );

            color: white;

            font-size: 14px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.2s;
        }


        .cart-button:hover {
            background: linear-gradient(
                90deg,
                #c9577b,
                #e56c94
            );
        }


        /* =====================================================
           KEUNGGULAN
        ===================================================== */

        .advantages {
            max-width: 1050px;

            margin: 0 auto 55px;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            border: 1px solid #d8b96b;

            border-radius: 4px;

            background: #fffdf8;
        }


        .advantage {
            min-height: 88px;

            display: flex;

            align-items: center;
            justify-content: center;

            text-align: center;

            padding: 15px;

            border-right: 1px solid #d8b96b;
        }


        .advantage:last-child {
            border-right: none;
        }


        .advantage h3 {
            margin: 0 0 4px;

            font-size: 14px;

            color: #4d493f;
        }


        .advantage p {
            margin: 0;

            font-size: 12px;

            color: #77705f;
        }


        /* =====================================================
           FOOTER
           DISAMAKAN DENGAN FRESH FLOWER INDEX
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

        @media (max-width: 1050px) {

            .navbar {
                padding: 10px 25px;
            }


            .nav-menu {
                gap: 15px;
            }


            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 900px) {

            .detail-grid {
                grid-template-columns: 1fr;

                gap: 35px;
            }


            .advantages {
                margin-left: 25px;

                margin-right: 25px;
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


            .detail-container {
                padding: 25px 18px 40px;
            }


            .main-photo,
            .no-photo {
                height: 300px;
            }


            .product-name {
                font-size: 24px;
            }


            .advantages {
                grid-template-columns: 1fr;

                margin: 0 18px 40px;
            }


            .advantage {
                border-right: none;

                border-bottom: 1px solid #d8b96b;
            }


            .advantage:last-child {
                border-bottom: none;
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


    <div class="nav-menu">


        <a href="{{ route('home') }}">
            Home
        </a>


        <a
            href="{{ route('products.index') }}"
            class="active"
        >
            Fresh Flower
        </a>


        <a href="{{ route('cart.index') }}">
            Keranjang
        </a>


        <a href="{{ route('orders.my') }}">
            Pesanan Saya
        </a>


        @guest


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
     DETAIL PRODUK
===================================================== --}}

<main class="detail-container">


    <div class="detail-grid">


        {{-- =================================================
             GALERI FOTO
        ================================================== --}}

        <div class="gallery">


            @if($product->photos->count())


                <div class="main-photo-wrapper">


                    <button
                        type="button"
                        class="gallery-arrow gallery-prev"
                        onclick="previousPhoto()"
                    >
                        ‹
                    </button>


                    <img
                        id="mainPhoto"
                        src="{{ asset('storage/' . $product->photos->first()->photo) }}"
                        alt="{{ $product->name }}"
                        class="main-photo"
                    >


                    <button
                        type="button"
                        class="gallery-arrow gallery-next"
                        onclick="nextPhoto()"
                    >
                        ›
                    </button>


                </div>


                <div class="thumbnails">


                    @foreach($product->photos as $index => $photo)


                        <button
                            type="button"
                            class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                            onclick="changePhoto({{ $index }})"
                        >

                            <img
                                src="{{ asset('storage/' . $photo->photo) }}"
                                alt="Foto {{ $index + 1 }}"
                            >

                        </button>


                    @endforeach


                </div>


            @else


                <div class="no-photo">

                    Foto produk
                    <br>
                    belum tersedia

                </div>


            @endif


        </div>



        {{-- =================================================
             INFORMASI PRODUK
        ================================================== --}}

        <div class="product-info">


            <h2 class="product-name">

                {{ strtoupper($product->name) }}

            </h2>


            <div class="price-row">

                <strong>
                    Harga
                </strong>

                <span>
                    :
                </span>

                <span class="price">

                    Rp{{ number_format($product->price, 0, ',', '.') }}

                </span>

            </div>


            <div class="stock-row">

                <strong>
                    Stok
                </strong>

                <span>
                    :
                </span>

                <span class="stock">

                    {{ $product->stock }}

                </span>

            </div>



            <div class="info-section">


                <div class="info-box">

                    <h3 class="info-title">
                        Deskripsi
                    </h3>

                    <p class="info-text">

                        {{ $product->description ?? 'Rangkaian bunga pilihan untuk berbagai momen spesial.' }}

                    </p>

                </div>


                <div class="info-box">

                    <h3 class="info-title">
                        Komposisi bunga
                    </h3>

                    <p class="info-text">

                        {{ $product->composition ?? '-' }}

                    </p>

                </div>


                <div class="info-box">

                    <h3 class="info-title">
                        Jumlah tangkai
                    </h3>

                    <p class="info-text">

                        {{ $product->jumlah_tangkai ?? '-' }} tangkai

                    </p>

                </div>


            </div>



            {{-- =================================================
                 JUMLAH PRODUK
            ================================================== --}}

            <div class="quantity-section">

                <h3 class="quantity-title">
                    Jumlah Produk
                </h3>


                <div class="quantity-control">


                    <button
                        type="button"
                        onclick="decreaseQuantity()"
                    >
                        -
                    </button>


                    <input
                        type="text"
                        id="quantity"
                        value="1"
                        readonly
                    >


                    <button
                        type="button"
                        onclick="increaseQuantity()"
                    >
                        +
                    </button>


                </div>

            </div>



            {{-- =================================================
                 TAMBAH KE KERANJANG
            ================================================== --}}

            <form
                action="{{ route('cart.add', $product->id) }}"
                method="POST"
                class="cart-form"
            >

                @csrf

                <input
                    type="hidden"
                    name="quantity"
                    id="cartQuantity"
                    value="1"
                >


                <button
                    type="submit"
                    class="cart-button"
                >

                    🛒 &nbsp; TAMBAH KE KERANJANG

                </button>

            </form>


        </div>


    </div>

</main>



{{-- =====================================================
     KEUNGGULAN
===================================================== --}}

<section class="advantages">


    <div class="advantage">

        <div>

            <h3>
                Pembayaran Aman
            </h3>

            <p>
                100% aman dan terpercaya
            </p>

        </div>

    </div>


    <div class="advantage">

        <div>

            <h3>
                Pengiriman Cepat
            </h3>

            <p>
                Dikirim tepat waktu
            </p>

        </div>

    </div>


    <div class="advantage">

        <div>

            <h3>
                Layanan 24/7
            </h3>

            <p>
                Siap membantu anda
            </p>

        </div>

    </div>


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



{{-- =====================================================
     JAVASCRIPT GALERI & JUMLAH PRODUK
===================================================== --}}

<script>

    const photos = @json(
        $product->photos->map(function ($photo) {
            return asset('storage/' . $photo->photo);
        })->values()
    );


    let currentPhoto = 0;


    function changePhoto(index) {

        if (!photos.length) {
            return;
        }

        currentPhoto = index;

        document.getElementById('mainPhoto').src =
            photos[currentPhoto];


        const thumbnails =
            document.querySelectorAll('.thumbnail');


        thumbnails.forEach(function(thumbnail, i) {

            thumbnail.classList.toggle(
                'active',
                i === currentPhoto
            );

        });

    }


    function previousPhoto() {

        if (!photos.length) {
            return;
        }

        currentPhoto--;


        if (currentPhoto < 0) {
            currentPhoto = photos.length - 1;
        }


        changePhoto(currentPhoto);

    }


    function nextPhoto() {

        if (!photos.length) {
            return;
        }

        currentPhoto++;


        if (currentPhoto >= photos.length) {
            currentPhoto = 0;
        }


        changePhoto(currentPhoto);

    }



    /* =====================================================
       JUMLAH PRODUK
    ===================================================== */

    let quantity = 1;


    function decreaseQuantity() {

        if (quantity > 1) {

            quantity--;

            document.getElementById('quantity').value =
                quantity;

            document.getElementById('cartQuantity').value =
                quantity;

        }

    }


    function increaseQuantity() {

        const stock = {{ $product->stock }};


        if (quantity < stock) {

            quantity++;

            document.getElementById('quantity').value =
                quantity;

            document.getElementById('cartQuantity').value =
                quantity;

        }

    }

</script>


</body>

</html>
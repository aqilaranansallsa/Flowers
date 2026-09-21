<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keranjang - Floréa</title>


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


        /* =====================================================
           NAV MENU
        ===================================================== */

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
           SESSION MESSAGE
        ===================================================== */

        .success,
        .error {
            padding: 12px 16px;

            margin-bottom: 20px;

            border-radius: 7px;

            font-size: 13px;
        }

        .success {
            background-color: #eef8ed;

            border: 1px solid #b9dcb6;

            color: #477344;
        }

        .error {
            background-color: #fff0f0;

            border: 1px solid #e4b2b2;

            color: #a34b4b;
        }


        /* =====================================================
           PRODUCT CARD
        ===================================================== */

        .cart-card {
            width: 100%;

            min-height: 230px;

            margin-bottom: 20px;

            padding: 18px;

            display: flex;

            align-items: center;

            gap: 25px;

            background-color: #fffdf8;

            border: 1px solid #e2cb98;

            border-radius: 7px;

            box-shadow:
                0 4px 12px rgba(217, 145, 104, 0.08);

            transition: 0.25s;
        }

        .cart-card:hover {
            box-shadow:
                0 8px 20px rgba(217, 145, 104, 0.13);
        }


        /* =====================================================
           PRODUCT IMAGE
        ===================================================== */

        .product-image {
            width: 190px;

            height: 190px;

            flex-shrink: 0;

            overflow: hidden;

            border-radius: 5px;

            background: linear-gradient(
                145deg,
                #fff1c9,
                #f8dce4
            );

            border: 1px solid #e2cb98;
        }

        .product-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;

            transition: 0.3s;
        }

        .cart-card:hover .product-image img {
            transform: scale(1.03);
        }

        .no-image {
            width: 100%;
            height: 100%;

            display: flex;

            align-items: center;
            justify-content: center;

            text-align: center;

            color: #c48675;

            background-color: #fff7e4;

            font-size: 13px;
        }


        /* =====================================================
           PRODUCT INFO
        ===================================================== */

        .product-info {
            flex: 1;

            min-width: 0;
        }

        .product-name {
            margin: 0 0 12px;

            font-size: 16px;

            font-weight: bold;

            color: #4d493f;

            text-transform: uppercase;
        }

        .product-price {
            margin: 0 0 14px;

            font-size: 13px;

            font-weight: bold;

            color: #4d493f;
        }

        .product-price span {
            color: #d95f86;
        }


        /* =====================================================
           QUANTITY
        ===================================================== */

        .quantity-label {
            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 14px;

            font-size: 13px;

            font-weight: bold;

            color: #4d493f;
        }

        .quantity-form {
            display: flex;

            align-items: center;

            gap: 0;
        }

        .quantity-form button {
            width: 32px;

            height: 30px;

            padding: 0;

            border: 1px solid #d8b95f;

            background-color: #fffdf7;

            color: #704354;

            font-size: 17px;

            cursor: pointer;
        }

        .quantity-form button:first-child {
            border-radius: 4px 0 0 4px;
        }

        .quantity-form button:last-child {
            border-radius: 0 4px 4px 0;
        }

        .quantity-form button:hover {
            background-color: #fff2d1;

            color: #d95f86;
        }

        .quantity-form input {
            width: 45px;

            height: 30px;

            padding: 0;

            text-align: center;

            border-top: 1px solid #d8b95f;

            border-bottom: 1px solid #d8b95f;

            border-left: none;

            border-right: none;

            background-color: #ffffff;

            color: #555;

            font-size: 13px;
        }

        .quantity-form input::-webkit-outer-spin-button,
        .quantity-form input::-webkit-inner-spin-button {
            -webkit-appearance: none;

            margin: 0;
        }

        .quantity-form input[type=number] {
            -moz-appearance: textfield;
        }


        /* =====================================================
           SUBTOTAL
        ===================================================== */

        .subtotal {
            margin: 0 0 15px;

            font-size: 13px;

            font-weight: bold;

            color: #4d493f;
        }

        .subtotal span {
            color: #d95f86;
        }


        /* =====================================================
           DELETE BUTTON
        ===================================================== */

        .delete-form {
            margin: 0;
        }

        .delete-button {
            padding: 8px 15px;

            border: 1px solid #d8b95f;

            border-radius: 4px;

            background-color: #fffdf7;

            color: #704354;

            font-size: 11px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.2s;
        }

        .delete-button:hover {
            background-color: #f8dce4;

            border-color: #d95f86;

            color: #b94f70;
        }


        /* =====================================================
           ORDER SUMMARY
        ===================================================== */

        .summary {
            width: 560px;

            max-width: 100%;

            margin: 38px auto 0;

            padding: 22px 30px 25px;

            text-align: center;

            background-color: #fffdf8;

            border: 1px solid #e2cb98;

            border-radius: 7px;

            box-shadow:
                0 4px 12px rgba(217, 145, 104, 0.08);
        }

        .summary-title {
            margin: 0 0 20px;

            font-size: 15px;

            color: #4d493f;
        }

        .summary-row {
            display: flex;

            justify-content: center;

            gap: 6px;

            margin-bottom: 7px;

            font-size: 13px;

            font-weight: bold;

            color: #4d493f;
        }

        .summary-row .value {
            color: #d95f86;
        }


        /* =====================================================
           CHECKOUT BUTTON
        ===================================================== */

        .checkout-button {
            display: flex;

            align-items: center;

            justify-content: center;

            width: 360px;

            max-width: 100%;

            height: 42px;

            margin: 25px auto 0;

            border: 1px solid #d8b95f;

            border-radius: 4px;

            background: linear-gradient(
                90deg,
                #fff0c2,
                #f8d9e2
            );

            color: #704354;

            text-decoration: none;

            font-size: 11px;

            font-weight: bold;

            transition: 0.2s;
        }

        .checkout-button:hover {
            background: linear-gradient(
                90deg,
                #f9df96,
                #f2b7ca
            );

            border-color: #d95f86;
        }


        /* =====================================================
           EMPTY CART
        ===================================================== */

        .empty {
            max-width: 600px;

            margin: 35px auto;

            padding: 45px 30px;

            text-align: center;

            background-color: #fffdf8;

            border: 1px solid #e2cb98;

            border-radius: 7px;

            box-shadow:
                0 4px 12px rgba(217, 145, 104, 0.08);
        }

        .empty h3 {
            margin: 0 0 15px;

            font-size: 17px;

            color: #d95f86;
        }

        .empty p {
            margin: 0 0 22px;

            font-size: 13px;

            color: #77705f;
        }

        .shop-button {
            display: inline-block;

            padding: 9px 16px;

            border: 1px solid #d8b95f;

            border-radius: 4px;

            background: linear-gradient(
                90deg,
                #fff0c2,
                #f8d9e2
            );

            color: #704354;

            text-decoration: none;

            font-size: 11px;

            font-weight: bold;

            transition: 0.2s;
        }

        .shop-button:hover {
            background: linear-gradient(
                90deg,
                #f9df96,
                #f2b7ca
            );

            border-color: #d95f86;
        }


        /* =====================================================
           BACK LINK
        ===================================================== */

        .back-link {
            display: inline-block;

            margin-top: 28px;

            color: #d95f86;

            text-decoration: none;

            font-size: 13px;
        }

        .back-link:hover {
            text-decoration: underline;
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

        @media (max-width: 1050px) {

            .navbar {
                padding: 10px 25px;
            }

            .nav-menu {
                gap: 15px;
            }

            .cart-card {
                gap: 22px;

                padding: 16px;
            }

            .product-image {
                width: 175px;

                height: 175px;
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

            .cart-card {
                flex-direction: column;

                align-items: stretch;

                gap: 18px;
            }

            .product-image {
                width: 100%;

                height: 230px;
            }

            .quantity-label {
                flex-wrap: wrap;
            }

            .summary {
                margin-top: 30px;
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


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar">

    <div class="brand">

        <img
            src="{{ asset('images/logo-florea.png') }}"
            alt="Floréa"
            class="logo-image"
        >

        <div class="brand-text">

            <h2>Floréa</h2>

            <p>
                Fresh Flowers for Every Moment
            </p>

        </div>

    </div>


    <div class="nav-menu">

        <a href="{{ route('home') }}">
            Home
        </a>

        <a href="{{ route('products.index') }}">
            Fresh Flower
        </a>

        <a
            href="{{ route('cart.index') }}"
            class="active"
        >
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



<!-- =====================================================
     CONTENT
===================================================== -->

<div class="container">


    @if(session('success'))

        <div class="success">

            {{ session('success') }}

        </div>

    @endif


    @if(session('error'))

        <div class="error">

            {{ session('error') }}

        </div>

    @endif


    @if($products->isEmpty())


        <!-- =================================================
             EMPTY CART
        ================================================== -->

        <div class="empty">

            <h3>
                Keranjang masih kosong
            </h3>

            <p>
                Yuk pilih fresh flower favoritmu terlebih dahulu.
            </p>

            <a
                href="{{ route('products.index') }}"
                class="shop-button"
            >
                Belanja Sekarang
            </a>

        </div>


    @else


        @php

            $totalProduk = 0;
            $totalHarga = 0;

        @endphp


        <!-- =================================================
             PRODUCT LIST
        ================================================== -->

        @foreach($products as $product)

            @php

                $qty = $cart[$product->id] ?? 1;

                $subtotal = $product->price * $qty;

                $totalProduk += $qty;

                $totalHarga += $subtotal;

                $photo = $product->photos->first();

            @endphp


            <div class="cart-card">


                <!-- FOTO PRODUK -->

                <div class="product-image">

                    @if($photo)

                        <img
                            src="{{ asset('storage/' . $photo->photo) }}"
                            alt="{{ $product->name }}"
                        >

                    @else

                        <div class="no-image">

                            Foto produk
                            <br>
                            belum tersedia

                        </div>

                    @endif

                </div>


                <!-- INFORMASI PRODUK -->

                <div class="product-info">


                    <h2 class="product-name">

                        {{ strtoupper($product->name) }}

                    </h2>


                    <p class="product-price">

                        Harga :

                        <span>

                            Rp
                            {{ number_format($product->price, 0, ',', '.') }}

                        </span>

                    </p>


                    <div class="quantity-label">

                        <span>
                            Jumlah :
                        </span>


                        <form
                            action="{{ route('cart.update', $product->id) }}"
                            method="POST"
                            class="quantity-form"
                        >

                            @csrf

                            @method('PATCH')


                            <button
                                type="button"
                                onclick="changeQuantity(this, -1)"
                            >
                                −
                            </button>


                            <input
                                type="number"
                                name="qty"
                                value="{{ $qty }}"
                                min="1"
                                readonly
                            >


                            <button
                                type="button"
                                onclick="changeQuantity(this, 1)"
                            >
                                +
                            </button>

                        </form>

                    </div>


                    <p class="subtotal">

                        Subtotal :

                        <span>

                            Rp
                            {{ number_format($subtotal, 0, ',', '.') }}

                        </span>

                    </p>


                    <form
                        action="{{ route('cart.remove', $product->id) }}"
                        method="POST"
                        class="delete-form"
                    >

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="delete-button"
                        >
                            HAPUS
                        </button>

                    </form>


                </div>

            </div>

        @endforeach


        <!-- =================================================
             SUMMARY
        ================================================== -->

        <div class="summary">

            <h3 class="summary-title">
                RINGKASAN PESANAN
            </h3>


            <div class="summary-row">

                <span>
                    TOTAL PRODUK :
                </span>

                <span class="value">
                    {{ $totalProduk }}
                </span>

            </div>


            <div class="summary-row">

                <span>
                    TOTAL HARGA :
                </span>

                <span class="value">

                    Rp
                    {{ number_format($totalHarga, 0, ',', '.') }}

                </span>

            </div>


            <a
                href="{{ route('checkout.index') }}"
                class="checkout-button"
            >
                LANJUT KE PEMESANAN
            </a>

        </div>


    @endif


    <a
        href="{{ route('products.index') }}"
        class="back-link"
    >
        ← Kembali ke Fresh Flower
    </a>


</div>



<!-- =====================================================
     FOOTER
===================================================== -->

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
                    Layanan 24/7
                </a>

            </div>

        </div>


        <!-- TENTANG FLORÉA -->

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
                        Pesanan diproses dengan aman
                        dan terpercaya.
                    </span>

                </div>


            </div>

        </div>


    </div>


    <div class="footer-bottom">

        <p>
            © {{ date('Y') }}
            <span>Floréa</span>.
            All Rights Reserved.
        </p>

    </div>


</footer>



<!-- =====================================================
     QUANTITY SCRIPT
===================================================== -->

<script>

    function changeQuantity(button, change) {

        const form = button.closest('.quantity-form');

        const input = form.querySelector('input[name="qty"]');

        let quantity = parseInt(input.value) || 1;

        quantity += change;

        if (quantity < 1) {
            quantity = 1;
        }

        input.value = quantity;

        form.submit();

    }

</script>


</body>

</html>
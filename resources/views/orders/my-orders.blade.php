<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pesanan Saya - Floréa</title>


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


        /* =========================
           NAVBAR
        ========================= */

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


        /* =========================
           CONTENT
        ========================= */

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 40px 25px 50px;
        }

        .success {
            max-width: 900px;
            margin: 0 auto 18px;
            padding: 12px 15px;
            background-color: #f1f8ef;
            border: 1px solid #c9ddc3;
            border-radius: 6px;
            color: #58734f;
            font-size: 13px;
        }

        .orders {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .order-card {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            background-color: #fffdf8;
            border: 1px solid #e2cb98;
            border-radius: 7px;
            box-shadow: 0 3px 10px rgba(217, 145, 104, 0.07);
            overflow: hidden;
        }


        /* =========================
           ORDER HEADER
        ========================= */

        .order-header {
            padding: 15px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            background-color: #fffdf7;
            border-bottom: 1px solid #ead9b4;
        }

        .invoice-label {
            margin-bottom: 5px;
            font-size: 11px;
            color: #8b8175;
        }

        .invoice {
            font-size: 15px;
            font-weight: bold;
            color: #4d493f;
        }

        .status-wrapper {
            display: flex;
            align-items: center;
            gap: 7px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .status {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: bold;
        }

        .status-order {
            background-color: #fce2e9;
            color: #b94f70;
            border: 1px solid #e7b5c4;
        }

        .status-payment {
            background-color: #fff1c9;
            color: #98752e;
            border: 1px solid #e5c879;
        }


        /* =========================
           ORDER BODY
        ========================= */

        .order-body {
            padding: 17px 18px;
        }

        .order-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 13px 25px;
            margin-bottom: 17px;
        }

        .info-item {
            font-size: 12px;
            line-height: 1.5;
            color: #6d685d;
        }

        .info-item strong {
            display: block;
            margin-bottom: 3px;
            font-size: 10px;
            color: #4d493f;
        }


        /* =========================
           PRODUCT
        ========================= */

        .product-section {
            padding-top: 15px;
            border-top: 1px solid #ead9b4;
            margin-bottom: 15px;
        }

        .product-title {
            margin-bottom: 10px;
            font-size: 12px;
            font-weight: bold;
            color: #4d493f;
        }

        .product-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 8px 0;
            border-bottom: 1px dashed #e5d6b4;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-name {
            font-size: 12px;
            color: #555046;
        }

        .product-qty {
            margin-top: 3px;
            font-size: 10px;
            color: #8a8173;
        }

        .product-subtotal {
            font-size: 12px;
            font-weight: bold;
            color: #6d5c45;
        }


        /* =========================
           TOTAL
        ========================= */

        .total-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px 0;
            border-top: 1px solid #ead9b4;
            border-bottom: 1px solid #ead9b4;
            margin-bottom: 15px;
        }

        .total-label {
            font-size: 12px;
            color: #6d685d;
        }

        .total-price {
            font-size: 16px;
            font-weight: bold;
            color: #d95f86;
        }

        .order-action {
            display: flex;
            justify-content: flex-end;
        }

        .detail-button {
            display: inline-block;
            padding: 8px 14px;
            text-decoration: none;
            color: #704354;
            background: linear-gradient(90deg, #fff0c2, #f8d9e2);
            border: 1px solid #d8b95f;
            border-radius: 4px;
            font-size: 10px;
            font-weight: bold;
            transition: 0.2s;
        }

        .detail-button:hover {
            background: linear-gradient(90deg, #f9df96, #f2b7ca);
            border-color: #d95f86;
        }


        /* =========================
           EMPTY
        ========================= */

        .empty {
            max-width: 900px;
            margin: auto;
            text-align: center;
            background-color: #fffdf8;
            padding: 40px 25px;
            border: 1px solid #e5cc96;
            border-radius: 8px;
        }

        .empty-icon {
            font-size: 34px;
            margin-bottom: 10px;
        }

        .empty h3 {
            margin: 0 0 8px;
            font-family: Georgia, serif;
            color: #d95f86;
            font-size: 19px;
        }

        .empty p {
            margin: 0 0 20px;
            font-size: 12px;
            color: #77705f;
        }

        .shop-button {
            display: inline-block;
            padding: 8px 15px;
            text-decoration: none;
            color: #704354;
            background: linear-gradient(90deg, #fff0c2, #f8d9e2);
            border: 1px solid #d8b95f;
            border-radius: 4px;
            font-size: 10px;
            font-weight: bold;
            transition: 0.2s;
        }

        .shop-button:hover {
            background: linear-gradient(90deg, #f9df96, #f2b7ca);
            border-color: #d95f86;
        }


        /* =========================
           FOOTER
        ========================= */

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


        /* =========================
           RESPONSIVE
        ========================= */

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

            .container {
                padding: 30px 18px 45px;
            }

            .order-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .status-wrapper {
                justify-content: flex-start;
            }

            .order-info {
                grid-template-columns: 1fr;
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


        @media (max-width: 500px) {

            .product-item {
                align-items: flex-start;
                flex-direction: column;
                gap: 5px;
            }

            .product-subtotal {
                align-self: flex-end;
            }

            .total-section {
                gap: 15px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

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

        <a href="{{ route('products.index') }}">
            Fresh Flower
        </a>

        <a href="{{ route('cart.index') }}">
            Keranjang
        </a>

        <a
            href="{{ route('orders.my') }}"
            class="active"
        >
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


<!-- =========================
     CONTENT
========================= -->

<div class="container">


    @if(session('success'))

        <div class="success">

            {{ session('success') }}

        </div>

    @endif


    @if($orders->count() > 0)

        <div class="orders">


            @foreach($orders as $order)

                <div class="order-card">


                    <div class="order-header">

                        <div>

                            <div class="invoice-label">
                                NOMOR PESANAN
                            </div>

                            <div class="invoice">
                                {{ $order->invoice }}
                            </div>

                        </div>


                        <div class="status-wrapper">

                            <span class="status status-order">

                                Pesanan:
                                {{ ucfirst($order->status) }}

                            </span>


                            <span class="status status-payment">

                                Pembayaran:
                                {{ ucfirst($order->status_pembayaran) }}

                            </span>

                        </div>

                    </div>


                    <div class="order-body">


                        <div class="order-info">


                            <div class="info-item">

                                <strong>
                                    Tanggal Pesanan
                                </strong>

                                {{ $order->created_at->format('d-m-Y H:i') }}

                            </div>


                            <div class="info-item">

                                <strong>
                                    Tanggal Pengiriman
                                </strong>

                                {{ \Carbon\Carbon::parse($order->tanggal_pengiriman)->format('d-m-Y') }}

                            </div>


                            <div class="info-item">

                                <strong>
                                    Metode Pembayaran
                                </strong>

                                {{ ucfirst($order->metode_pembayaran) }}

                            </div>


                            <div class="info-item">

                                <strong>
                                    Nama Penerima
                                </strong>

                                {{ $order->nama_penerima }}

                            </div>


                        </div>


                        <div class="product-section">


                            <div class="product-title">
                                PRODUK
                            </div>


                            @foreach($order->orderDetails as $detail)

                                <div class="product-item">


                                    <div>

                                        <div class="product-name">

                                            {{ $detail->product->name }}

                                        </div>


                                        <div class="product-qty">

                                            {{ $detail->qty }}
                                            ×
                                            Rp {{ number_format($detail->price, 0, ',', '.') }}

                                        </div>

                                    </div>


                                    <div class="product-subtotal">

                                        Rp
                                        {{ number_format($detail->subtotal, 0, ',', '.') }}

                                    </div>


                                </div>

                            @endforeach


                        </div>


                        <div class="total-section">

                            <span class="total-label">
                                Total Pembayaran
                            </span>

                            <span class="total-price">

                                Rp
                                {{ number_format($order->total, 0, ',', '.') }}

                            </span>

                        </div>


                        <div class="order-action">

                            <a
                                href="{{ route('orders.show', $order->id) }}"
                                class="detail-button"
                            >
                                LIHAT DETAIL
                            </a>

                        </div>


                    </div>

                </div>

            @endforeach


        </div>


    @else


        <div class="empty">

            <div class="empty-icon">
                🌷
            </div>

            <h3>
                Belum Ada Pesanan
            </h3>

            <p>
                Kamu belum memiliki pesanan.
                Yuk, pilih fresh flower favoritmu!
            </p>

            <a
                href="{{ route('products.index') }}"
                class="shop-button"
            >
                BELANJA SEKARANG
            </a>

        </div>


    @endif


</div>


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
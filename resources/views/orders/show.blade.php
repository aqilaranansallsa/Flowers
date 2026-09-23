<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pesanan - Floréa</title>


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

        .detail-card {
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
           DETAIL HEADER
        ========================= */

        .detail-header {
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
            gap: 7px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .status {
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
           DETAIL BODY
        ========================= */

        .detail-body {
            padding: 20px;
        }

        .section {
            margin-bottom: 22px;
        }

        .section:last-child {
            margin-bottom: 0;
        }

        .section-title {
            margin: 0 0 12px;
            padding-bottom: 8px;
            border-bottom: 1px solid #ead9b4;
            font-family: Georgia, serif;
            font-size: 16px;
            font-style: italic;
            color: #c9577b;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 13px 28px;
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

        .address {
            line-height: 1.6;
        }


        /* =========================
           PRODUCT
        ========================= */

        .product-list {
            border: 1px solid #ead9b4;
            border-radius: 6px;
            overflow: hidden;
        }

        .product-item {
            padding: 12px 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            border-bottom: 1px solid #ead9b4;
            background-color: #fffdf8;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-name {
            font-size: 12px;
            font-weight: bold;
            color: #4d493f;
        }

        .product-detail {
            margin-top: 4px;
            font-size: 10px;
            color: #8a8173;
        }

        .product-subtotal {
            font-size: 12px;
            font-weight: bold;
            color: #6d5c45;
            white-space: nowrap;
        }


        /* =========================
           TOTAL
        ========================= */

        .total-box {
            padding: 14px 17px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(
                90deg,
                #fff8df,
                #fff1f4
            );
            border: 1px solid #e4cd91;
            border-radius: 6px;
        }

        .total-label {
            font-size: 12px;
            font-weight: bold;
            color: #6d685d;
        }

        .total-price {
            font-size: 17px;
            font-weight: bold;
            color: #d95f86;
        }


        /* =========================
           PAYMENT
        ========================= */

        .payment-box {
            padding: 14px 16px;
            background-color: #fffaf0;
            border: 1px solid #ead9b4;
            border-radius: 6px;
        }

        .payment-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 6px 0;
            font-size: 12px;
            color: #6d685d;
        }

        .payment-row strong {
            color: #4d493f;
        }


        /* =========================
           BUKTI TRANSFER
        ========================= */

        .proof-box {
            padding: 15px;
            background-color: #fffaf0;
            border: 1px solid #ead9b4;
            border-radius: 6px;
            text-align: center;
        }

        .proof-box p {
            margin: 0 0 12px;
            font-size: 11px;
            color: #77705f;
        }

        .proof-image {
            display: block;
            max-width: 400px;
            max-height: 400px;
            width: auto;
            height: auto;
            margin: auto;
            border: 1px solid #dfc78f;
            border-radius: 6px;
        }

        .no-proof {
            margin: 0;
            padding: 10px;
            background-color: #fff3d5;
            border: 1px solid #e7cf91;
            border-radius: 5px;
            color: #8a7239;
            font-size: 11px;
        }


        /* =========================
           BUTTON
        ========================= */

        .action {
            display: flex;
            justify-content: flex-end;
            margin-top: 22px;
        }

        .back-button {
            display: inline-block;
            padding: 8px 14px;
            text-decoration: none;
            color: #704354;
            background-color: #fffdf7;
            border: 1px solid #d8b95f;
            border-radius: 4px;
            font-size: 10px;
            font-weight: bold;
            transition: 0.2s;
        }

        .back-button:hover {
            background-color: #fff0c2;
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

            .detail-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .status-wrapper {
                justify-content: flex-start;
            }

            .info-grid {
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
                gap: 6px;
            }

            .product-subtotal {
                align-self: flex-end;
            }

            .payment-row {
                flex-direction: column;
                gap: 3px;
            }

            .total-box {
                gap: 15px;
            }

            .proof-image {
                max-width: 100%;
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


    <div class="detail-card">


        <!-- HEADER -->

        <div class="detail-header">

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


        <div class="detail-body">


            <!-- INFORMASI PESANAN -->

            <div class="section">

                <h2 class="section-title">
                    Informasi Pesanan
                </h2>


                <div class="info-grid">

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
                            Status Pembayaran
                        </strong>

                        {{ ucfirst($order->status_pembayaran) }}

                    </div>

                </div>

            </div>


            <!-- INFORMASI PENERIMA -->

            <div class="section">

                <h2 class="section-title">
                    Informasi Penerima
                </h2>


                <div class="info-grid">

                    <div class="info-item">

                        <strong>
                            Nama Penerima
                        </strong>

                        {{ $order->nama_penerima }}

                    </div>


                    <div class="info-item">

                        <strong>
                            Nomor HP
                        </strong>

                        {{ $order->telp_penerima }}

                    </div>


                    <div class="info-item">

                        <strong>
                            Alamat Pengiriman
                        </strong>

                        <span class="address">
                            {{ $order->alamat_pengiriman }}
                        </span>

                    </div>


                    <div class="info-item">

                        <strong>
                            Catatan
                        </strong>

                        {{ $order->catatan ?: '-' }}

                    </div>

                </div>

            </div>


            <!-- PRODUK -->

            <div class="section">

                <h2 class="section-title">
                    Produk yang Dipesan
                </h2>


                <div class="product-list">

                    @foreach($order->orderDetails as $detail)

                        <div class="product-item">

                            <div>

                                <div class="product-name">

                                    {{ $detail->product->name }}

                                </div>

                                <div class="product-detail">

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

            </div>


            <!-- TOTAL -->

            <div class="section">

                <div class="total-box">

                    <span class="total-label">
                        Total Pembayaran
                    </span>

                    <span class="total-price">

                        Rp
                        {{ number_format($order->total, 0, ',', '.') }}

                    </span>

                </div>

            </div>


            <!-- PEMBAYARAN -->

            <div class="section">

                <h2 class="section-title">
                    Informasi Pembayaran
                </h2>


                <div class="payment-box">

                    <div class="payment-row">

                        <strong>
                            Metode Pembayaran
                        </strong>

                        <span>
                            {{ ucfirst($order->metode_pembayaran) }}
                        </span>

                    </div>


                    <div class="payment-row">

                        <strong>
                            Status Pembayaran
                        </strong>

                        <span>
                            {{ ucfirst($order->status_pembayaran) }}
                        </span>

                    </div>

                </div>

            </div>


            <!-- BUKTI TRANSFER -->

            @if(strtolower($order->metode_pembayaran) === 'transfer bank')

                <div class="section">

                    <h2 class="section-title">
                        Bukti Transfer
                    </h2>


                    <div class="proof-box">

                        @if($order->bukti_transfer)

                            <p>
                                Bukti transfer yang telah Anda upload:
                            </p>

                            <img
                                src="{{ asset('storage/' . $order->bukti_transfer) }}"
                                alt="Bukti Transfer"
                                class="proof-image"
                            >

                        @else

                            <p class="no-proof">
                                Bukti transfer belum diupload.
                            </p>

                        @endif

                    </div>

                </div>

            @endif


            <!-- BUTTON -->

            <div class="action">

                <a
                    href="{{ route('orders.my') }}"
                    class="back-button"
                >
                    KEMBALI KE PESANAN SAYA
                </a>

            </div>


        </div>

    </div>

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
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pesanan Berhasil - Floréa</title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family: Arial, sans-serif;
            background: #fffaf0;
            color: #333;
        }



        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            min-height: 90px;
            padding: 10px 48px;
            background: #fffdf7;
            border-bottom: 1px solid #f2d6a2;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }


        .brand img {
            width: 62px;
            height: 62px;
            object-fit: contain;
        }


        .brand-text h1 {
            margin: 0;
            font-family: Georgia, serif;
            font-size: 25px;
            font-style: italic;
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
            position: relative;
            transition: 0.2s;
        }


        .nav-menu a:hover {
            color: #d95f86;
        }


        .nav-menu a.active {
            color: #d95f86;
            border-bottom: 2px solid #e6b84f;
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

            background: #fffdf7;

            cursor: pointer;

            font-size: 14px;
            color: #4d493f;
        }


        .logout-button:hover {
            background: #fff4d8;
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



        /* =========================
           MAIN
        ========================= */

        .container {
            width: 90%;
            max-width: 1000px;

            margin: 0 auto;

            padding: 30px 0 65px;
        }



        /* =========================
           SUCCESS CARD
        ========================= */

        .success-card {
            width: 100%;

            max-width: 740px;

            margin: 0 auto;

            background: #fffdf7;

            border: 1px solid #d8b95f;

            border-radius: 8px;

            padding: 42px 55px 40px;

            box-shadow:
                0 4px 14px rgba(120, 90, 40, 0.07);

            text-align: center;
        }


        .success-title {
            font-size: 25px;

            font-weight: bold;

            color: #222;

            margin-bottom: 18px;
        }


        .success-title span {
            color: #d95f86;
        }


        .order-number {
            font-size: 15px;

            color: #555;

            line-height: 1.7;

            margin-bottom: 32px;
        }


        .order-number strong {
            color: #d95f86;
        }



        /* =========================
           DETAIL PESANAN
        ========================= */

        .detail-title {
            text-align: left;

            font-size: 13px;

            font-weight: bold;

            color: #333;

            margin: 0 0 8px 15px;
        }


        .detail-box {
            border: 1px solid #d8b95f;

            background: #fff;

            border-radius: 5px;

            padding: 20px 25px;

            text-align: left;
        }


        .detail-row {
            display: grid;

            grid-template-columns: 150px 18px 1fr;

            gap: 0;

            font-size: 13px;

            line-height: 2;
        }


        .detail-label {
            color: #444;
        }


        .detail-colon {
            color: #777;

            text-align: center;
        }


        .detail-value {
            color: #333;

            font-weight: 500;
        }


        .detail-total {
            color: #d95f86;

            font-weight: bold;
        }



        /* =========================
           PAYMENT INFO
        ========================= */

        .payment-box {
            margin-top: 18px;

            padding: 15px 18px;

            border: 1px solid #eadfc8;

            border-radius: 6px;

            background: #fffaf0;

            text-align: left;
        }


        .payment-box h4 {
            margin-bottom: 8px;

            font-size: 13px;

            color: #9f526d;
        }


        .payment-box p {
            font-size: 13px;

            line-height: 1.7;

            color: #555;
        }


        .payment-bank {
            color: #d95f86;

            font-weight: bold;
        }



        /* =========================
           BUTTON
        ========================= */

        .button-wrapper {
            text-align: center;

            margin-top: 28px;
        }


        .payment-button {
            display: flex;

            align-items: center;
            justify-content: center;

            width: 360px;

            max-width: 100%;

            min-height: 42px;

            margin: 0 auto;

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

            padding: 10px 15px;

            text-align: center;
        }


        .payment-button:hover {
            background: linear-gradient(
                90deg,
                #f9df96,
                #f2b7ca
            );

            border-color: #d95f86;
        }


        .back-link-wrapper {
            text-align: center;

            margin-top: 15px;
        }


        .back-link {
            color: #c77f92;

            text-decoration: none;

            font-size: 13px;
        }


        .back-link:hover {
            text-decoration: underline;
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


        .footer-content {
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


        .footer-brand img {
            width: 72px;
            height: 72px;

            object-fit: contain;

            margin-bottom: 8px;
        }


        .footer-brand h3 {
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


        .footer-column h4 {
            margin: 0 0 16px;

            font-family: Georgia, serif;

            font-size: 16px;

            color: #9f526d;
        }


        .footer-column h4::after {
            content: "";

            display: block;

            width: 28px;
            height: 2px;

            margin-top: 7px;

            background: #d9ae4d;

            border-radius: 5px;
        }


        .footer-column a {
            display: block;

            text-decoration: none;

            color: #6d655c;

            font-size: 13px;

            margin-bottom: 10px;

            transition: 0.2s;
        }


        .footer-column a:hover {
            color: #d95f86;

            padding-left: 4px;
        }


        .footer-column p {
            font-size: 13px;

            line-height: 1.7;

            color: #6d655c;
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

        @media (max-width: 900px) {

            .navbar {
                padding: 10px 25px;
            }


            .brand-text p {
                display: none;
            }


            .nav-menu {
                gap: 15px;
            }


            .footer-content {
                grid-template-columns: 1fr 1fr;
            }

        }



        @media (max-width: 700px) {

            .navbar {
                height: auto;

                min-height: 90px;

                flex-wrap: wrap;

                gap: 10px;
            }


            .brand {
                width: 100%;
            }


            .nav-menu {
                width: 100%;

                justify-content: center;

                flex-wrap: wrap;
            }


            .success-card {
                padding: 30px 20px;
            }


            .detail-row {
                grid-template-columns: 120px 15px 1fr;
            }


            .footer-content {
                grid-template-columns: 1fr;

                gap: 25px;
            }

        }



        @media (max-width: 480px) {

            .container {
                width: 94%;
            }


            .success-title {
                font-size: 21px;
            }


            .detail-box {
                padding: 15px;
            }


            .detail-row {
                grid-template-columns: 1fr;
            }


            .detail-colon {
                display: none;
            }


            .detail-label {
                font-weight: bold;

                margin-top: 5px;
            }


            .detail-value {
                margin-bottom: 5px;
            }


            .footer-content {
                padding: 35px 25px 20px;
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
        >

        <div class="brand-text">

            <h1>Floréa</h1>

            <p>Fresh Flowers for Every Moment</p>

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


        @auth

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
                        aria-hidden="true"
                    >

                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>

                        <path d="M16 17l5-5-5-5"></path>

                        <path d="M21 12H9"></path>

                    </svg>

                    Logout

                </button>

            </form>

        @endauth

    </div>

</nav>



<!-- =========================
     MAIN
========================= -->

<main class="container">


    <section class="success-card">


        <h1 class="success-title">
            Pesanan Anda Berhasil Di Buat! <span>🎉</span>
        </h1>


        <div class="order-number">

            Nomor Pesanan

            <br>

            <strong>
                : {{ $order->invoice }}
            </strong>

        </div>



        <!-- =========================
             DETAIL PESANAN
        ========================= -->

        <div class="detail-title">
            DETAIL PESANAN
        </div>


        <div class="detail-box">


            @foreach ($order->orderDetails as $detail)

                <div class="detail-row">

                    <span class="detail-label">
                        Produk
                    </span>

                    <span class="detail-colon">
                        :
                    </span>

                    <span class="detail-value">
                        {{ $detail->product->name }}
                    </span>

                </div>


                <div class="detail-row">

                    <span class="detail-label">
                        Jumlah
                    </span>

                    <span class="detail-colon">
                        :
                    </span>

                    <span class="detail-value">
                        {{ $detail->qty }}
                    </span>

                </div>

            @endforeach


            <div class="detail-row">

                <span class="detail-label">
                    Total Harga
                </span>

                <span class="detail-colon">
                    :
                </span>

                <span class="detail-value detail-total">
                    Rp {{ number_format($order->total, 0, ',', '.') }}
                </span>

            </div>


            <div class="detail-row">

                <span class="detail-label">
                    Tanggal Pengiriman
                </span>

                <span class="detail-colon">
                    :
                </span>

                <span class="detail-value">
                    {{ \Carbon\Carbon::parse($order->tanggal_pengiriman)->translatedFormat('d F Y') }}
                </span>

            </div>


            <div class="detail-row">

                <span class="detail-label">
                    Metode Pembayaran
                </span>

                <span class="detail-colon">
                    :
                </span>

                <span class="detail-value">
                    {{ $order->metode_pembayaran }}
                </span>

            </div>


        </div>



        <!-- =========================
             INFORMASI TRANSFER
        ========================= -->

        @if ($order->metode_pembayaran === 'Transfer Bank')

            <div class="payment-box">

                <h4>
                    INFORMASI PEMBAYARAN
                </h4>

                <p>

                    Pesanan berhasil dibuat.
                    Silakan hubungi admin Floréa melalui WhatsApp
                    untuk mendapatkan informasi rekening pembayaran.

                    <br><br>

                    Nomor Pesanan:

                    <span class="payment-bank">
                        {{ $order->invoice }}
                    </span>

                    <br>

                    Total Pembayaran:

                    <span class="payment-bank">
                        Rp {{ number_format($order->total, 0, ',', '.') }}
                    </span>

                </p>

            </div>

        @endif



        <!-- =========================
             BUTTON
        ========================= -->

        <div class="button-wrapper">

            @if ($order->metode_pembayaran === 'Transfer Bank')

                @php

                    $whatsappNumber = '6281234567890';

                    $whatsappMessage =
                        "Halo Floréa, saya ingin melakukan pembayaran untuk pesanan "
                        . $order->invoice
                        . " dengan total Rp "
                        . number_format($order->total, 0, ',', '.')
                        . ". Mohon informasi rekening pembayaran.";

                    $whatsappUrl =
                        'https://wa.me/'
                        . $whatsappNumber
                        . '?text='
                        . urlencode($whatsappMessage);

                @endphp


                <a
                    href="{{ $whatsappUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="payment-button"
                >
                    LANJUT PEMBAYARAN VIA WHATSAPP
                </a>

            @else

                <a
                    href="{{ route('orders.my') }}"
                    class="payment-button"
                >
                    LIHAT PESANAN SAYA
                </a>

            @endif

        </div>



        <div class="back-link-wrapper">

            <a
                href="{{ route('orders.my') }}"
                class="back-link"
            >
                Lihat Pesanan Saya
            </a>

        </div>


    </section>


</main>



<!-- =========================
     FOOTER
========================= -->

<footer class="footer">


    <div class="footer-content">


        <div class="footer-brand">

            <img
                src="{{ asset('images/logo-florea.png') }}"
                alt="Logo Floréa"
            >

            <h3>
                Floréa
            </h3>

            <p>
                Fresh flowers untuk menghadirkan keindahan dan
                kebahagiaan di setiap momen spesial Anda.
            </p>

        </div>



        <div class="footer-column">

            <h4>
                Navigasi
            </h4>

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



        <div class="footer-column">

            <h4>
                Layanan
            </h4>

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



        <div class="footer-column">

            <h4>
                Tentang Floréa
            </h4>


            <div class="footer-service">


                <div class="service-item">

                    <svg
                        class="service-icon"
                        viewBox="0 0 24 24"
                    >

                        <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0z"></path>

                        <circle
                            cx="12"
                            cy="10"
                            r="2.5"
                        ></circle>

                    </svg>

                    <span>
                        Fresh Flower untuk berbagai
                        <br>
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
                        ></circle>

                        <path d="M12 7v5l3 2"></path>

                    </svg>

                    <span>
                        Melayani kebutuhan bunga
                        <br>
                        dengan sepenuh hati.
                    </span>

                </div>



                <div class="service-item">

                    <svg
                        class="service-icon"
                        viewBox="0 0 24 24"
                    >

                        <path d="M20 11a8.1 8.1 0 0 0-15.5-2"></path>

                        <path d="M4 5v4h4"></path>

                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2"></path>

                        <path d="M20 19v-4h-4"></path>

                    </svg>

                    <span>
                        Pesanan diproses dengan aman
                        <br>
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


</body>

</html>
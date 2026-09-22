<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Melakukan Pemesanan - Floréa</title>


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


        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-left: 10px;
        }


        .auth-buttons a {
            display: flex;
            align-items: center;
            gap: 7px;

            text-decoration: none;
            color: #333;

            border: 1px solid #333;
            padding: 5px 10px;

            font-size: 12px;

            background: #fffdf7;
        }


        .auth-buttons a:hover {
            background: #f8e6eb;
        }


        .auth-icon {
            width: 17px;
            height: 17px;
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
            background: #fffdf7;
            cursor: pointer;
            font-size: 14px;
            color: #4d493f;
        }


        .logout-button:hover {
            background: #fff4d8;
        }



        /* =========================
           MAIN
        ========================= */

        .container {
            width: 90%;
            max-width: 1100px;

            margin: 30px auto 60px;
        }



        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 13px 16px;

            margin-bottom: 20px;

            border-radius: 6px;

            font-size: 13px;
        }


        .alert-error {
            background: #fdeaea;

            border: 1px solid #e4aaaa;

            color: #a33a3a;
        }



        /* =========================
           CHECKOUT FORM
        ========================= */

        .checkout-form {
            width: 100%;
        }


        .checkout-card {
            background: #fffdf7;

            border: 1px solid #d8b95f;

            border-radius: 8px;

            padding: 25px 30px;

            margin-bottom: 22px;

            box-shadow: 0 3px 10px rgba(120, 90, 40, 0.06);
        }



        /* =========================
           CARD TITLE
        ========================= */

        .card-title {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 15px;
            font-weight: bold;

            text-transform: uppercase;

            color: #222;

            margin-bottom: 23px;

            padding-bottom: 12px;

            border-bottom: 1px solid #eadfc8;
        }


        .card-title-icon {
            width: 25px;
            height: 25px;

            color: #d98da0;
        }



        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 18px;
        }


        .form-group:last-child {
            margin-bottom: 0;
        }


        .form-group label {
            display: block;

            margin: 0 0 7px 3px;

            font-size: 13px;

            font-weight: 600;

            color: #444;
        }


        .form-control {
            width: 100%;

            height: 43px;

            border: 1px solid #d8b95f;

            border-radius: 6px;

            background: #fff;

            padding: 10px 12px;

            font-family: Arial, sans-serif;

            font-size: 13px;

            color: #333;

            outline: none;

            transition: 0.2s;
        }


        textarea.form-control {
            height: 90px;

            resize: vertical;

            min-height: 65px;
        }


        .form-control:focus {
            border-color: #d98da0;

            box-shadow:
                0 0 0 2px rgba(217, 141, 160, 0.10);
        }


        .form-row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 25px;
        }


        .readonly-input {
            background: #f9f5eb;

            color: #777;

            cursor: not-allowed;
        }


        .error {
            margin: 6px 0 0 3px;

            color: #c94b4b;

            font-size: 12px;
        }



        /* =========================
           RINGKASAN PESANAN
        ========================= */

        .order-items {
            width: 100%;
        }


        .product-item {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 15px 5px;

            border-bottom: 1px solid #eadfc8;
        }


        .product-item:last-child {
            border-bottom: none;
        }


        .product-info {
            flex: 1;

            min-width: 0;
        }


        .product-info h3 {
            font-size: 14px;

            font-weight: bold;

            color: #333;

            margin-bottom: 6px;
        }


        .product-info p {
            font-size: 13px;

            color: #777;
        }


        .product-price {
            font-size: 14px;

            font-weight: bold;

            color: #d98da0;

            margin-left: 20px;

            white-space: nowrap;
        }


        .empty-order {
            padding: 15px 5px;

            color: #777;

            font-size: 13px;
        }


        .total {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 5px;

            padding: 18px 5px 5px;

            border-top: 1px solid #eadfc8;

            font-size: 16px;

            font-weight: bold;
        }


        .total span:last-child {
            color: #d98da0;

            font-size: 18px;
        }



        /* =========================
           METODE PEMBAYARAN
        ========================= */

        .payment-title {
            font-size: 14px;

            font-weight: 600;

            margin: 23px 0 15px 5px;

            color: #444;
        }


        .payment-options {
            display: flex;

            align-items: center;

            gap: 35px;

            padding-left: 5px;
        }


        .payment-option {
            display: flex;

            align-items: center;

            gap: 10px;

            cursor: pointer;

            font-size: 13px;

            color: #444;
        }


        .payment-option input {
            appearance: none;

            width: 21px;
            height: 21px;

            border: 1px solid #c7a84f;

            border-radius: 50%;

            background: #fff;

            cursor: pointer;

            position: relative;
        }


        .payment-option input:checked {
            border-color: #d98da0;
        }


        .payment-option input:checked::after {
            content: "";

            position: absolute;

            width: 9px;
            height: 9px;

            background: #d98da0;

            border-radius: 50%;

            top: 5px;
            left: 5px;
        }


        .bank-options {
            display: none;

            margin: 15px 0 0 5px;

            padding: 15px 18px;

            border: 1px solid #eadfc8;

            border-radius: 6px;

            background: #fffaf0;
        }


        .bank-options.show {
            display: block;
        }


        .bank-title {
            margin-bottom: 12px;

            font-size: 13px;

            font-weight: 600;

            color: #444;
        }


        .bank-list {
            display: flex;

            flex-wrap: wrap;

            gap: 12px 25px;
        }


        .bank-option {
            display: flex;

            align-items: center;

            gap: 8px;

            font-size: 13px;

            color: #444;

            cursor: pointer;
        }


        .bank-option input {
            accent-color: #d98da0;

            cursor: pointer;
        }



        /* =========================
           BUTTON
        ========================= */

        .button-wrapper {
            text-align: center;

            margin-top: 30px;
        }


        .order-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 360px;
            max-width: 100%;
            height: 42px;
            margin: 25px auto 0;
            padding: 0;
            border: 1px solid #d8b95f;
            border-radius: 4px;
            background: linear-gradient(
                90deg,
                #fff0c2,
                #f8d9e2
            );
            color: #704354;
            font-size: 11px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .order-button:hover {
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


            .brand {
                min-width: auto;
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


            .auth-buttons {
                width: 100%;

                justify-content: center;

                margin-left: 0;
            }


            .form-row {
                grid-template-columns: 1fr;

                gap: 0;
            }


            .checkout-card {
                padding: 20px;
            }


            .payment-options {
                gap: 25px;
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


            .page-title h2 {
                font-size: 18px;
            }


            .checkout-card {
                padding: 18px 15px;
            }


            .payment-options {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }


            .product-item {
                align-items: flex-start;

                gap: 15px;
            }


            .product-price {
                font-size: 13px;
            }


            .footer {
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
        <a href="{{ route('home') }}">Home</a>

        <a href="{{ route('products.index') }}">Fresh Flower</a>

        <a href="{{ route('cart.index') }}" class="active">Keranjang</a>

        <a href="{{ route('orders.my') }}">Pesanan Saya</a>

        @auth
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="logout-button">
                    <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true">
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
     JUDUL
========================= -->





<!-- =========================
     MAIN
========================= -->

<main class="container">


    @if ($errors->any())

        <div class="alert alert-error">

            Periksa kembali data pemesanan yang kamu masukkan.

        </div>

    @endif



    <form
        action="{{ route('checkout.store') }}"
        method="POST"
        class="checkout-form"
    >

        @csrf



        <!-- =========================
             DATA PENERIMA
        ========================= -->

        <section class="checkout-card">

            <div class="card-title">

                <svg
                    class="card-title-icon"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                >

                    <circle cx="12" cy="7" r="4"></circle>

                    <path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"></path>

                </svg>

                DATA PENERIMA

            </div>


            <div class="form-group">

                <label for="nama_penerima">
                    Nama
                </label>

                <input
                    type="text"
                    id="nama_penerima"
                    name="nama_penerima"
                    class="form-control"
                    value="{{ old('nama_penerima', auth()->user()->name) }}"
                    required
                >

                @error('nama_penerima')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <div class="form-row">

                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        class="form-control readonly-input"
                        value="{{ auth()->user()->email }}"
                        readonly
                    >

                </div>


                <div class="form-group">

                    <label for="telp_penerima">
                        No. Telepon
                    </label>

                    <input
                        type="text"
                        id="telp_penerima"
                        name="telp_penerima"
                        class="form-control"
                        value="{{ old('telp_penerima', auth()->user()->telp) }}"
                        placeholder="Masukkan nomor telepon"
                        required
                    >

                    @error('telp_penerima')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>

            </div>

        </section>



        <!-- =========================
             DATA PENGIRIMAN
        ========================= -->

        <section class="checkout-card">

            <div class="card-title">
                DATA PENGIRIMAN
            </div>


            <div class="form-group">

                <label for="alamat_pengiriman">
                    Alamat Pengiriman
                </label>

                <textarea
                    id="alamat_pengiriman"
                    name="alamat_pengiriman"
                    class="form-control"
                    placeholder="Masukkan alamat lengkap"
                    required
                >{{ old('alamat_pengiriman') }}</textarea>

                @error('alamat_pengiriman')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <div class="form-group">

                <label for="tanggal_pengiriman">
                    Tanggal Pengiriman
                </label>

                <input
                    type="date"
                    id="tanggal_pengiriman"
                    name="tanggal_pengiriman"
                    class="form-control"
                    value="{{ old('tanggal_pengiriman') }}"
                    required
                >

                @error('tanggal_pengiriman')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            <div class="form-group">

                <label for="catatan">
                    Catatan
                </label>

                <textarea
                    id="catatan"
                    name="catatan"
                    class="form-control"
                    placeholder="Tambahkan catatan untuk pesanan..."
                >{{ old('catatan') }}</textarea>

                @error('catatan')

                    <div class="error">
                        {{ $message }}
                    </div>

                @enderror

            </div>

        </section>



        <!-- =========================
             RINGKASAN PESANAN
        ========================= -->

        <section class="checkout-card">

            <div class="card-title">
                RINGKASAN PESANAN
            </div>


            <div class="order-items">

                @foreach ($products as $product)

                    @php

                        $qty = $cart[$product->id];

                        $subtotal = $product->price * $qty;

                    @endphp


                    <div class="product-item">

                        <div class="product-info">

                            <h3>
                                {{ $product->name }}
                            </h3>

                            <p>

                                {{ $qty }} ×

                                Rp
                                {{ number_format($product->price, 0, ',', '.') }}

                            </p>

                        </div>


                        <div class="product-price">

                            Rp
                            {{ number_format($subtotal, 0, ',', '.') }}

                        </div>

                    </div>

                @endforeach

            </div>



            <div class="total">

                <span>
                    Total
                </span>

                <span>
                    Rp {{ number_format($total, 0, ',', '.') }}
                </span>

            </div>



            <!-- =========================
                 METODE PEMBAYARAN
            ========================= -->

            <div class="payment-title">
                Pilih metode pembayaran
            </div>


            <div class="payment-options">

                <label class="payment-option">

                    <input
                        type="radio"
                        name="metode_pembayaran"
                        value="Transfer Bank"
                        {{ old('metode_pembayaran') == 'Transfer Bank' ? 'checked' : '' }}
                        required
                        onchange="toggleBankOptions()"
                    >

                    <span>
                        Transfer
                    </span>

                </label>


                <label class="payment-option">

                    <input
                        type="radio"
                        name="metode_pembayaran"
                        value="COD"
                        {{ old('metode_pembayaran') == 'COD' ? 'checked' : '' }}
                        onchange="toggleBankOptions()"
                    >

                    <span>
                        COD
                    </span>

                </label>

            </div>


            <div
                id="bank-options"
                class="bank-options {{ old('metode_pembayaran') == 'Transfer Bank' ? 'show' : '' }}"
            >

                <div class="bank-title">
                    Pilih bank untuk transfer
                </div>

                <div class="bank-list">

                    <label class="bank-option">
                        <input
                            type="radio"
                            name="bank_transfer"
                            value="BCA"
                            {{ old('bank_transfer') == 'BCA' ? 'checked' : '' }}
                        >
                        <span>BCA</span>
                    </label>

                    <label class="bank-option">
                        <input
                            type="radio"
                            name="bank_transfer"
                            value="BRI"
                            {{ old('bank_transfer') == 'BRI' ? 'checked' : '' }}
                        >
                        <span>BRI</span>
                    </label>

                    <label class="bank-option">
                        <input
                            type="radio"
                            name="bank_transfer"
                            value="Mandiri"
                            {{ old('bank_transfer') == 'Mandiri' ? 'checked' : '' }}
                        >
                        <span>Mandiri</span>
                    </label>

                </div>

                @error('bank_transfer')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            @error('metode_pembayaran')

                <div class="error">
                    {{ $message }}
                </div>

            @enderror

        </section>



        <!-- =========================
             BUTTON
        ========================= -->

        <div class="button-wrapper">

            <button
                type="submit"
                class="order-button"
            >
                LANJUT KE PEMBAYARAN
            </button>

        </div>


        <div class="back-link-wrapper">

            <a
                href="{{ route('cart.index') }}"
                class="back-link"
            >
                ← Kembali ke Keranjang
            </a>

        </div>


    </form>

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

            <h3>Floréa</h3>

            <p>
                Fresh flowers untuk menghadirkan keindahan dan
                kebahagiaan di setiap momen spesial Anda.
            </p>
        </div>

        <div class="footer-column">
            <h4>Navigasi</h4>

            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('products.index') }}">Fresh Flower</a>
            <a href="{{ route('cart.index') }}">Keranjang</a>
            <a href="{{ route('orders.my') }}">Pesanan Saya</a>
        </div>

        <div class="footer-column">
            <h4>Layanan</h4>

            <a href="{{ route('products.index') }}">Bunga Segar</a>
            <a href="{{ route('products.index') }}">Pengiriman Cepat</a>
            <a href="{{ route('products.index') }}">Pembayaran Aman</a>
            <a href="{{ route('products.index') }}">Layanan 24/7</a>
        </div>

        <div class="footer-column">
            <h4>Tentang Floréa</h4>

            <div class="footer-service">
                <div class="service-item">
                    <svg class="service-icon" viewBox="0 0 24 24">
                        <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0z"></path>
                        <circle cx="12" cy="10" r="2.5"></circle>
                    </svg>
                    <span>Fresh Flower untuk berbagai<br>momen istimewa.</span>
                </div>

                <div class="service-item">
                    <svg class="service-icon" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M12 7v5l3 2"></path>
                    </svg>
                    <span>Melayani kebutuhan bunga<br>dengan sepenuh hati.</span>
                </div>

                <div class="service-item">
                    <svg class="service-icon" viewBox="0 0 24 24">
                        <path d="M20 11a8.1 8.1 0 0 0-15.5-2"></path>
                        <path d="M4 5v4h4"></path>
                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2"></path>
                        <path d="M20 19v-4h-4"></path>
                    </svg>
                    <span>Pesanan diproses dengan aman<br>dan terpercaya.</span>
                </div>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <p>
            © {{ date('Y') }} <span>Floréa</span>. All Rights Reserved.
        </p>
    </div>

</footer>


<script>

    function toggleBankOptions() {

        const transfer = document.querySelector(
            'input[name="metode_pembayaran"][value="Transfer Bank"]'
        );

        const bankOptions = document.getElementById('bank-options');
        const bankInputs = document.querySelectorAll(
            'input[name="bank_transfer"]'
        );

        if (transfer && transfer.checked) {
            bankOptions.classList.add('show');

            bankInputs.forEach(input => {
                input.required = true;
                input.disabled = false;
            });
        } else {
            bankOptions.classList.remove('show');

            bankInputs.forEach(input => {
                input.required = false;
                input.disabled = true;
                input.checked = false;
            });
        }
    }

    document.addEventListener('DOMContentLoaded', toggleBankOptions);

</script>

</body>

</html>
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
            background-color: #fffafb;
            color: #222;
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
            background-color: #ffffff;
            border-bottom: 1px solid #f0cbd5;
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
            color: #d94f83;
        }

        .brand-text p {
            margin: 4px 0 0;
            font-size: 12px;
            color: #666;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            padding: 10px 4px;
            transition: 0.2s;
        }

        .nav-menu a:hover {
            color: #d94f83;
        }

        .nav-menu .active {
            color: #d94f83;
            border-bottom: 2px solid #d94f83;
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
            border: 1px solid #d98ba5;
            border-radius: 6px;
            color: #333 !important;
            background-color: #ffffff;
        }

        .nav-button:hover {
            background-color: #fff0f5;
        }

        .register-button {
            background-color: #f8d5e1 !important;
        }

        .register-button:hover {
            background-color: #f4bfd0 !important;
        }

        .nav-icon {
            width: 20px;
            height: 20px;
            stroke: #d94f83;
            stroke-width: 1.8;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* LOGOUT */

        .logout-form {
            display: inline;
        }

        .logout-button {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 9px 18px;
            border: 1px solid #d98ba5;
            border-radius: 6px;
            background-color: white;
            cursor: pointer;
            font-size: 14px;
            color: #333;
        }

        .logout-button:hover {
            background-color: #fff0f5;
        }

        /* =====================================================
           NOTIFICATION
        ===================================================== */

        .notification {
            max-width: 900px;
            margin: 15px auto;
            padding: 12px 18px;
            text-align: center;
            background-color: #fff0f5;
            border: 1px solid #efb5c8;
            border-radius: 6px;
            color: #b73567;
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
                90deg,
                #fffafb,
                #fff0f5
            );
            border-bottom: 1px solid #efc8d4;
        }

        .hero-content {
            width: 50%;
            padding-left: 5%;
        }

        .hero-content h1 {
            margin: 0 0 12px;
            font-size: 46px;
            color: #c93670;
        }

        .hero-content h2 {
            margin: 0 0 18px;
            font-size: 19px;
            font-weight: normal;
            color: #333;
        }

        .hero-content p {
            max-width: 480px;
            line-height: 1.7;
            font-size: 15px;
            color: #555;
            margin-bottom: 25px;
        }

        .hero-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 25px;
            text-decoration: none;
            color: #8d244d;
            background-color: #f8c6d6;
            border: 1px solid #df8fa9;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.2s;
        }

        .hero-button:hover {
            background-color: #f3b3c8;
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
            background-color: #ffffff;
            border-bottom: 1px solid #efc8d4;
        }

        .advantage {
            display: flex;
            align-items: center;
            padding: 22px 30px;
            border-right: 1px solid #e7cbd3;
        }

        .advantage:last-child {
            border-right: none;
        }

        .advantage-icon {
            width: 68px;
            height: 68px;
            min-width: 68px;
            border: 1.5px solid #df6f98;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            background-color: #fffafd;
        }

        .advantage-icon svg {
            width: 34px;
            height: 34px;
            stroke: #d94f83;
            stroke-width: 1.6;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .advantage-text h3 {
            margin: 0 0 7px;
            font-size: 14px;
            color: #333;
        }

        .advantage-text p {
            margin: 0;
            font-size: 12px;
            line-height: 1.5;
            color: #555;
        }

        /* =====================================================
           PRODUK UNGGULAN
        ===================================================== */

        .products-section {
            padding: 38px 8% 45px;
            background-color: #fffafb;
        }

        .section-line {
            width: 45px;
            height: 3px;
            background-color: #e87599;
            margin: 0 auto 10px;
            border-radius: 5px;
        }

        .section-title {
            text-align: center;
            margin: 0;
            font-size: 25px;
            color: #333;
        }

        .section-subtitle {
            text-align: center;
            margin: 9px 0 30px;
            font-size: 14px;
            color: #666;
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
            background-color: #ffffff;
            border: 1px solid #d9b8c3;
            border-radius: 9px;
            box-shadow: 0 3px 10px rgba(217, 79, 131, 0.08);
        }

        .product-image {
            width: 190px;
            height: 185px;
            object-fit: cover;
            border-radius: 6px;
            background-color: #fff2f6;
        }

        .no-photo {
            width: 190px;
            height: 185px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border: 1px dashed #e2a9ba;
            border-radius: 6px;
            color: #c7839b;
            background-color: #fff5f8;
            font-size: 13px;
        }

        .product-info {
            flex: 1;
            padding-top: 5px;
        }

        .product-info h3 {
            margin: 0 0 9px;
            font-size: 17px;
            color: #333;
        }

        .product-description {
            margin: 0 0 12px;
            font-size: 12px;
            line-height: 1.5;
            color: #555;
        }

        .product-price {
            margin: 8px 0 4px;
            font-size: 19px;
            font-weight: bold;
            color: #e56d91;
        }

        .product-stock {
            margin: 0 0 10px;
            font-size: 12px;
            color: #555;
        }

        .product-button {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: #333;
            border: 1px solid #555;
            border-radius: 5px;
            font-size: 12px;
            background-color: white;
        }

        .product-button:hover {
            background-color: #ffe8f0;
            border-color: #d94f83;
        }

        .all-products {
            text-align: center;
            margin-top: 28px;
        }

        .all-products a {
            display: inline-block;
            padding: 10px 22px;
            text-decoration: none;
            color: #8d244d;
            background-color: #f8d5e1;
            border: 1px solid #df8fa9;
            border-radius: 6px;
            font-size: 13px;
        }

        .all-products a:hover {
            background-color: #f3bdcf;
        }

        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            padding: 25px;
            text-align: center;
            background-color: #fff0f5;
            border-top: 1px solid #efc8d4;
            color: #666;
            font-size: 13px;
        }

        footer p {
            margin: 5px;
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
                border-bottom: 1px solid #e7cbd3;
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
            src="{{ asset('images/logo-fresh-flower.png') }}"
            alt="Fresh Flower"
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

        <a
            href="{{ route('home') }}"
            class="active"
        >
            Home
        </a>


        {{-- FRESH FLOWER --}}

        <a href="{{ route('products.index') }}">
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

                <circle
                    cx="12"
                    cy="9"
                    r="3"
                />

                <path
                    d="M12 12v9"
                />

                <path
                    d="M12 15c-3-2-6-1-7 2 3 1 6 0 7-2"
                />

                <path
                    d="M12 17c3-2 6-1 7 2-3 1-6 0-7-2"
                />

                <path
                    d="M12 9c-2-2-1-5 1-6 2 2 2 4-1 6"
                />

                <path
                    d="M10 10c-3 0-5-2-4-5 3 0 5 2 4 5"
                />

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

                <path
                    d="M14 9h4l4 4v3h-8"
                />

                <circle
                    cx="6"
                    cy="18"
                    r="2"
                />

                <circle
                    cx="18"
                    cy="18"
                    r="2"
                />

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

                <path
                    d="M8 12l2.5 2.5L16 9"
                />

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

                <path
                    d="M4 13a8 8 0 0 1 16 0"
                />

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

                <path
                    d="M18 19c0 2-2 3-5 3"
                />

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


{{-- =====================================================
     FOOTER
===================================================== --}}

<footer>

    <p>
        © {{ date('Y') }} Fresh Flower
    </p>

    <p>
        Fresh Flower untuk setiap momen istimewa 🌷
    </p>

</footer>


</body>

</html>
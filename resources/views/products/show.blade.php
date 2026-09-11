<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Produk - Fresh Flower</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f8;
            margin: 0;
        }

        /* NAVBAR */
        .navbar {
            background-color: white;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .logo {
            color: #d88c9a;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .nav-menu a {
            color: #555;
            text-decoration: none;
            font-size: 15px;
        }

        .nav-menu a:hover {
            color: #d88c9a;
        }

        /* CONTENT */
        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        h1 {
            color: #d88c9a;
            margin-bottom: 25px;
        }

        p {
            color: #555;
            margin: 12px 0;
            line-height: 1.6;
        }

        .price {
            color: #d88c9a;
            font-size: 22px;
            font-weight: bold;
            margin-top: 20px;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background-color: #d88c9a;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .back {
            background-color: #777;
            margin-right: 8px;
        }

        /* FOTO PRODUK */
        .product-photo {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .no-photo {
            width: 100%;
            height: 250px;
            background-color: #f5f5f5;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar">

        <a href="{{ route('home') }}" class="logo">
            🌷 Fresh Flower
        </a>

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

            @auth
                <a href="{{ route('orders.my') }}">
                    Pesanan Saya
                </a>
            @else
                <a href="{{ route('login') }}">
                    Login
                </a>
            @endauth

        </div>

    </nav>


    {{-- DETAIL PRODUK --}}
    <div class="container">

        <div class="card">

            {{-- FOTO PRODUK --}}
            @if($product->photos->count())

                <img
                    src="{{ asset('storage/' . $product->photos->first()->photo) }}"
                    alt="{{ $product->name }}"
                    class="product-photo"
                >

            @else

                <div class="no-photo">
                    Tidak ada foto produk
                </div>

            @endif


            <h1>
                {{ $product->name }}
            </h1>


            <p>
                <strong>Jenis:</strong>
                {{ $product->type }}
            </p>


            <p>
                <strong>Komposisi:</strong>
                {{ $product->composition ?? '-' }}
            </p>


            <p>
                <strong>Deskripsi:</strong>
                {{ $product->description ?? '-' }}
            </p>


            <p>
                <strong>Stok:</strong>
                {{ $product->stock }}
            </p>


            <p>
                <strong>Jumlah Tangkai:</strong>
                {{ $product->jumlah_tangkai ?? '-' }}
            </p>


            <p class="price">
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </p>


            {{-- TOMBOL --}}
            <a
                href="{{ route('products.index') }}"
                class="btn back"
            >
                Kembali ke Fresh Flower
            </a>


            <form
                action="{{ route('cart.add', $product->id) }}"
                method="POST"
                style="display: inline;"
            >

                @csrf

                <button
                    type="submit"
                    class="btn"
                >
                    Tambah ke Keranjang
                </button>

            </form>

        </div>

    </div>

</body>
</html>
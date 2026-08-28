<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Produk - Fresh Flower</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        h1 {
            color: #d88c9a;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            margin: 10px 0;
        }

        .price {
            color: #d88c9a;
            font-size: 22px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background-color: #d88c9a;
            color: white;
            text-decoration: none;
            border-radius: 7px;
        }

        .back {
            background-color: #777;
            margin-right: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>{{ $product->name }}</h1>

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

        <a
            href="{{ route('products.index') }}"
            class="btn back"
        >
            Kembali
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
                style="border: none; cursor: pointer;"
            >
                Tambah ke Keranjang
            </button>
        </form>

    </div>

</div>

</body>
</html>
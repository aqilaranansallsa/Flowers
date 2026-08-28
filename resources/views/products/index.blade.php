<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fresh Flower - Fresh Flower</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #d88c9a;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
        }

        .product-card {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .product-card h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .product-card p {
            margin: 7px 0;
            color: #555;
        }

        .price {
            color: #d88c9a;
            font-size: 18px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 12px;
            padding: 10px 15px;
            background-color: #d88c9a;
            color: white;
            text-decoration: none;
            border-radius: 7px;
        }

        .empty {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>FRESH FLOWER</h1>

    <p class="subtitle">
        Pilihan bunga segar untuk setiap momen
    </p>

    @if($products->count() > 0)

        <div class="products">

            @foreach($products as $product)

                <div class="product-card">

                    <h2>{{ $product->name }}</h2>

                    <p>
                        Jenis:
                        {{ $product->type }}
                    </p>

                    <p>
                        Stok:
                        {{ $product->stock }}
                    </p>

                    <p>
                        Jumlah tangkai:
                        {{ $product->jumlah_tangkai ?? '-' }}
                    </p>

                    <p class="price">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>

                    <a
                        href="{{ route('products.show', $product->id) }}"
                        class="btn"
                    >
                        Lihat Detail
                    </a>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty">
            <h3>Belum Ada Produk</h3>
            <p>Data produk belum tersedia.</p>
        </div>

    @endif

</div>

</body>
</html>
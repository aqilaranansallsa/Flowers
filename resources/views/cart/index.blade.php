<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keranjang - Fresh Flower</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #d88c9a;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .product-name {
            font-size: 20px;
            font-weight: bold;
            color: #555;
        }

        .price {
            color: #d88c9a;
            font-weight: bold;
        }

        input {
            width: 60px;
            padding: 7px;
        }

        button,
        .btn {
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            color: white;
            background-color: #d88c9a;
        }

        .btn-delete {
            background-color: #999;
        }

        .checkout {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #d88c9a;
            color: white;
            text-decoration: none;
            border-radius: 7px;
        }

        .empty {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        .success {
            background-color: #e8f7e8;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 7px;
        }

        .error {
            background-color: #ffe8e8;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 7px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>KERANJANG</h1>

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

        <div class="empty">
            <h3>Keranjang masih kosong</h3>

            <a href="{{ route('products.index') }}" class="btn">
                Belanja Sekarang
            </a>
        </div>

    @else

        @foreach($products as $product)

            <div class="card">

                <div class="product-name">
                    {{ $product->name }}
                </div>

                <p>
                    Harga:
                    <span class="price">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </span>
                </p>

                <p>
                    Jumlah:
                    {{ $cart[$product->id] }}
                </p>

                <form
                    action="{{ route('cart.update', $product->id) }}"
                    method="POST"
                    style="display: inline;"
                >
                    @csrf
                    @method('PATCH')

                    <input
                        type="number"
                        name="qty"
                        value="{{ $cart[$product->id] }}"
                        min="1"
                    >

                    <button type="submit">
                        Update
                    </button>
                </form>

                <form
                    action="{{ route('cart.remove', $product->id) }}"
                    method="POST"
                    style="display: inline;"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn-delete">
                        Hapus
                    </button>
                </form>

            </div>

        @endforeach


        <div class="card">

            <h3>
                Total Produk:
                {{ $products->count() }}
            </h3>

            <a
                href="{{ route('checkout.index') }}"
                class="checkout"
            >
                Lanjut ke Checkout
            </a>

        </div>

    @endif


    <br>

    <a href="{{ route('products.index') }}">
        ← Kembali ke Fresh Flower
    </a>

</div>

</body>
</html>
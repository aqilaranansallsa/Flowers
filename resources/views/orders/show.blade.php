<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pesanan - Fresh Flower</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf8f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
        }

        .card {
            background-color: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .card h2 {
            margin-top: 0;
            color: #333;
        }

        .info {
            line-height: 1.9;
        }

        .product {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eee;
            padding: 12px 0;
        }

        .product:last-child {
            border-bottom: none;
        }

        .product-name {
            font-weight: bold;
        }

        .subtotal {
            font-weight: bold;
        }

        .total {
            text-align: right;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            color: #c2185b;
        }

        .status {
            display: inline-block;
            padding: 7px 14px;
            border-radius: 20px;
            background-color: #fce4ec;
            color: #c2185b;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            background-color: #e91e63;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn:hover {
            background-color: #c2185b;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Detail Pesanan</h1>

    {{-- Informasi Pesanan --}}
    <div class="card">

        <h2>Informasi Pesanan</h2>

        <div class="info">
            <div>
                <strong>Invoice:</strong>
                {{ $order->invoice }}
            </div>

            <div>
                <strong>Tanggal Pesanan:</strong>
                {{ $order->created_at->format('d-m-Y H:i') }}
            </div>

            <div>
                <strong>Tanggal Pengiriman:</strong>
                {{ \Carbon\Carbon::parse($order->tanggal_pengiriman)->format('d-m-Y') }}
            </div>

            <div>
                <strong>Status Pesanan:</strong>
                <span class="status">
                    {{ ucfirst($order->status) }}
                </span>
            </div>

            <div>
                <strong>Status Pembayaran:</strong>
                {{ ucfirst($order->status_pembayaran) }}
            </div>

            <div>
                <strong>Metode Pembayaran:</strong>
                {{ ucfirst($order->metode_pembayaran) }}
            </div>
        </div>

    </div>

    {{-- Data Penerima --}}
    <div class="card">

        <h2>Data Penerima</h2>

        <div class="info">
            <div>
                <strong>Nama:</strong>
                {{ $order->nama_penerima }}
            </div>

            <div>
                <strong>No. Telepon:</strong>
                {{ $order->telp_penerima }}
            </div>

            <div>
                <strong>Alamat:</strong>
                {{ $order->alamat_pengiriman }}
            </div>

            @if($order->catatan)
                <div>
                    <strong>Catatan:</strong>
                    {{ $order->catatan }}
                </div>
            @endif
        </div>

    </div>

    {{-- Produk yang Dibeli --}}
    <div class="card">

        <h2>Produk yang Dibeli</h2>

        @foreach($order->orderDetails as $detail)

            <div class="product">

                <div>
                    <div class="product-name">
                        {{ $detail->product->name }}
                    </div>

                    <div>
                        {{ $detail->qty }} ×
                        Rp {{ number_format($detail->price, 0, ',', '.') }}
                    </div>
                </div>

                <div class="subtotal">
                    Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                </div>

            </div>

        @endforeach

        <div class="total">
            Total:
            Rp {{ number_format($order->total, 0, ',', '.') }}
        </div>

    </div>

    <a href="{{ route('orders.my') }}" class="btn">
        Kembali ke Pesanan Saya
    </a>

</div>

</body>
</html>
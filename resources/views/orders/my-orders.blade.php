<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pesanan Saya - Fresh Flower</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf8f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .empty {
            background-color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .order-card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .invoice {
            font-weight: bold;
            color: #333;
        }

        .status {
            padding: 6px 12px;
            border-radius: 20px;
            background-color: #fce4ec;
            color: #c2185b;
            font-size: 14px;
        }

        .order-info {
            margin-bottom: 15px;
            line-height: 1.8;
        }

        .total {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 15px;
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

    <h1>Pesanan Saya</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if($orders->count() > 0)

        @foreach($orders as $order)

            <div class="order-card">

                <div class="order-header">
                    <div class="invoice">
                        {{ $order->invoice }}
                    </div>

                    <div class="status">
                        {{ ucfirst($order->status) }}
                    </div>
                </div>

                <div class="order-info">
                    <div>
                        <strong>Tanggal Pesanan:</strong>
                        {{ $order->created_at->format('d-m-Y H:i') }}
                    </div>

                    <div>
                        <strong>Tanggal Pengiriman:</strong>
                        {{ \Carbon\Carbon::parse($order->tanggal_pengiriman)->format('d-m-Y') }}
                    </div>

                    <div>
                        <strong>Metode Pembayaran:</strong>
                        {{ ucfirst($order->metode_pembayaran) }}
                    </div>

                    <div>
                        <strong>Status Pembayaran:</strong>
                        {{ ucfirst($order->status_pembayaran) }}
                    </div>
                </div>

                <div class="total">
                    Total:
                    Rp {{ number_format($order->total, 0, ',', '.') }}
                </div>

                <a href="{{ route('orders.show', $order->id) }}" class="btn">
                    Lihat Detail
                </a>

            </div>

        @endforeach

    @else

        <div class="empty">
            <h3>Belum Ada Pesanan</h3>
            <p>Kamu belum memiliki pesanan.</p>

            <a href="{{ route('products.index') }}" class="btn">
                Belanja Sekarang
            </a>
        </div>

    @endif

</div>

</body>
</html>
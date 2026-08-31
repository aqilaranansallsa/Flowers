<!DOCTYPE html>
<html>
<head>
    <title>Detail Pesanan - Admin Fresh Flower</title>
</head>
<body>

    <h1>Detail Pesanan</h1>

    <p>
        <a href="{{ route('admin.orders.index') }}">
            ← Kembali ke Kelola Pesanan
        </a>
    </p>

    <hr>

    <h2>Informasi Pesanan</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Invoice</th>
            <td>{{ $order->invoice }}</td>
        </tr>

        <tr>
            <th>Customer</th>
            <td>{{ $order->user->name ?? '-' }}</td>
        </tr>

        <tr>
            <th>Nama Penerima</th>
            <td>{{ $order->nama_penerima }}</td>
        </tr>

        <tr>
            <th>No. Telepon</th>
            <td>{{ $order->telp_penerima }}</td>
        </tr>

        <tr>
            <th>Alamat Pengiriman</th>
            <td>{{ $order->alamat_pengiriman }}</td>
        </tr>

        <tr>
            <th>Tanggal Pengiriman</th>
            <td>{{ $order->tanggal_pengiriman }}</td>
        </tr>

        <tr>
            <th>Catatan</th>
            <td>{{ $order->catatan ?? '-' }}</td>
        </tr>

        <tr>
            <th>Metode Pembayaran</th>
            <td>{{ $order->metode_pembayaran }}</td>
        </tr>

        <tr>
            <th>Status Pembayaran</th>
            <td>{{ $order->status_pembayaran }}</td>
        </tr>

        <tr>
            <th>Status Pesanan</th>
            <td>{{ ucfirst($order->status) }}</td>
        </tr>

        <tr>
            <th>Total</th>
            <td>
                Rp {{ number_format($order->total, 0, ',', '.') }}
            </td>
        </tr>
    </table>

    <hr>

    <h2>Produk yang Dipesan</h2>

    @if($order->orderDetails->count())

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>

            <tbody>
                @foreach($order->orderDetails as $detail)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $detail->product->name ?? '-' }}
                        </td>

                        <td>
                            {{ $detail->qty }}
                        </td>

                        <td>
                            Rp {{ number_format($detail->price, 0, ',', '.') }}
                        </td>

                        <td>
                            Rp {{ number_format($detail->qty * $detail->price, 0, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <p>Tidak ada produk dalam pesanan ini.</p>

    @endif

    <hr>

    <h3>
        Total Pesanan:
        Rp {{ number_format($order->total, 0, ',', '.') }}
    </h3>

</body>
</html>
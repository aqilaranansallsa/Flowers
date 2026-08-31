<!DOCTYPE html>
<html>
<head>
    <title>Kelola Pesanan - Admin Fresh Flower</title>
</head>
<body>

    <h1>Kelola Pesanan</h1>

    <p>
        <a href="{{ route('admin.dashboard') }}">
            ← Kembali ke Dashboard
        </a>
    </p>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <hr>

    @if($orders->count())

        <table border="1" cellpadding="10" cellspacing="0">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Invoice</th>
                    <th>Customer</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Total</th>
                    <th>Status Pembayaran</th>
                    <th>Status Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($orders as $order)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $order->invoice }}
                        </td>

                        <td>
                            {{ $order->user->name ?? '-' }}
                        </td>

                        <td>
                            {{ $order->tanggal_pengiriman ?? '-' }}
                        </td>

                        <td>
                            Rp {{ number_format($order->total, 0, ',', '.') }}
                        </td>

                        <td>
                            {{ $order->status_pembayaran ?? '-' }}
                        </td>

                        <td>
                            {{ ucfirst($order->status) }}
                        </td>

                        <td>

                            {{-- DETAIL PESANAN --}}
                            <a href="{{ route('admin.orders.show', $order->id) }}">
                                Detail
                            </a>

                            |

                            {{-- UBAH STATUS --}}
                            <a href="{{ route('admin.orders.edit', $order->id) }}">
                                Ubah Status
                            </a>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>Belum ada pesanan.</p>

    @endif

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - Fresh Flower</title>
</head>
<body>

    <h1>Dashboard Admin</h1>

    <hr>

    <h2>Total Produk</h2>
    <p>{{ $totalProduk }}</p>

    <h2>Pesanan Baru</h2>
    <p>{{ $pesananBaru }}</p>

    <h2>Pesanan Diproses</h2>
    <p>{{ $pesananDiproses }}</p>

    <h2>Total Penjualan</h2>
    <p>Rp {{ number_format($totalPenjualan, 0, ',', '.') }}</p>

</body>
</html>
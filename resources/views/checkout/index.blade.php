<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Checkout - Fresh Flower</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f8;
            color: #444;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #d88c9a;
            margin-bottom: 8px;
        }

        .header p {
            color: #777;
        }

        .checkout-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .card {
            background-color: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .card h2 {
            color: #d88c9a;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        .form-group textarea {
            height: 90px;
            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #d88c9a;
        }

        .error {
            color: #d9534f;
            font-size: 13px;
            margin-top: 5px;
        }

        .product-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .product-info h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .product-info p {
            color: #777;
            font-size: 14px;
        }

        .product-price {
            text-align: right;
            font-weight: bold;
        }

        .total {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 2px solid #eee;
            font-size: 18px;
            font-weight: bold;
        }

        .total span:last-child {
            color: #d88c9a;
        }

        .order-button {
            width: 100%;
            padding: 13px;
            margin-top: 25px;
            border: none;
            border-radius: 8px;
            background-color: #d88c9a;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .order-button:hover {
            opacity: 0.9;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #d88c9a;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .checkout-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>FRESH FLOWER</h1>
        <p>Melakukan Pemesanan</p>
    </div>

    <div class="checkout-content">

        <!-- DATA PENERIMA -->
        <div class="card">

            <h2>Data Penerima</h2>

            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama_penerima">
                        Nama Penerima
                    </label>

                    <input
                        type="text"
                        id="nama_penerima"
                        name="nama_penerima"
                        value="{{ old('nama_penerima', auth()->user()->name) }}"
                        required
                    >

                    @error('nama_penerima')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="telp_penerima">
                        Nomor Telepon
                    </label>

                    <input
                        type="text"
                        id="telp_penerima"
                        name="telp_penerima"
                        value="{{ old('telp_penerima', auth()->user()->telp) }}"
                        placeholder="Masukkan nomor telepon"
                        required
                    >

                    @error('telp_penerima')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat_pengiriman">
                        Alamat Pengiriman
                    </label>

                    <textarea
                        id="alamat_pengiriman"
                        name="alamat_pengiriman"
                        placeholder="Masukkan alamat lengkap"
                        required
                    >{{ old('alamat_pengiriman') }}</textarea>

                    @error('alamat_pengiriman')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_pengiriman">
                        Tanggal Pengiriman
                    </label>

                    <input
                        type="date"
                        id="tanggal_pengiriman"
                        name="tanggal_pengiriman"
                        value="{{ old('tanggal_pengiriman') }}"
                        required
                    >

                    @error('tanggal_pengiriman')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="metode_pembayaran">
                        Metode Pembayaran
                    </label>

                    <select
                        id="metode_pembayaran"
                        name="metode_pembayaran"
                        required
                    >
                        <option value="">-- Pilih Pembayaran --</option>
                        <option value="Transfer Bank">
                            Transfer Bank
                        </option>
                        <option value="COD">
                            COD
                        </option>
                    </select>

                    @error('metode_pembayaran')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="catatan">
                        Catatan (Opsional)
                    </label>

                    <textarea
                        id="catatan"
                        name="catatan"
                        placeholder="Catatan untuk pesanan..."
                    >{{ old('catatan') }}</textarea>
                </div>

        </div>

        <!-- RINGKASAN PESANAN -->
        <div class="card">

            <h2>Ringkasan Pesanan</h2>

            @foreach ($products as $product)

                @php
                    $qty = $cart[$product->id];
                    $subtotal = $product->price * $qty;
                @endphp

                <div class="product-item">

                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>

                        <p>
                            {{ $qty }} ×
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                    </div>

                    <div class="product-price">
                        Rp {{ number_format($subtotal, 0, ',', '.') }}
                    </div>

                </div>

            @endforeach

            <div class="total">
                <span>Total</span>

                <span>
                    Rp {{ number_format($total, 0, ',', '.') }}
                </span>
            </div>

            <button
                type="submit"
                class="order-button"
            >
                BUAT PESANAN
            </button>

            </form>

            <a
                href="{{ route('cart.index') }}"
                class="back-link"
            >
                ← Kembali ke Keranjang
            </a>

        </div>

    </div>

</div>

</body>
</html>
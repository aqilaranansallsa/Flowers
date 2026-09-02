<!DOCTYPE html>
<html>

<head>
    <title>Ubah Status Pesanan - Admin Fresh Flower</title>
</head>

<body>

    <h1>Ubah Status Pesanan</h1>

    <p>
        <a href="{{ route('admin.orders.index') }}">
            ← Kembali ke Kelola Pesanan
        </a>
    </p>

    <hr>

    {{-- Informasi Pesanan --}}
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
            <th>Metode Pembayaran</th>
            <td>{{ $order->metode_pembayaran }}</td>
        </tr>

        <tr>
            <th>Total</th>
            <td>
                Rp {{ number_format($order->total, 0, ',', '.') }}
            </td>
        </tr>

    </table>

    <br>

    {{-- Form Ubah Status --}}
    <h2>Ubah Status Pesanan</h2>

    @if($errors->any())

        <div style="color: red;">

            <strong>Terjadi kesalahan:</strong>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form
        action="{{ route('admin.orders.update', $order->id) }}"
        method="POST"
    >

        @csrf

        @method('PUT')


        {{-- Status Pesanan --}}
        <p>

            <label for="status">
                <strong>Status Pesanan:</strong>
            </label>

            <br>

            <select name="status" id="status" required>

                <option value="menunggu"
                    {{ old('status', $order->status) == 'menunggu' ? 'selected' : '' }}>
                    Menunggu
                </option>

                <option value="diproses"
                    {{ old('status', $order->status) == 'diproses' ? 'selected' : '' }}>
                    Diproses
                </option>

                <option value="dikirim"
                    {{ old('status', $order->status) == 'dikirim' ? 'selected' : '' }}>
                    Dikirim
                </option>

                <option value="selesai"
                    {{ old('status', $order->status) == 'selesai' ? 'selected' : '' }}>
                    Selesai
                </option>

            </select>

        </p>


        {{-- Status Pembayaran --}}
        <p>

            <label for="status_pembayaran">
                <strong>Status Pembayaran:</strong>
            </label>

            <br>

            <select
                name="status_pembayaran"
                id="status_pembayaran"
                required
            >

                <option value="menunggu"
                    {{ old('status_pembayaran', $order->status_pembayaran) == 'menunggu' ? 'selected' : '' }}>
                    Menunggu
                </option>

                <option value="dibayar"
                    {{ old('status_pembayaran', $order->status_pembayaran) == 'dibayar' ? 'selected' : '' }}>
                    Dibayar
                </option>

            </select>

        </p>


        {{-- Nama Penerima --}}
        <p>

            <label for="nama_penerima">
                Nama Penerima:
            </label>

            <br>

            <input
                type="text"
                name="nama_penerima"
                id="nama_penerima"
                value="{{ old('nama_penerima', $order->nama_penerima) }}"
                required
            >

        </p>


        {{-- Telepon --}}
        <p>

            <label for="telp_penerima">
                No. Telepon:
            </label>

            <br>

            <input
                type="text"
                name="telp_penerima"
                id="telp_penerima"
                value="{{ old('telp_penerima', $order->telp_penerima) }}"
                required
            >

        </p>


        {{-- Alamat --}}
        <p>

            <label for="alamat_pengiriman">
                Alamat Pengiriman:
            </label>

            <br>

            <textarea
                name="alamat_pengiriman"
                id="alamat_pengiriman"
                rows="4"
                cols="50"
                required
            >{{ old('alamat_pengiriman', $order->alamat_pengiriman) }}</textarea>

        </p>


        {{-- Tanggal Pengiriman --}}
        <p>

            <label for="tanggal_pengiriman">
                Tanggal Pengiriman:
            </label>

            <br>

            <input
                type="date"
                name="tanggal_pengiriman"
                id="tanggal_pengiriman"
                value="{{ old('tanggal_pengiriman', $order->tanggal_pengiriman) }}"
                required
            >

        </p>


        {{-- Catatan --}}
        <p>

            <label for="catatan">
                Catatan:
            </label>

            <br>

            <textarea
                name="catatan"
                id="catatan"
                rows="4"
                cols="50"
            >{{ old('catatan', $order->catatan) }}</textarea>

        </p>


        {{-- Metode Pembayaran --}}
        <p>

            <label for="metode_pembayaran">
                Metode Pembayaran:
            </label>

            <br>

            <select
                name="metode_pembayaran"
                id="metode_pembayaran"
                required
            >

                <option value="Transfer Bank"
                    {{ old('metode_pembayaran', $order->metode_pembayaran) == 'Transfer Bank' ? 'selected' : '' }}>
                    Transfer Bank
                </option>

                <option value="COD"
                    {{ old('metode_pembayaran', $order->metode_pembayaran) == 'COD' ? 'selected' : '' }}>
                    COD
                </option>

            </select>

        </p>


        <button type="submit">
            Simpan Perubahan
        </button>

        &nbsp;

        <a href="{{ route('admin.orders.index') }}">
            Batal
        </a>

    </form>

</body>

</html>
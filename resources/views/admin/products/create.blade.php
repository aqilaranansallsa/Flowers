<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk - Admin Fresh Flower</title>
</head>
<body>

    <h1>Tambah Produk</h1>

    <p>
        <a href="{{ route('admin.products.index') }}">
            ← Kembali ke Kelola Produk
        </a>
    </p>

    @if ($errors->any())
        <div>
            <strong>Terjadi kesalahan:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('admin.products.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        <p>
            <label for="name">Nama Produk</label><br>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
            >
        </p>

        <p>
            <label for="type">Jenis</label><br>
            <input
                type="text"
                id="type"
                name="type"
                value="{{ old('type') }}"
                required
            >
        </p>

        <p>
            <label for="composition">Komposisi Bunga</label><br>
            <textarea
                id="composition"
                name="composition"
                rows="4"
            >{{ old('composition') }}</textarea>
        </p>

        <p>
            <label for="description">Deskripsi</label><br>
            <textarea
                id="description"
                name="description"
                rows="5"
            >{{ old('description') }}</textarea>
        </p>

        <p>
            <label for="price">Harga</label><br>
            <input
                type="number"
                id="price"
                name="price"
                value="{{ old('price') }}"
                min="0"
                required
            >
        </p>

        <p>
            <label for="stock">Stok</label><br>
            <input
                type="number"
                id="stock"
                name="stock"
                value="{{ old('stock') }}"
                min="0"
                required
            >
        </p>

        <p>
            <label for="jumlah_tangkai">Jumlah Tangkai</label><br>
            <input
                type="number"
                id="jumlah_tangkai"
                name="jumlah_tangkai"
                value="{{ old('jumlah_tangkai') }}"
                min="0"
            >
        </p>

        <p>
            <label for="photos">Foto Produk</label><br>
            <input
                type="file"
                id="photos"
                name="photos[]"
                accept="image/*"
                multiple
            >
        </p>

        <p>
            <small>
                Bisa memilih lebih dari satu foto.
                Format: JPG, JPEG, PNG, WEBP.
            </small>
        </p>

        <button type="submit">
            Simpan Produk
        </button>

    </form>

</body>
</html>
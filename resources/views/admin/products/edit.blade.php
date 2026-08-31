<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk - Admin Fresh Flower</title>
</head>

<body>

    <h1>Edit Produk</h1>

    <p>
        <a href="{{ route('admin.products.index') }}">
            ← Kembali ke Kelola Produk
        </a>
    </p>

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
        action="{{ route('admin.products.update', $product) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')

        <p>
            <label>Nama Produk</label><br>
            <input
                type="text"
                name="name"
                value="{{ old('name', $product->name) }}"
                required
            >
        </p>

        <p>
            <label>Jenis</label><br>
            <input
                type="text"
                name="type"
                value="{{ old('type', $product->type) }}"
                required
            >
        </p>

        <p>
            <label>Komposisi Bunga</label><br>
            <textarea
                name="composition"
                rows="4"
            >{{ old('composition', $product->composition) }}</textarea>
        </p>

        <p>
            <label>Deskripsi</label><br>
            <textarea
                name="description"
                rows="5"
            >{{ old('description', $product->description) }}</textarea>
        </p>

        <p>
            <label>Harga</label><br>
            <input
                type="number"
                name="price"
                value="{{ old('price', $product->price) }}"
                min="0"
                required
            >
        </p>

        <p>
            <label>Stok</label><br>
            <input
                type="number"
                name="stock"
                value="{{ old('stock', $product->stock) }}"
                min="0"
                required
            >
        </p>

        <p>
            <label>Jumlah Tangkai</label><br>
            <input
                type="number"
                name="jumlah_tangkai"
                value="{{ old('jumlah_tangkai', $product->jumlah_tangkai) }}"
                min="0"
            >
        </p>

        <hr>

        <h3>Foto Produk</h3>

        @if($product->photos->count())

            <p>Foto saat ini:</p>

            @foreach($product->photos as $photo)

                <div style="margin-bottom: 15px;">

                    <img
                        src="{{ asset('storage/' . $photo->photo) }}"
                        alt="{{ $product->name }}"
                        width="150"
                        height="150"
                        style="object-fit: cover;"
                    >

                </div>

            @endforeach

        @else

            <p>Belum ada foto produk.</p>

        @endif

        <p>
            <label>Pilih Foto Baru</label><br>

            <input
                type="file"
                name="photos[]"
                accept="image/jpeg,image/png,image/webp"
                multiple
            >
        </p>

        <small>
            Jika memilih foto baru, foto tersebut akan ditambahkan ke produk.
        </small>

        <br><br>

        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

</body>
</html>
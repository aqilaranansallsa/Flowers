<!DOCTYPE html>
<html>
<head>
    <title>Kelola Produk - Admin Fresh Flower</title>
</head>

<body>

    <h1>Kelola Produk</h1>

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

    <p>
        <a href="{{ route('admin.products.create') }}">
            + Tambah Produk
        </a>
    </p>

    <hr>

    @if($products->count())

        <table border="1" cellpadding="10" cellspacing="0">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Produk</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Jumlah Tangkai</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($products as $product)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        {{-- FOTO PRODUK --}}
                        <td>

                            @if($product->photos->count())

                                <img
                                    src="{{ asset('storage/' . $product->photos->first()->photo) }}"
                                    alt="{{ $product->name }}"
                                    width="100"
                                    height="100"
                                    style="object-fit: cover;"
                                >

                            @else

                                <span>Tidak ada foto</span>

                            @endif

                        </td>

                        <td>
                            {{ $product->name }}
                        </td>

                        <td>
                            {{ $product->type }}
                        </td>

                        <td>
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </td>

                        <td>
                            {{ $product->stock }}
                        </td>

                        <td>
                            {{ $product->jumlah_tangkai ?? '-' }}
                        </td>

                        <td>

                            <a href="{{ route('admin.products.edit', $product) }}">
                                Edit
                            </a>

                            |

                            <form
                                action="{{ route('admin.products.destroy', $product) }}"
                                method="POST"
                                style="display:inline;"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('Yakin ingin menghapus produk ini?')"
                                >
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>Belum ada produk.</p>

    @endif

</body>
</html>
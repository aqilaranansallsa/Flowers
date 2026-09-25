@extends('layouts.app')

@section('title', 'Detail Produk - Floréa')

@php $activeNav = 'products'; @endphp

@section('content')

{{-- =====================================================
     DETAIL PRODUK
===================================================== --}}
<main class="detail-container">

    <div class="detail-grid">

        {{-- GALERI FOTO --}}
        <div class="gallery">

            @if($product->photos->count())

                <div class="main-photo-wrapper">
                    <button type="button" class="gallery-arrow gallery-prev" onclick="previousPhoto()">‹</button>
                    <img
                        id="mainPhoto"
                        src="{{ asset('storage/' . $product->photos->first()->photo) }}"
                        alt="{{ $product->name }}"
                        class="main-photo"
                    >
                    <button type="button" class="gallery-arrow gallery-next" onclick="nextPhoto()">›</button>
                </div>

                <div class="thumbnails">
                    @foreach($product->photos as $index => $photo)
                        <button
                            type="button"
                            class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                            onclick="changePhoto({{ $index }})"
                        >
                            <img src="{{ asset('storage/' . $photo->photo) }}" alt="Foto {{ $index + 1 }}">
                        </button>
                    @endforeach
                </div>

            @else

                <div class="no-photo-lg">
                    Foto produk<br>belum tersedia
                </div>

            @endif

        </div>

        {{-- INFORMASI PRODUK --}}
        <div class="product-info">

            <h2 class="product-name-lg">{{ strtoupper($product->name) }}</h2>

            <div class="price-row">
                <strong>Harga</strong>
                <span>:</span>
                <span class="price">Rp{{ number_format($product->price, 0, ',', '.') }}</span>
            </div>

            <div class="stock-row">
                <strong>Stok</strong>
                <span>:</span>
                <span class="stock">{{ $product->stock }}</span>
            </div>

            <div class="info-section">

                <div class="info-box">
                    <h3 class="info-title">Deskripsi</h3>
                    <p class="info-text">
                        {{ $product->description ?? 'Rangkaian bunga pilihan untuk berbagai momen spesial.' }}
                    </p>
                </div>

                <div class="info-box">
                    <h3 class="info-title">Komposisi bunga</h3>
                    <p class="info-text">{{ $product->composition ?? '-' }}</p>
                </div>

                <div class="info-box">
                    <h3 class="info-title">Jumlah tangkai</h3>
                    <p class="info-text">{{ $product->jumlah_tangkai ?? '-' }} tangkai</p>
                </div>

            </div>

            {{-- JUMLAH --}}
            <div class="quantity-section">
                <h3 class="quantity-title">Jumlah Produk</h3>
                <div class="quantity-control">
                    <button type="button" onclick="decreaseQuantity()">-</button>
                    <input type="text" id="quantity" value="1" readonly>
                    <button type="button" onclick="increaseQuantity()">+</button>
                </div>
            </div>

            {{-- TAMBAH KE KERANJANG --}}
            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="cart-form">
                @csrf
                <input type="hidden" name="quantity" id="cartQuantity" value="1">
                <button type="submit" class="cart-button">
                    🛒 &nbsp; TAMBAH KE KERANJANG
                </button>
            </form>

        </div>

    </div>

</main>


{{-- =====================================================
     KEUNGGULAN
===================================================== --}}
<section class="advantages-strip">

    <div class="advantage">
        <div>
            <h3>Pembayaran Aman</h3>
            <p>100% aman dan terpercaya</p>
        </div>
    </div>

    <div class="advantage">
        <div>
            <h3>Pengiriman Cepat</h3>
            <p>Dikirim tepat waktu</p>
        </div>
    </div>

    <div class="advantage">
        <div>
            <h3>Layanan 24/7</h3>
            <p>Siap membantu anda</p>
        </div>
    </div>

</section>

@endsection

@push('scripts')
<script>
    const photos = @json($product->photos->pluck('photo'));
    let currentIndex = 0;

    function changePhoto(index) {
        currentIndex = index;
        document.getElementById('mainPhoto').src = '/storage/' + photos[index];
        document.querySelectorAll('.thumbnail').forEach((el, i) => {
            el.classList.toggle('active', i === index);
        });
    }

    function previousPhoto() {
        const prev = (currentIndex - 1 + photos.length) % photos.length;
        changePhoto(prev);
    }

    function nextPhoto() {
        const next = (currentIndex + 1) % photos.length;
        changePhoto(next);
    }

    function decreaseQuantity() {
        const input = document.getElementById('quantity');
        const val = parseInt(input.value);
        if (val > 1) {
            input.value = val - 1;
            document.getElementById('cartQuantity').value = val - 1;
        }
    }

    function increaseQuantity() {
        const input = document.getElementById('quantity');
        const val = parseInt(input.value);
        input.value = val + 1;
        document.getElementById('cartQuantity').value = val + 1;
    }
</script>
@endpush

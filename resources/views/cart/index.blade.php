@extends('layouts.app')

@section('title', 'Keranjang - Floréa')

@php $activeNav = 'cart'; @endphp

@section('content')

<div class="container">

    {{-- FLASH MESSAGES --}}
    @if(session('success'))
        <div class="success-msg">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="error-msg">{{ session('error') }}</div>
    @endif


    @if($products->isEmpty())

        {{-- KERANJANG KOSONG --}}
        <div class="empty-cart">
            <h3>Keranjang masih kosong</h3>
            <p>Yuk pilih fresh flower favoritmu terlebih dahulu.</p>
            <a href="{{ route('products.index') }}" class="shop-button">Belanja Sekarang</a>
        </div>

    @else

        @php
            $totalProduk = 0;
            $totalHarga  = 0;
        @endphp

        {{-- DAFTAR PRODUK --}}
        @foreach($products as $product)
            @php
                $qty      = $cart[$product->id] ?? 1;
                $subtotal = $product->price * $qty;
                $totalProduk += $qty;
                $totalHarga  += $subtotal;
                $photo    = $product->photos->first();
            @endphp

            <div class="cart-card">

                {{-- FOTO --}}
                <div class="cart-product-image">
                    @if($photo)
                        <img src="{{ asset('storage/' . $photo->photo) }}" alt="{{ $product->name }}">
                    @else
                        <div class="no-image">Foto produk<br>belum tersedia</div>
                    @endif
                </div>

                {{-- INFO --}}
                <div class="cart-product-info">

                    <h2 class="cart-product-name">{{ strtoupper($product->name) }}</h2>

                    <p class="cart-product-price">
                        Harga : <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    </p>

                    <div class="quantity-label">
                        <span>Jumlah :</span>
                        <form action="{{ route('cart.update', $product->id) }}" method="POST" class="quantity-form">
                            @csrf
                            @method('PATCH')
                            <button type="button" onclick="changeQuantity(this, -1)">−</button>
                            <input type="number" name="qty" value="{{ $qty }}" min="1" readonly>
                            <button type="button" onclick="changeQuantity(this, 1)">+</button>
                        </form>
                    </div>

                    <p class="subtotal">
                        Subtotal : <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                    </p>

                    <form action="{{ route('cart.remove', $product->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">HAPUS</button>
                    </form>

                </div>

            </div>
        @endforeach


        {{-- RINGKASAN --}}
        <div class="summary">

            <h3 class="summary-title">RINGKASAN PESANAN</h3>

            <div class="summary-row">
                <span>TOTAL PRODUK :</span>
                <span class="value">{{ $totalProduk }}</span>
            </div>

            <div class="summary-row">
                <span>TOTAL HARGA :</span>
                <span class="value">Rp {{ number_format($totalHarga, 0, ',', '.') }}</span>
            </div>

            <a href="{{ route('checkout.index') }}" class="checkout-button">
                LANJUT KE PEMESANAN
            </a>

        </div>

    @endif

    <a href="{{ route('products.index') }}" class="back-link">← Kembali ke Fresh Flower</a>

</div>

@endsection

@push('scripts')
<script>
    function changeQuantity(btn, delta) {
        const form  = btn.closest('.quantity-form');
        const input = form.querySelector('input[name="qty"]');
        const val   = parseInt(input.value) + delta;
        if (val < 1) return;
        input.value = val;
        form.submit();
    }
</script>
@endpush

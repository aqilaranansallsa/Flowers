@extends('layouts.app')

@section('title', 'Pesanan Saya - Floréa')

@php $activeNav = 'orders'; @endphp

@section('content')

<div class="orders-container">

    @if(session('success'))
        <div class="orders-success">{{ session('success') }}</div>
    @endif

    @if($orders->count() > 0)

        <div class="orders-list">

            @foreach($orders as $order)

                <div class="order-card">

                    {{-- HEADER --}}
                    <div class="order-header">
                        <div>
                            <div class="invoice-label">NOMOR PESANAN</div>
                            <div class="invoice">{{ $order->invoice }}</div>
                        </div>
                        <div class="status-wrapper">
                            <span class="status status-order">
                                Pesanan: {{ ucfirst($order->status) }}
                            </span>
                            <span class="status status-payment">
                                Pembayaran: {{ ucfirst($order->status_pembayaran) }}
                            </span>
                        </div>
                    </div>

                    {{-- BODY --}}
                    <div class="order-body">

                        <div class="order-info">
                            <div class="info-item">
                                <strong>Tanggal Pesanan</strong>
                                {{ $order->created_at->format('d-m-Y H:i') }}
                            </div>
                            <div class="info-item">
                                <strong>Tanggal Pengiriman</strong>
                                {{ \Carbon\Carbon::parse($order->tanggal_pengiriman)->format('d-m-Y') }}
                            </div>
                            <div class="info-item">
                                <strong>Metode Pembayaran</strong>
                                {{ ucfirst($order->metode_pembayaran) }}
                            </div>
                            <div class="info-item">
                                <strong>Nama Penerima</strong>
                                {{ $order->nama_penerima }}
                            </div>
                        </div>

                        <div class="product-section-orders">
                            <div class="product-title-orders">PRODUK</div>
                            @foreach($order->orderDetails as $detail)
                                <div class="order-product-item">
                                    <div>
                                        <div class="order-product-name">{{ $detail->product->name }}</div>
                                        <div class="order-product-qty">
                                            {{ $detail->qty }} × Rp {{ number_format($detail->price, 0, ',', '.') }}
                                        </div>
                                    </div>
                                    <div class="order-product-subtotal">
                                        Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="total-section">
                            <span class="total-label">Total Pembayaran</span>
                            <span class="total-price">
                                Rp {{ number_format($order->total, 0, ',', '.') }}
                            </span>
                        </div>

                        <div class="order-action">
                            <a href="{{ route('orders.show', $order->id) }}" class="detail-button">
                                LIHAT DETAIL
                            </a>
                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="orders-empty">
            <div class="empty-icon">🌷</div>
            <h3>Belum Ada Pesanan</h3>
            <p>Kamu belum memiliki pesanan. Yuk, pilih fresh flower favoritmu!</p>
            <a href="{{ route('products.index') }}" class="shop-button">BELANJA SEKARANG</a>
        </div>

    @endif

</div>

@endsection

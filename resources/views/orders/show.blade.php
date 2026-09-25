@extends('layouts.app')

@section('title', 'Detail Pesanan - Floréa')

@php $activeNav = 'orders'; @endphp

@section('content')

<div class="order-detail-container">

    <div class="detail-card">

        {{-- HEADER --}}
        <div class="detail-header">
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

        <div class="detail-body">

            {{-- INFORMASI PESANAN --}}
            <div class="section">
                <h2 class="section-title-italic">Informasi Pesanan</h2>
                <div class="info-grid">
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
                        <strong>Status Pembayaran</strong>
                        {{ ucfirst($order->status_pembayaran) }}
                    </div>
                </div>
            </div>

            {{-- INFORMASI PENERIMA --}}
            <div class="section">
                <h2 class="section-title-italic">Informasi Penerima</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <strong>Nama Penerima</strong>
                        {{ $order->nama_penerima }}
                    </div>
                    <div class="info-item">
                        <strong>Nomor HP</strong>
                        {{ $order->telp_penerima }}
                    </div>
                    <div class="info-item">
                        <strong>Alamat Pengiriman</strong>
                        <span class="address">{{ $order->alamat_pengiriman }}</span>
                    </div>
                    <div class="info-item">
                        <strong>Catatan</strong>
                        {{ $order->catatan ?: '-' }}
                    </div>
                </div>
            </div>

            {{-- PRODUK --}}
            <div class="section">
                <h2 class="section-title-italic">Produk yang Dipesan</h2>
                <div class="product-list">
                    @foreach($order->orderDetails as $detail)
                        <div class="product-list-item">
                            <div>
                                <div class="product-list-name">{{ $detail->product->name }}</div>
                                <div class="product-list-detail">
                                    {{ $detail->qty }} × Rp {{ number_format($detail->price, 0, ',', '.') }}
                                </div>
                            </div>
                            <div class="product-list-subtotal">
                                Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- TOTAL --}}
            <div class="section">
                <div class="total-box">
                    <span class="total-box-label">Total Pembayaran</span>
                    <span class="total-box-price">
                        Rp {{ number_format($order->total, 0, ',', '.') }}
                    </span>
                </div>
            </div>

            {{-- PEMBAYARAN --}}
            <div class="section">
                <h2 class="section-title-italic">Informasi Pembayaran</h2>
                <div class="payment-info-box">
                    <div class="payment-info-row">
                        <strong>Metode Pembayaran</strong>
                        <span>{{ ucfirst($order->metode_pembayaran) }}</span>
                    </div>
                    <div class="payment-info-row">
                        <strong>Status Pembayaran</strong>
                        <span>{{ ucfirst($order->status_pembayaran) }}</span>
                    </div>
                </div>
            </div>

            {{-- TOMBOL KEMBALI --}}
            <div class="order-action-detail">
                <a href="{{ route('orders.my') }}" class="back-button">
                    KEMBALI KE PESANAN SAYA
                </a>
            </div>

        </div>

    </div>

</div>

@endsection

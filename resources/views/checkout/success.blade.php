@extends('layouts.app')

@section('title', 'Pesanan Berhasil - Floréa')

@php $activeNav = 'cart'; @endphp

@section('content')

<main class="success-container">

    <div class="success-card">

        {{-- ICON + JUDUL --}}
        <div class="success-icon-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        </div>

        <h1 class="success-title">Pesanan Berhasil Dibuat! 🎉</h1>

        <div class="success-invoice">
            No. Pesanan &nbsp;
            <strong>{{ $order->invoice }}</strong>
        </div>

        {{-- FLASH --}}
        @if (session('success'))
            <div class="success-flash success-flash--ok">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="success-flash success-flash--err">
                @foreach ($errors->all() as $error)<div>{{ $error }}</div>@endforeach
            </div>
        @endif

        {{-- DETAIL PESANAN --}}
        <div class="success-section-title">Detail Pesanan</div>

        <div class="success-detail-box">

            {{-- Produk --}}
            @foreach ($order->orderDetails as $detail)
            <div class="success-detail-row">
                <span class="success-detail-label">{{ $detail->product->name }}</span>
                <span class="success-detail-right">
                    {{ $detail->qty }} × Rp {{ number_format($detail->price, 0, ',', '.') }}
                </span>
            </div>
            @endforeach

            <div class="success-detail-divider"></div>

            <div class="success-detail-row">
                <span class="success-detail-label">Total Pembayaran</span>
                <span class="success-detail-total">Rp {{ number_format($order->total, 0, ',', '.') }}</span>
            </div>

            <div class="success-detail-row">
                <span class="success-detail-label">Tanggal Pengiriman</span>
                <span class="success-detail-right">
                    {{ \Carbon\Carbon::parse($order->tanggal_pengiriman)->translatedFormat('d F Y') }}
                </span>
            </div>

            <div class="success-detail-row">
                <span class="success-detail-label">Metode Pembayaran</span>
                <span class="success-detail-right">{{ $order->metode_pembayaran }}</span>
            </div>

        </div>

        {{-- TOMBOL WHATSAPP (Transfer Bank) --}}
        @if ($order->metode_pembayaran === 'Transfer Bank')
            @php
                $waMessage = urlencode(
                    'Halo Floréa 👋, saya baru saja memesan dengan nomor pesanan *' .
                    $order->invoice . '* sebesar *Rp ' .
                    number_format($order->total, 0, ',', '.') .
                    '*. Bagaimana cara pembayarannya? Terima kasih!'
                );
            @endphp

            <div class="success-info-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                Segera konfirmasi pembayaran via WhatsApp agar pesanan diproses lebih cepat.
            </div>

            <a href="https://wa.me/6285122007845?text={{ $waMessage }}"
               target="_blank"
               class="success-wa-btn">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    <path d="M12 0C5.373 0 0 5.373 0 12c0 2.124.558 4.121 1.535 5.856L.057 23.215a.75.75 0 0 0 .916.948l5.544-1.453A11.943 11.943 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.693-.502-5.239-1.381l-.375-.217-3.892 1.021 1.048-3.793-.237-.386A9.96 9.96 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                </svg>
                Konfirmasi Pembayaran via WhatsApp
            </a>
        @endif

        {{-- TOMBOL LIHAT PESANAN --}}
        <a href="{{ route('orders.my') }}" class="success-orders-btn">
            Lihat Pesanan Saya
        </a>

    </div>

</main>

@endsection

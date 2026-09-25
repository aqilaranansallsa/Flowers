@extends('layouts.app')

@section('title', 'Pemesanan - Floréa')

@php $activeNav = 'cart'; @endphp

@section('content')

<main class="checkout-container">

    {{-- STEP INDICATOR --}}
    <div class="checkout-steps">
        <div class="step done">
            <div class="step-circle">✓</div>
            <span>Keranjang</span>
        </div>
        <div class="step-line"></div>
        <div class="step active">
            <div class="step-circle">2</div>
            <span>Pemesanan</span>
        </div>
        <div class="step-line"></div>
        <div class="step">
            <div class="step-circle">3</div>
            <span>Pembayaran</span>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-error">
            ⚠️ Periksa kembali data pemesanan yang kamu masukkan.
        </div>
    @endif

    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf

        <div class="checkout-layout">

            {{-- ==================== KOLOM KIRI ==================== --}}
            <div class="checkout-left">

                {{-- DATA PENERIMA --}}
                <section class="checkout-card">
                    <div class="card-title">
                        <svg class="card-title-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"></path>
                        </svg>
                        DATA PENERIMA
                    </div>

                    <div class="form-group">
                        <label for="nama_penerima">Nama Lengkap</label>
                        <input type="text" id="nama_penerima" name="nama_penerima"
                               class="form-control" placeholder="Nama penerima"
                               value="{{ old('nama_penerima', auth()->user()->name) }}" required>
                        @error('nama_penerima')
                            <div class="field-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control readonly-input"
                                   value="{{ auth()->user()->email }}" readonly>
                            <small class="form-hint">Email tidak dapat diubah</small>
                        </div>
                        <div class="form-group">
                            <label for="telp_penerima">No. Telepon</label>
                            <input type="text" id="telp_penerima" name="telp_penerima"
                                   class="form-control" placeholder="Contoh: 08123456789"
                                   value="{{ old('telp_penerima', auth()->user()->telp) }}" required>
                            @error('telp_penerima')
                                <div class="field-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </section>

                {{-- DATA PENGIRIMAN --}}
                <section class="checkout-card">
                    <div class="card-title">
                        <svg class="card-title-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                        DATA PENGIRIMAN
                    </div>

                    <div class="form-group">
                        <label for="alamat_pengiriman">Alamat Lengkap</label>
                        <textarea id="alamat_pengiriman" name="alamat_pengiriman"
                                  class="form-control" rows="3"
                                  placeholder="Nama jalan, nomor, RT/RW, kelurahan, kota"
                                  required>{{ old('alamat_pengiriman') }}</textarea>
                        @error('alamat_pengiriman')
                            <div class="field-error">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- CARA PENERIMAAN --}}
                    <div class="form-group">
                        <label>Cara Penerimaan</label>
                        <div class="delivery-options">

                            <label class="delivery-option-card {{ old('jenis_penerimaan', 'ambil') != 'kirim' ? 'selected' : '' }}" id="card-ambil">
                                <input type="radio" name="jenis_penerimaan" value="ambil"
                                       {{ old('jenis_penerimaan', 'ambil') != 'kirim' ? 'checked' : '' }}
                                       onchange="toggleJenisPenerimaan(this)">
                                <div class="delivery-option-content">
                                    <span class="delivery-icon">🏪</span>
                                    <div>
                                        <strong>Ambil Sendiri</strong>
                                        <small>Ambil langsung di toko</small>
                                    </div>
                                </div>
                            </label>

                            <label class="delivery-option-card {{ old('jenis_penerimaan') == 'kirim' ? 'selected' : '' }}" id="card-kirim">
                                <input type="radio" name="jenis_penerimaan" value="kirim"
                                       {{ old('jenis_penerimaan') == 'kirim' ? 'checked' : '' }}
                                       onchange="toggleJenisPenerimaan(this)">
                                <div class="delivery-option-content">
                                    <span class="delivery-icon">🚚</span>
                                    <div>
                                        <strong>Dikirim</strong>
                                        <small>Diantar ke alamat kamu</small>
                                    </div>
                                </div>
                            </label>

                        </div>
                    </div>

                    {{-- TANGGAL AMBIL — hanya tampil kalau pilih "Ambil Sendiri" --}}
                    <div class="form-group" id="tanggal-wrapper"
                         style="{{ old('jenis_penerimaan') == 'kirim' ? 'display:none' : '' }}">
                        <label for="tanggal_pengiriman">📅 Tanggal Ambil</label>
                        <input type="date" id="tanggal_pengiriman" name="tanggal_pengiriman"
                               class="form-control form-control-date"
                               value="{{ old('tanggal_pengiriman') }}"
                               min="{{ date('Y-m-d', strtotime('+1 day')) }}">
                        <small class="form-hint">Pilih tanggal kamu akan mengambil pesanan di toko (minimal H+1)</small>
                        @error('tanggal_pengiriman')
                            <div class="field-error">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- INFO kalau pilih dikirim --}}
                    <div id="kirim-info" class="kirim-info-box"
                         style="{{ old('jenis_penerimaan') != 'kirim' ? 'display:none' : '' }}">
                        🚚 Pesanan kamu akan dikirim. Admin akan mengonfirmasi jadwal pengiriman melalui status pesanan.
                    </div>

                    <div class="form-group" style="margin-top: 16px;">
                        <label for="catatan">Catatan <span class="label-optional">(opsional)</span></label>
                        <textarea id="catatan" name="catatan" class="form-control" rows="2"
                                  placeholder="Contoh: tolong dibungkus kado, warna pita merah...">{{ old('catatan') }}</textarea>
                    </div>

                </section>

                {{-- METODE PEMBAYARAN --}}
                <section class="checkout-card">
                    <div class="card-title">
                        <svg class="card-title-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="2" y="5" width="20" height="14" rx="2"/>
                            <path d="M2 10h20"/>
                        </svg>
                        METODE PEMBAYARAN
                    </div>

                    <div class="payment-options">
                        <label class="payment-option-card {{ old('metode_pembayaran') == 'Transfer Bank' ? 'selected' : '' }}">
                            <input type="radio" name="metode_pembayaran" value="Transfer Bank"
                                   {{ old('metode_pembayaran') == 'Transfer Bank' ? 'checked' : '' }}
                                   required onchange="toggleBankOptions(); selectPayment(this)">
                            <div class="payment-option-content">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <rect x="2" y="5" width="20" height="14" rx="2"/>
                                    <path d="M2 10h20"/>
                                </svg>
                                <div>
                                    <strong>Transfer Bank</strong>
                                    <small>BCA, BRI, Mandiri</small>
                                </div>
                            </div>
                        </label>

                        <label class="payment-option-card {{ old('metode_pembayaran') == 'COD' ? 'selected' : '' }}">
                            <input type="radio" name="metode_pembayaran" value="COD"
                                   {{ old('metode_pembayaran') == 'COD' ? 'checked' : '' }}
                                   onchange="toggleBankOptions(); selectPayment(this)">
                            <div class="payment-option-content">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12 2v20M17 5H9.5a3.5 3.5 0 1 0 0 7h5a3.5 3.5 0 1 1 0 7H6"/>
                                </svg>
                                <div>
                                    <strong>COD</strong>
                                    <small>Bayar saat diterima</small>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div id="bank-options"
                         class="bank-options {{ old('metode_pembayaran') == 'Transfer Bank' ? 'show' : '' }}">
                        <div class="bank-title">Pilih bank tujuan transfer</div>
                        <div class="bank-list">
                            <label class="bank-option">
                                <input type="radio" name="bank_transfer" value="BCA"
                                       {{ old('bank_transfer') == 'BCA' ? 'checked' : '' }}>
                                <span>BCA</span>
                            </label>
                            <label class="bank-option">
                                <input type="radio" name="bank_transfer" value="BRI"
                                       {{ old('bank_transfer') == 'BRI' ? 'checked' : '' }}>
                                <span>BRI</span>
                            </label>
                            <label class="bank-option">
                                <input type="radio" name="bank_transfer" value="Mandiri"
                                       {{ old('bank_transfer') == 'Mandiri' ? 'checked' : '' }}>
                                <span>Mandiri</span>
                            </label>
                        </div>
                        @error('bank_transfer')
                            <div class="field-error">{{ $message }}</div>
                        @enderror
                    </div>

                    @error('metode_pembayaran')
                        <div class="field-error">{{ $message }}</div>
                    @enderror
                </section>

            </div>

            {{-- ==================== KOLOM KANAN — RINGKASAN ==================== --}}
            <div class="checkout-right">
                <div class="checkout-card checkout-summary-sticky">

                    <div class="card-title">
                        <svg class="card-title-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                            <line x1="3" y1="6" x2="21" y2="6"/>
                        </svg>
                        RINGKASAN PESANAN
                    </div>

                    <div class="order-items">
                        @foreach ($products as $product)
                            @php
                                $qty      = $cart[$product->id];
                                $subtotal = $product->price * $qty;
                            @endphp
                            <div class="product-item">
                                <div class="product-item-info">
                                    <h3>{{ $product->name }}</h3>
                                    <p>{{ $qty }} × Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                </div>
                                <div class="product-item-price">
                                    Rp {{ number_format($subtotal, 0, ',', '.') }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="summary-divider"></div>

                    <div class="checkout-total">
                        <span>Total Pembayaran</span>
                        <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                    </div>

                    <button type="submit" class="order-button">
                        Lanjut ke Pembayaran →
                    </button>

                    <a href="{{ route('cart.index') }}" class="back-link-sm"
                       style="display:block; text-align:center; margin-top:12px;">
                        ← Kembali ke Keranjang
                    </a>

                </div>
            </div>

        </div>

    </form>

</main>

@endsection

@push('styles')
<style>
    .checkout-steps {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 28px 0 22px;
        max-width: 420px;
        margin: 0 auto;
    }
    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: #bbb;
    }
    .step-circle {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 2px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: bold;
        color: #bbb;
        background: #fff;
    }
    .step.done .step-circle  { background: #d95f86; border-color: #d95f86; color: #fff; }
    .step.active .step-circle { background: #fff; border-color: #d95f86; color: #d95f86; }
    .step.active span { color: #d95f86; font-weight: 600; }
    .step-line { flex: 1; height: 2px; background: #eee; min-width: 50px; margin-bottom: 20px; }

    .checkout-layout {
        display: grid;
        grid-template-columns: 1fr 360px;
        gap: 24px;
        align-items: start;
    }
    .checkout-summary-sticky { position: sticky; top: 20px; }

    .form-hint { display: block; margin-top: 5px; font-size: 11px; color: #aaa; }
    .label-optional { font-size: 11px; color: #aaa; font-weight: normal; }
    .form-control-date { cursor: pointer; font-size: 14px; color: #444; }

    /* CARA PENERIMAAN */
    .delivery-options {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-bottom: 16px;
    }
    .delivery-option-card {
        border: 2px solid #e5d6b4;
        border-radius: 8px;
        padding: 14px;
        cursor: pointer;
        transition: 0.2s;
        background: #fffdf7;
    }
    .delivery-option-card:hover { border-color: #d95f86; background: #fff8f9; }
    .delivery-option-card.selected { border-color: #d95f86; background: #fff0f4; }
    .delivery-option-card input[type="radio"] { display: none; }
    .delivery-option-content {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .delivery-icon { font-size: 22px; }
    .delivery-option-content strong { display: block; font-size: 13px; color: #333; }
    .delivery-option-content small { font-size: 11px; color: #999; }

    /* INFO DIKIRIM */
    .kirim-info-box {
        padding: 12px 15px;
        background: #fff8e1;
        border: 1px solid #f0d080;
        border-radius: 7px;
        font-size: 13px;
        color: #7a5c00;
        margin-bottom: 16px;
        line-height: 1.6;
    }

    /* PAYMENT CARDS */
    .payment-options {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-bottom: 16px;
    }
    .payment-option-card {
        border: 2px solid #e5d6b4;
        border-radius: 8px;
        padding: 14px;
        cursor: pointer;
        transition: 0.2s;
        background: #fffdf7;
    }
    .payment-option-card:hover { border-color: #d95f86; background: #fff8f9; }
    .payment-option-card.selected { border-color: #d95f86; background: #fff0f4; }
    .payment-option-card input[type="radio"] { display: none; }
    .payment-option-content { display: flex; align-items: center; gap: 10px; }
    .payment-option-content svg { width: 22px; height: 22px; stroke: #d95f86; flex-shrink: 0; }
    .payment-option-content strong { display: block; font-size: 13px; color: #333; }
    .payment-option-content small { font-size: 11px; color: #999; }

    .summary-divider { height: 1px; background: #eadfc8; margin: 14px 0; }

    @media (max-width: 900px) {
        .checkout-layout { grid-template-columns: 1fr; }
        .checkout-summary-sticky { position: static; }
    }
    @media (max-width: 500px) {
        .delivery-options, .payment-options { grid-template-columns: 1fr; }
    }
</style>
@endpush

@push('scripts')
<script>
    function toggleJenisPenerimaan(input) {
        const tanggalWrapper = document.getElementById('tanggal-wrapper');
        const kirimInfo      = document.getElementById('kirim-info');
        const tanggalInput   = document.getElementById('tanggal_pengiriman');

        const isKirim = input.value === 'kirim';

        tanggalWrapper.style.display = isKirim ? 'none' : '';
        kirimInfo.style.display      = isKirim ? '' : 'none';

        // Kalau dikirim, hapus required supaya tidak block submit
        tanggalInput.required = !isKirim;

        // Update tampilan card
        document.querySelectorAll('.delivery-option-card').forEach(card => {
            card.classList.remove('selected');
        });
        input.closest('.delivery-option-card').classList.add('selected');
    }

    function toggleBankOptions() {
        const transfer = document.querySelector('input[value="Transfer Bank"]');
        const box      = document.getElementById('bank-options');
        box.classList.toggle('show', transfer.checked);
    }

    function selectPayment(input) {
        document.querySelectorAll('.payment-option-card').forEach(card => {
            card.classList.remove('selected');
        });
        input.closest('.payment-option-card').classList.add('selected');
    }
</script>
@endpush

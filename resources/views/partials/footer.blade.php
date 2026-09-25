{{-- =====================================================
     PARTIAL: FOOTER
     Digunakan oleh layouts/app.blade.php
===================================================== --}}

<footer class="footer">

    <div class="footer-container">

        {{-- BRAND --}}
        <div class="footer-brand">
            <img
                src="{{ asset('images/logo-florea.png') }}"
                alt="Floréa"
                class="footer-logo"
            >
            <h2>Floréa</h2>
            <p>
                Fresh flowers untuk menghadirkan keindahan
                dan kebahagiaan di setiap momen spesial Anda.
            </p>
        </div>

        {{-- NAVIGASI --}}
        <div class="footer-column">
            <h3>Navigasi</h3>
            <div class="footer-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('products.index') }}">Fresh Flower</a>
                <a href="{{ route('cart.index') }}">Keranjang</a>
                <a href="{{ route('orders.my') }}">Pesanan Saya</a>
            </div>
        </div>

        {{-- LAYANAN --}}
        <div class="footer-column">
            <h3>Layanan</h3>
            <div class="footer-links">
                <a href="{{ route('products.index') }}">Bunga Segar</a>
                <a href="{{ route('products.index') }}">Pengiriman Cepat</a>
                <a href="{{ route('products.index') }}">Pembayaran Aman</a>
                <a href="{{ route('products.index') }}">Layanan Pelanggan</a>
            </div>
        </div>

        {{-- TENTANG / KONTAK --}}
        <div class="footer-column">
            <h3>Tentang Floréa</h3>
            <div class="footer-service">

                {{-- ALAMAT --}}
                <div class="service-item">
                    <svg class="service-icon" viewBox="0 0 24 24">
                        <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0z"/>
                        <circle cx="12" cy="10" r="2.5"/>
                    </svg>
                    <span>Jl. Jenderal Soedirman No. 25, Purbalingga, Jawa Tengah.</span>
                </div>

                {{-- TELEPON --}}
                <div class="service-item">
                    <svg class="service-icon" viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span>0812-3456-7890</span>
                </div>

                {{-- EMAIL --}}
                <div class="service-item">
                    <svg class="service-icon" viewBox="0 0 24 24">
                        <rect x="3" y="5" width="18" height="14" rx="2"/>
                        <path d="M3 7l9 6 9-6"/>
                    </svg>
                    <span>hello@florea.id</span>
                </div>

                {{-- JAM OPERASIONAL --}}
                <div class="service-item">
                    <svg class="service-icon" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 7v5l3 2"/>
                    </svg>
                    <span>Senin–Sabtu, 08.00–17.00 WIB</span>
                </div>

            </div>
        </div>

    </div>

    {{-- FOOTER BOTTOM --}}
    <div class="footer-bottom">
        <p>
            &copy; {{ date('Y') }} <span>Floréa</span>. All Rights Reserved.
        </p>
    </div>

</footer>

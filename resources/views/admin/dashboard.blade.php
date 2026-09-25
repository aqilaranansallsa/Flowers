@extends('layouts.admin')

@section('title', 'Dashboard Admin - Fresh Flower')

@section('content')

<h1>Dashboard Admin</h1>

<hr>

<h2>Total Produk</h2>
<p>{{ $totalProduk }}</p>

<h2>Pesanan Baru</h2>
<p>{{ $pesananBaru }}</p>

<h2>Pesanan Diproses</h2>
<p>{{ $pesananDiproses }}</p>

<h2>Total Penjualan</h2>
<p>Rp {{ number_format($totalPenjualan, 0, ',', '.') }}</p>

@endsection

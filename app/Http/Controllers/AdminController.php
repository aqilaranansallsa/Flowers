<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

class AdminController extends Controller
{
    /**
     * Menampilkan dashboard admin.
     */
    public function dashboard()
    {
        $totalProduk = Product::count();

        $pesananBaru = Order::where('status', 'menunggu')->count();

        $pesananDiproses = Order::where('status', 'diproses')->count();

        $totalPenjualan = Order::where('status', 'selesai')->sum('total');

        return view('admin.dashboard', compact(
            'totalProduk',
            'pesananBaru',
            'pesananDiproses',
            'totalPenjualan'
        ));
    }
}
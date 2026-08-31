<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Menampilkan semua pesanan.
     * Digunakan untuk admin.
     */
    public function index()
    {
        $orders = Order::with([
            'user',
            'orderDetails.product'
        ])
            ->latest()
            ->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Menampilkan semua pesanan untuk admin.
     */
    public function adminIndex()
    {
        $orders = Order::with([
            'user',
            'orderDetails.product'
        ])
            ->latest()
            ->get();

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Menampilkan detail pesanan untuk admin.
     */
    public function adminShow(Order $order)
    {
        $order->load([
            'user',
            'orderDetails.product'
        ]);

        return view('admin.orders.show', compact('order'));
    }

    /**
     * Menampilkan pesanan milik user yang sedang login.
     */
    public function myOrders()
    {
        $orders = Order::with('orderDetails.product')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('orders.my-orders', compact('orders'));
    }

    /**
     * Menampilkan form membuat pesanan.
     * Digunakan untuk kebutuhan admin.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Menyimpan pesanan baru.
     * Digunakan untuk kebutuhan admin.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'invoice' => 'required|string|unique:orders,invoice',
            'nama_penerima' => 'required|string|max:255',
            'telp_penerima' => 'required|string|max:20',
            'alamat_pengiriman' => 'required|string',
            'tanggal_pengiriman' => 'required|date',
            'catatan' => 'nullable|string',
            'metode_pembayaran' => 'required|string|max:50',
            'status_pembayaran' => 'required|string|max:50',
            'total' => 'required|numeric|min:0',
            'status' => 'required|string|max:50',
        ]);

        Order::create($validated);

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'Pesanan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail pesanan untuk customer.
     */
    public function show(Order $order)
    {
        // Customer hanya boleh melihat pesanan miliknya sendiri.
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        $order->load([
            'orderDetails.product'
        ]);

        return view('orders.show', compact('order'));
    }

    /**
     * Menampilkan form ubah status pesanan untuk admin.
     */
    public function edit(Order $order)
    {
        $order->load([
            'user',
            'orderDetails.product'
        ]);

        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Memperbarui data pesanan.
     * Digunakan untuk admin.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'nama_penerima' => 'required|string|max:255',
            'telp_penerima' => 'required|string|max:20',
            'alamat_pengiriman' => 'required|string',
            'tanggal_pengiriman' => 'required|date',
            'catatan' => 'nullable|string',
            'metode_pembayaran' => 'required|string|max:50',
            'status_pembayaran' => 'required|string|max:50',
            'status' => 'required|in:menunggu,diproses,dikirim,selesai',
        ]);

        $order->update($validated);

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'Pesanan berhasil diperbarui.');
    }

    /**
     * Menghapus pesanan.
     * Digunakan untuk admin.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'Pesanan berhasil dihapus.');
    }
}
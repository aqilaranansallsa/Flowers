<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Menampilkan semua pesanan.
     */
    public function index()
    {
        $orders = Order::with(['user', 'orderDetails.product'])
            ->latest()
            ->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Menampilkan form membuat pesanan.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Menyimpan pesanan baru.
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
            ->route('orders.index')
            ->with('success', 'Pesanan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail pesanan.
     */
    public function show(Order $order)
    {
        $order->load(['user', 'orderDetails.product']);

        return view('orders.show', compact('order'));
    }

    /**
     * Menampilkan form edit pesanan.
     */
    public function edit(Order $order)
    {
        $order->load(['user', 'orderDetails.product']);

        return view('orders.edit', compact('order'));
    }

    /**
     * Memperbarui data pesanan.
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
            ->route('orders.index')
            ->with('success', 'Pesanan berhasil diperbarui.');
    }

    /**
     * Menghapus pesanan.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()
            ->route('orders.index')
            ->with('success', 'Pesanan berhasil dihapus.');
    }
}
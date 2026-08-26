<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Menampilkan semua detail pesanan.
     */
    public function index()
    {
        $orderDetails = OrderDetail::with(['order', 'product'])
            ->latest()
            ->get();

        return view('order_details.index', compact('orderDetails'));
    }

    /**
     * Menampilkan form tambah detail pesanan.
     */
    public function create()
    {
        $orders = Order::all();
        $products = Product::all();

        return view('order_details.create', compact('orders', 'products'));
    }

    /**
     * Menyimpan detail pesanan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'subtotal' => 'required|numeric|min:0',
        ]);

        OrderDetail::create($validated);

        return redirect()
            ->route('order_details.index')
            ->with('success', 'Detail pesanan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail order detail.
     */
    public function show(OrderDetail $orderDetail)
    {
        $orderDetail->load(['order', 'product']);

        return view('order_details.show', compact('orderDetail'));
    }

    /**
     * Menampilkan form edit detail pesanan.
     */
    public function edit(OrderDetail $orderDetail)
    {
        $orders = Order::all();
        $products = Product::all();

        return view(
            'order_details.edit',
            compact('orderDetail', 'orders', 'products')
        );
    }

    /**
     * Memperbarui detail pesanan.
     */
    public function update(Request $request, OrderDetail $orderDetail)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'subtotal' => 'required|numeric|min:0',
        ]);

        $orderDetail->update($validated);

        return redirect()
            ->route('order_details.index')
            ->with('success', 'Detail pesanan berhasil diperbarui.');
    }

    /**
     * Menghapus detail pesanan.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail->delete();

        return redirect()
            ->route('order_details.index')
            ->with('success', 'Detail pesanan berhasil dihapus.');
    }
}
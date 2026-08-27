<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /**
     * Menampilkan halaman checkout.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        if (empty($cart)) {
            return redirect()
                ->route('cart.index')
                ->with('error', 'Keranjang masih kosong.');
        }

        $products = Product::whereIn('id', array_keys($cart))
            ->get();

        $total = 0;

        foreach ($products as $product) {
            $qty = $cart[$product->id];
            $total += $product->price * $qty;
        }

        return view('checkout.index', compact(
            'products',
            'cart',
            'total'
        ));
    }

    /**
     * Menyimpan pesanan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_penerima' => 'required|string|max:255',
            'telp_penerima' => 'required|string|max:20',
            'alamat_pengiriman' => 'required|string',
            'tanggal_pengiriman' => 'required|date',
            'catatan' => 'nullable|string',
            'metode_pembayaran' => 'required|string|max:50',
        ]);

        $cart = $request->session()->get('cart', []);

        if (empty($cart)) {
            return redirect()
                ->route('cart.index')
                ->with('error', 'Keranjang masih kosong.');
        }

        $products = Product::whereIn('id', array_keys($cart))
            ->get();

        DB::transaction(function () use (
            $validated,
            $cart,
            $products,
            $request
        ) {
            $total = 0;

            foreach ($products as $product) {
                $qty = $cart[$product->id];

                $total += $product->price * $qty;
            }

            $invoice = 'FL-' . date('YmdHis');

            $order = Order::create([
                'invoice' => $invoice,
                'user_id' => Auth::id(),
                'nama_penerima' => $validated['nama_penerima'],
                'telp_penerima' => $validated['telp_penerima'],
                'alamat_pengiriman' => $validated['alamat_pengiriman'],
                'tanggal_pengiriman' => $validated['tanggal_pengiriman'],
                'catatan' => $validated['catatan'] ?? null,
                'metode_pembayaran' => $validated['metode_pembayaran'],
                'status_pembayaran' => 'menunggu',
                'total' => $total,
                'status' => 'menunggu',
            ]);

            foreach ($products as $product) {
                $qty = $cart[$product->id];

                $order->orderDetails()->create([
                    'product_id' => $product->id,
                    'qty' => $qty,
                    'price' => $product->price,
                    'subtotal' => $product->price * $qty,
                ]);
            }

            $request->session()->forget('cart');

            $request->session()->put('order_success', $order->id);
        });

        $orderId = $request->session()->pull('order_success');

        return redirect()
            ->route('orders.show', $orderId)
            ->with('success', 'Pesanan berhasil dibuat.');
    }
}
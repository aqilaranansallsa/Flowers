<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Menampilkan isi keranjang.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        $products = Product::whereIn('id', array_keys($cart))
            ->get();

        return view('cart.index', compact('products', 'cart'));
    }

    /**
     * Menambahkan produk ke keranjang.
     */
    public function add(Request $request, Product $product)
    {
        $cart = $request->session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]++;
        } else {
            $cart[$product->id] = 1;
        }

        $request->session()->put('cart', $cart);

        return redirect()
            ->route('cart.index')
            ->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    /**
     * Mengubah jumlah produk di keranjang.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'qty' => 'required|integer|min:1',
        ]);

        $cart = $request->session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id] = $validated['qty'];
        }

        $request->session()->put('cart', $cart);

        return redirect()
            ->route('cart.index')
            ->with('success', 'Jumlah produk berhasil diperbarui.');
    }

    /**
     * Menghapus produk dari keranjang.
     */
    public function remove(Request $request, Product $product)
    {
        $cart = $request->session()->get('cart', []);

        unset($cart[$product->id]);

        $request->session()->put('cart', $cart);

        return redirect()
            ->route('cart.index')
            ->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}
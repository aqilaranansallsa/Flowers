<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPhotoController extends Controller
{
    /**
     * Menampilkan semua foto produk.
     */
    public function index()
    {
        $photos = ProductPhoto::with('product')->latest()->get();

        return view('product_photos.index', compact('photos'));
    }

    /**
     * Menampilkan form tambah foto.
     */
    public function create()
    {
        $products = Product::all();

        return view('product_photos.create', compact('products'));
    }

    /**
     * Menyimpan foto produk.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $path = $request->file('photo')->store('products', 'public');

        ProductPhoto::create([
            'product_id' => $validated['product_id'],
            'photo' => $path,
        ]);

        return redirect()
            ->route('product_photos.index')
            ->with('success', 'Foto produk berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail foto.
     */
    public function show(ProductPhoto $productPhoto)
    {
        return view('product_photos.show', compact('productPhoto'));
    }

    /**
     * Menampilkan form edit foto.
     */
    public function edit(ProductPhoto $productPhoto)
    {
        $products = Product::all();

        return view('product_photos.edit', compact('productPhoto', 'products'));
    }

    /**
     * Memperbarui foto produk.
     */
    public function update(Request $request, ProductPhoto $productPhoto)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($productPhoto->photo) {
                Storage::disk('public')->delete($productPhoto->photo);
            }

            $validated['photo'] = $request->file('photo')
                ->store('products', 'public');
        }

        $productPhoto->update($validated);

        return redirect()
            ->route('product_photos.index')
            ->with('success', 'Foto produk berhasil diperbarui.');
    }

    /**
     * Menghapus foto produk.
     */
    public function destroy(ProductPhoto $productPhoto)
    {
        if ($productPhoto->photo) {
            Storage::disk('public')->delete($productPhoto->photo);
        }

        $productPhoto->delete();

        return redirect()
            ->route('product_photos.index')
            ->with('success', 'Foto produk berhasil dihapus.');
    }
}
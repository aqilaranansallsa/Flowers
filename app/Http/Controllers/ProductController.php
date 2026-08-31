<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Menampilkan semua produk untuk customer.
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    /**
     * Menampilkan daftar produk untuk admin.
     */
    public function adminIndex()
    {
        $products = Product::with('photos')
            ->latest()
            ->get();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Menampilkan form tambah produk.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Menyimpan produk baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:128',
            'type' => 'required|string|max:64',
            'composition' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'jumlah_tangkai' => 'nullable|integer|min:0',

            'photos' => 'nullable|array',
            'photos.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $product = Product::create([
            'name' => $validated['name'],
            'type' => $validated['type'],
            'composition' => $validated['composition'] ?? null,
            'description' => $validated['description'] ?? null,
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'jumlah_tangkai' => $validated['jumlah_tangkai'] ?? null,
        ]);

        // Menyimpan foto produk
        if ($request->hasFile('photos')) {

            foreach ($request->file('photos') as $photo) {

                $path = $photo->store('products', 'public');

                $product->photos()->create([
                    'photo' => $path,
                ]);
            }
        }

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail produk untuk customer.
     */
    public function show(Product $product)
    {
        $product->load('photos');

        return view('products.show', compact('product'));
    }

    /**
     * Menampilkan form edit produk.
     */
    public function edit(Product $product)
    {
        $product->load('photos');

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Memperbarui data produk.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:128',
            'type' => 'required|string|max:64',
            'composition' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'jumlah_tangkai' => 'nullable|integer|min:0',

            'photos' => 'nullable|array',
            'photos.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Update data produk
        $product->update([
            'name' => $validated['name'],
            'type' => $validated['type'],
            'composition' => $validated['composition'] ?? null,
            'description' => $validated['description'] ?? null,
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'jumlah_tangkai' => $validated['jumlah_tangkai'] ?? null,
        ]);

        /*
         * Jika admin memilih foto baru,
         * hapus foto lama terlebih dahulu.
         */
        if ($request->hasFile('photos')) {

            // Hapus foto lama
            foreach ($product->photos as $oldPhoto) {

                if (Storage::disk('public')->exists($oldPhoto->photo)) {
                    Storage::disk('public')->delete($oldPhoto->photo);
                }

                $oldPhoto->delete();
            }

            // Simpan foto baru
            foreach ($request->file('photos') as $photo) {

                $path = $photo->store('products', 'public');

                $product->photos()->create([
                    'photo' => $path,
                ]);
            }
        }

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Menghapus produk.
     */
    public function destroy(Product $product)
    {
        // Hapus file foto dari storage
        foreach ($product->photos as $photo) {

            if (Storage::disk('public')->exists($photo->photo)) {
                Storage::disk('public')->delete($photo->photo);
            }
        }

        // Hapus produk
        // Data product_photos ikut terhapus karena cascade
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
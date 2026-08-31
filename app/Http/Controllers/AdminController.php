<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

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

    /**
     * Menampilkan halaman ubah profil admin.
     */
    public function profile()
    {
        $admin = auth()->user();

        return view('admin.profile', compact('admin'));
    }

    /**
     * Memperbarui profil admin.
     */
    public function updateProfile(Request $request)
    {
        $admin = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $admin->name = $validated['name'];
        $admin->email = $validated['email'];

        if (!empty($validated['password'])) {
            $admin->password = Hash::make($validated['password']);
        }

        $admin->save();

        return redirect()
            ->route('admin.profile')
            ->with('success', 'Profil admin berhasil diperbarui.');
    }
}
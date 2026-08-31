<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// =====================================================
// PRODUK CUSTOMER
// =====================================================

Route::get('/fresh-flower', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/fresh-flower/{product}', [ProductController::class, 'show'])
    ->name('products.show');

// =====================================================
// KERANJANG
// =====================================================

Route::get('/keranjang', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/keranjang/{product}', [CartController::class, 'add'])
    ->name('cart.add');

Route::patch('/keranjang/{product}', [CartController::class, 'update'])
    ->name('cart.update');

Route::delete('/keranjang/{product}', [CartController::class, 'remove'])
    ->name('cart.remove');

// =====================================================
// AUTHENTICATION
// =====================================================

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// =====================================================
// CHECKOUT & PESANAN CUSTOMER
// =====================================================

Route::middleware('auth')->group(function () {

    // Checkout / Melakukan Pemesanan
    Route::get('/checkout', [CheckoutController::class, 'index'])
        ->name('checkout.index');

    Route::post('/checkout', [CheckoutController::class, 'store'])
        ->name('checkout.store');

    // Pesanan Saya
    Route::get('/pesanan-saya', [OrderController::class, 'myOrders'])
        ->name('orders.my');

    Route::get('/pesanan-saya/{order}', [OrderController::class, 'show'])
        ->name('orders.show');
});

// =====================================================
// ADMIN
// =====================================================

Route::middleware(['auth', 'admin'])->group(function () {

    // -------------------------------------------------
    // Dashboard Admin
    // -------------------------------------------------

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    // -------------------------------------------------
    // Profil Admin
    // -------------------------------------------------

    Route::get('/admin/profile', [AdminController::class, 'profile'])
        ->name('admin.profile');

    Route::put('/admin/profile', [AdminController::class, 'updateProfile'])
        ->name('admin.profile.update');

    // -------------------------------------------------
    // Kelola Produk
    // -------------------------------------------------

    // Daftar produk
    Route::get('/admin/produk', [ProductController::class, 'adminIndex'])
        ->name('admin.products.index');

    // Form tambah produk
    Route::get('/admin/produk/tambah', [ProductController::class, 'create'])
        ->name('admin.products.create');

    // Simpan produk
    Route::post('/admin/produk', [ProductController::class, 'store'])
        ->name('admin.products.store');

    // Form edit produk
    Route::get('/admin/produk/{product}/edit', [ProductController::class, 'edit'])
        ->name('admin.products.edit');

    // Update produk
    Route::put('/admin/produk/{product}', [ProductController::class, 'update'])
        ->name('admin.products.update');

    // Hapus produk
    Route::delete('/admin/produk/{product}', [ProductController::class, 'destroy'])
        ->name('admin.products.destroy');

    // -------------------------------------------------
    // KELOLA PESANAN
    // -------------------------------------------------

    // Daftar semua pesanan
    Route::get('/admin/pesanan', [OrderController::class, 'adminIndex'])
        ->name('admin.orders.index');

    // Detail pesanan
    Route::get('/admin/pesanan/{order}', [OrderController::class, 'adminShow'])
        ->name('admin.orders.show');

    // Form ubah status pesanan
    Route::get('/admin/pesanan/{order}/edit', [OrderController::class, 'edit'])
        ->name('admin.orders.edit');

    // Proses menyimpan perubahan status
    Route::put('/admin/pesanan/{order}', [OrderController::class, 'update'])
        ->name('admin.orders.update');
});
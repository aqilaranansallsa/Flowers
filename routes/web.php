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

// Produk
Route::get('/fresh-flower', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/fresh-flower/{product}', [ProductController::class, 'show'])
    ->name('products.show');

// Keranjang
Route::get('/keranjang', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/keranjang/{product}', [CartController::class, 'add'])
    ->name('cart.add');

Route::patch('/keranjang/{product}', [CartController::class, 'update'])
    ->name('cart.update');

Route::delete('/keranjang/{product}', [CartController::class, 'remove'])
    ->name('cart.remove');

// Authentication
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

// Checkout & Pesanan Saya
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

// Admin Dashboard
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');
});
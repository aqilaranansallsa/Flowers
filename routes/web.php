<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

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

// Checkout / Melakukan Pemesanan
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])
        ->name('checkout.index');

    Route::post('/checkout', [CheckoutController::class, 'store'])
        ->name('checkout.store');
});
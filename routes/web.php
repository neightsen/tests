<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Models\Product;
use App\Models\Order;

Route::get('/products', [ProductController::class, 'index']);

Route::get('/product/{id}', [OrderController::class, 'show'])->name('product.show');

Route::post('/order/{product}', [OrderController::class, 'store'])->name('order.store');

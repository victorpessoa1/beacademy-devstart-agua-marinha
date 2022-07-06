<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/product', [ProductController::class, 'index'])->name('product.index');

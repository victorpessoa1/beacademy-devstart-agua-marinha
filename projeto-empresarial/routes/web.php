<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    UserController,
    ProductController,
    OrderController,
    CheckouController
};
use App\Models\Product;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('/layout', function () {
    return view('template/layout_new');
});

Route::middleware(['auth','admin'])->group(function (){
    Route::get('/admin',[UserController::class, 'admin'])->name('admin');
});


Route::middleware(['auth'])->group(function () {

    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    /*--Produtos--*/
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/product', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

    /*--Pedidos--*/
    Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
    Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::get('/orders/{id}/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/order', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/users/{id}/orders', [OrderController::class, 'show'])->name('orders.show');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'index'])->name('checkout.index.post');
    Route::get('/checkout/{id}',[CheckoutController::class,'show'])->name('checkout.show');
});

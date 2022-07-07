<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    UserController,
    ProductController,
    ViaCepController
};
use App\Models\Product;

Route::get('/',function (){
    return view('welcome');
});

Route::delete('/users/{id}',[UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}',[UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}',[UserController::class, 'show'])->name('users.show');


/*--Produtos--*/
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/request',function (\Illuminate\Http\Request $request){
    dd($request);
    return 'x';
});




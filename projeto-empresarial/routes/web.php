<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    UserController,
    ProductController,
    ViaCepController
};

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

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/request',function (\Illuminate\Http\Request $request){
    dd($request);
    return 'x';
});




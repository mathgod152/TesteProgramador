<?php

use App\Http\Controllers\{
    UserController,
    ProductController
};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PedidoController;

Route::get('/users/{id}/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::get('/users/{user}/pedidos/{id}', [PedidoController::class, 'edit'])->name('pedidos.edit');
Route::put('pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
Route::delete('/users/{id}/pedidos', [PedidoController::class, 'delete'])->name('pedidos.delete');
Route::get('/users/{id}/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/users/{id}/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');

Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');







Route::get('/', function () {
    return view('welcome');
});

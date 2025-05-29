<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin|secre'])->group(function () {
    Route::resource('usuarios', UserController::class)->only(['index', 'create', 'store']);
});

Route::middleware(['auth', 'role:bodega'])->group(function () {
    Route::resource('categorias', CategoriaController::class)->only(['index', 'create', 'store']);
});

Route::middleware(['auth', 'role:bodega'])->group(function () {
    Route::resource('productos', ProductoController::class)->only(['index', 'create', 'store']);
});

Route::middleware(['auth', 'role:cajera'])->group(function () {
    Route::resource('ventas', VentaController::class)->only(['index', 'create', 'store']);
});


require __DIR__.'/auth.php';

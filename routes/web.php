<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdukController::class, 'index'])->name('index.index');
route::get('/produk/create', [ProdukController::class, 'create'])->name('index.create');
route::post('/produk/store', [ProdukController::class, 'store'])->name('index.store');
route::get('/produk/edit{id}', [ProdukController::class, 'edit'])->name('index.edit');
route::put('/produk/update{id}', [ProdukController::class, 'update'])->name('index.update');
route::delete('/produk/delete{id}', [ProdukController::class, 'destroy'])->name('index.destroy');
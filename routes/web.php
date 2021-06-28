<?php

/**
 * Warehouse Sederhana menggunakan Framework Laravel
 * @author Jhon Girsang <jhongrsng.inq@gmail.com>
 * @copyright 2021 Jhon Girsang
 * @version 1.0.0
 * @license MIT
 */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\WorkerController;
use App\Models\Worker;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/petugas', [WorkerController::class, 'index'])->name('worker.all');
Route::get('/petugas/create', [WorkerController::class, 'create'])->name('worker.create');
Route::post('/petugas/create', [WorkerController::class, 'store']);
Route::get('/petugas/{id}/edit', [WorkerController::class, 'edit'])->name('worker.edit');
Route::patch('petugas/{id}/edit', [WorkerController::class, 'update'])->name('worker.update');
Route::get('/petugas/{id}/delete', [WorkerController::class, 'destroy'])->name('worker.destroy');

Route::get('/barang', [ItemController::class, 'index'])->name('item.all');
Route::get('/barang/create', [ItemController::class, 'create'])->name('item.create');
Route::post('/barang/create', [ItemController::class, 'store']);









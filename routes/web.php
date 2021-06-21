<?php

/**
 * Warehouse Sederhana menggunakan Framework Laravel
 * @author Jhon Girsang <jhongrsng.inq@gmail.com>
 * @copyright 2021 Jhon Girsang
 * @version 1.0.0
 * @license MIT
 */
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/petugas/create', [HomeController::class, 'create'])->name('worker.create');
Route::post('/petugas/create', [HomeController::class, 'store']);
Route::get('/petugas/{id}/edit', [HomeController::class, 'edit'])->name('worker.edit');
Route::patch('petugas/{id}/edit', [HomeController::class, 'update'])->name('worker.update');
Route::get('/petugas/{id}/delete', [HomeController::class, 'destroy'])->name('worker.destroy');



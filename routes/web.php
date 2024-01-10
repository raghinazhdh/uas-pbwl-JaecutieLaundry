<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/layanan', [App\Http\Controllers\LayananController::class, 'index']);
Route::get('/layanan/create', [App\Http\Controllers\LayananController::class, 'create']);
Route::post('/layanan', [App\Http\Controllers\LayananController::class, 'store']);
Route::get('/layanan/edit/{id}', [App\Http\Controllers\LayananController::class, 'edit']);
Route::patch('/layanan/{id}', [App\Http\Controllers\LayananController::class, 'update']);
Route::delete('/layanan/{id}', [App\Http\Controllers\LayananController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);
Route::get('/downloadpdf/{id}', [App\Http\Controllers\TransaksiController::class, 'downloadpdf']);


Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/user', [App\Http\Controllers\UserController::class, 'store']);
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::patch('/user/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'destroy']);

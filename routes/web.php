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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route CRUD
Route::get('/pegawai', [App\Http\Controllers\pegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawai/tambah', [App\Http\Controllers\pegawaiController::class, 'tambah'])->name('tambah');
Route::post('/pegawai/store', [App\Http\Controllers\pegawaiController::class, 'store'])->name('store');

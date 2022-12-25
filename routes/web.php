<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('warga.home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


// operasi data tanah
Route::post('/dataTanah', [TanahController::class, 'store'])->name('dataTanah.store');
Route::post('/dataTanah/{id}', [TanahController::class, 'update'])->name('dataTanah.update');
Route::delete('/dataTanah/{id}', [TanahController::class, 'destroy'])->name('dataTanah.destroy');
Route::get('/dataTanah', [TanahController::class, 'pemilik'])->name('dataTanah.pemilik');
// Route::resource('dataTanah', TanahController::class);

// router for data akun
Route::get('/dataAkun', [AkunController::class, 'index'])->name('dataAkun.index');

// route for arsip
Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip.index');
Route::get('/create', [ArsipController::class, 'create'])->name('arsip.create');
// Route::resource('arsip', ArsipController::class);

// rooute for dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

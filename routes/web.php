<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\srt_berpenghasilanController;
use App\Models\srt_berpenghasilan;
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
})->name('home');

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
Route::get('/arsipdata', [ArsipController::class, 'index'])->name('arsip.index');
Route::get('/arsipdata/create', [ArsipController::class, 'create'])->name('arsip.create');
Route::post('/arsipdata', [ArsipController::class, 'store'])->name('arsipStore');
Route::get('/delete_arsip/{id}', [ArsipController::class, 'delete_arsip'])->name('delete_arsip');
Route::get('/edit_arsip/{id}', [ArsipController::class, 'edit'])->name('edit_arsip');
Route::post('/update_arsip/{id}', [ArsipController::class, 'update'])->name('update_arsip');
// Route::resource('arsip', ArsipController::class);

// rooute for dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// route surat
Route::get('/surat', function () {
    return view('surat.index');
})->name('surat.index');


// route surat berpenghasilan
// Route::post('/surat/berpenghasilan', [srt_berpenghasilanController::class, 'store'])->name('surat.berpenghasilan.store');

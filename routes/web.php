<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\srt_berpenghasilanController;
use App\Http\Controllers\srt_ketPindahWilayahController;
use App\Models\srt_ketPindahWilayah;
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


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login_proses', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/berpenghasilan', [srt_berpenghasilanController::class,  'store'])->name('berpenghasilan.store');
Route::post('/pindahwilayah', [srt_ketPindahWilayahController::class, 'store'])->name('pindah_wilayah.store');


// profile
Route::get('/profile', function() {
    return view('Akun.profileAkun');
})->name('profile');

//search
Route::get('/search', [srt_berpenghasilanController::class, 'search'])->name('search');

// auth
// auth -> staff || lurah
Route::group(['middleware' =>['auth']], function() {
    Route::group(['middleware' => ['cekLogin:staff']], function(){
        // rooute for dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // operasi data tanah
        Route::post('/dataTanah', [TanahController::class, 'store'])->name('dataTanah.store');
        Route::post('/dataTanah/{id}', [TanahController::class, 'update'])->name('dataTanah.update');
        Route::delete('/dataTanah/{id}', [TanahController::class, 'destroy'])->name('dataTanah.destroy');
        Route::get('/dataTanah', [TanahController::class, 'pemilik'])->name('dataTanah.pemilik');

        // route for arsip
        Route::get('/arsipdata', [ArsipController::class, 'index'])->name('arsip.index');
        Route::get('/arsipdata/create', [ArsipController::class, 'create'])->name('arsip.create');
        Route::post('/arsipdata', [ArsipController::class, 'store'])->name('arsipStore');
        Route::get('/delete_arsip/{id}', [ArsipController::class, 'delete_arsip'])->name('delete_arsip');
        Route::get('/edit_arsip/{id}', [ArsipController::class, 'edit'])->name('edit_arsip');
        Route::post('/update_arsip/{id}', [ArsipController::class, 'update'])->name('update_arsip');

        // route surat berpenghasilan
        Route::get('/surat', [srt_berpenghasilanController::class, 'index'])->name('surat.index');
        Route::get('/surat/detailPenghasilan/{id}', [srt_berpenghasilanController::class, 'show'])->name('detail.surat');
        Route::get('/surat/edit/{id}', [srt_berpenghasilanController::class, 'edit'])->name('edit.surat');
        Route::post('/surat/editStts/{id}', [srt_berpenghasilanController::class, 'editStts'])->name('editStts');
        Route::resource('surat', srt_berpenghasilanController::class);

        // route surat di dalam admin
        Route::get('/dashboardSurat', function() {
            return view('surat.homeSurat');
        })->name('dashboardSurat');

        // route surat pindah wilayah
        Route::get('/suratpw', [srt_ketPindahWilayahController::class, 'index'])->name('suratPw.index');
        Route::get('/suratpw/detailPindhWlyh/{id}', [srt_ketPindahWilayahController::class, 'show'])->name('detail.suratPw');
        Route::get('/suratpw/edit/{id}', [srt_ketPindahWilayahController::class, 'edit'])->name('edit.suratPw');
        Route::post('/suratpw/editStts/{id}', [srt_ketPindahWilayahController::class, 'editStts'])->name('editSttsPw');
        Route::delete('/suratpw/destroy/{id}', [srt_ketPindahWilayahController::class, 'destroy'])->name('delete.suratPw');
        // Route::resource('suratpw', srt_ketPindahWilayahController::class);



    });
    Route::group(['middleware' => ['cekLogin:lurah']], function(){
        // rooute for dashboard lurah
        Route::get('/dashboardLurah', [DashboardController::class, 'indexLurah'])->name('dashboardLurah.index');

        // data tanah lurah
        Route::get('/dataTanahLurah', [TanahController::class, 'pemilikLurah'])->name('dataTanahLurah.pemilik');

        // data arsip lurah
        Route::get('/arsipdataLurah', [ArsipController::class, 'arsipLurah'])->name('arsip.indexLurah');

    });
});



<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\DoaController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jadwal-ibadah', [JadwalIbadahController::class, 'index'])->name('jadwalIbadah');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentangKami');
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/departemen', [DepartemenController::class, 'index'])->name('departemen');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');


// tes bikin email kirim doa
Route::post('/kirimdoa', [DoaController::class, 'index'])->name('kirimdoa');

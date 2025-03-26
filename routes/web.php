<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/jadwal-ibadah', function () {
    return view('jadwal_ibadah');
})->name('jadwalIbadah');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('tentangKami');

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/departemen', function () {
    return view('departemen');
})->name('departemen');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');



Route::post('/kirimdoa', [DoaController::class, 'index'])->name('kirimdoa');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LatihanA1Controller;
use App\Http\Controllers\MyKaryawanController;

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

// system.out.println();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Coba::class, 'helloworld']);
//Route::get('hello',App\Http\Controllers\Coba::helloworld);

//Link Tugas Week 11 (kumpulan tugas pertemuan 1-ETS)
Route::get('frontend', function () {
	return view('frontend');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('bootstrap2', function () {
	return view('bootstrap2');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('kode6', function () {
	return view('kode6');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('shop', function () {
	return view('shop');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('dosen', [Coba::class, 'index']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// crud pegawai
Route::get('/pegawai', [PegawaiDBController::class,'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class,'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class,'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class,'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class,'cari']);

// crud processor
Route::get('/processor', [ProcessorController::class,'index2']);
Route::get('/processor/tambah', [ProcessorController::class,'tambah2']);
Route::post('/processor/store', [ProcessorController::class,'store']);
Route::get('/processor/edit/{id}', [ProcessorController::class,'edit2']);
Route::post('/processor/update', [ProcessorController::class,'update']);
Route::get('/processor/hapus/{id}',[ProcessorController::class,'hapus']);
Route::get('/processor/cari',[ProcessorController::class,'cari']);

// crud keranjang belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class,'index3']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class,'tambah3']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class,'store']);
Route::post('/keranjangbelanja/update', [KeranjangBelanjaController::class,'update']);
Route::get('/keranjangbelanja/hapus/{id}',[KeranjangBelanjaController::class,'hapus']);

// crud karyawan
Route::get('/karyawan', [KaryawanController::class,'index4']);
Route::get('/karyawan/tambah', [KaryawanController::class,'tambah4']);
Route::post('/karyawan/store', [KaryawanController::class,'store']);
Route::post('/karyawan/update', [KaryawanController::class,'update']);
Route::get('/karyawan/hapus/{id}',[KaryawanController::class,'hapus']);
Route::get('/karyawan/cari',[KaryawanController::class,'cari']);

// crud latihanA1
Route::get('/latihanA1', [LatihanA1Controller::class,'index5']);

// crud EAS
Route::get('/mykaryawan', [MyKaryawanController::class,'index6']);
Route::post('/mykaryawan/store', [MyKaryawanController::class,'store']);
Route::post('/mykaryawan/update', [MyKaryawanController::class,'update']);
Route::get('/mykaryawan/hapus/{id}',[MyKaryawanController::class,'hapus']);
Route::get('/mykaryawan/edit/{id}', [MyKaryawanController::class,'edit6']);
Route::get('/mykaryawan/cari',[MyKaryawanController::class,'cari']);
Route::get('/mykaryawan/view/{id}', [MyKaryawanController::class,'view']);

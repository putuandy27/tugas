<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\matkulController;

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
    return view('welcome');
});


// -----Tugas-----

// Route get untuk semua data dosen
// Route::get('/dosen', [TugasController::class, 'getDosen']);
// Route get untuk semua data mahasiswa
Route::get('/mahasiswa', [TugasController::class, 'getMhs']);
// Route get untuk semua data mata kuliah
Route::get('/matkul', [TugasController::class, 'getMatkul']);
// Route get untuk semua data dosen berdasarkan id
// Route::get('/dosen/{id}', [TugasController::class, 'getDosenId']);
// Route get untuk semua data nama mata kuliah saja
Route::get('/namamatkul', [TugasController::class, 'getNamaMatkul']);
// Route get untuk 5 data mahasiswa
Route::get('/limamhs', [TugasController::class, 'getFiveMhs']);

Route::get('/input', [TugasController::class, 'store']);
Route::get('/update', [TugasController::class, 'update']);
Route::get('/edit', [TugasController::class, 'edit']);
Route::get('/hapus', [TugasController::class, 'destroy']);
Route::get('/delete', [TugasController::class, 'delete']);
Route::get('/inputdata', [TugasController::class, 'create']);
Route::get('/inputorm', [TugasController::class, 'show']);
Route::get('/liat', [TugasController::class, 'createMatkulWith']);
Route::get('/lihat', [TugasController::class, 'createWithMatkul']);

Route::get('/matakuliah', [TugasController::class, 'getMataKuliah']);
Route::get('/attach', [TugasController::class, 'attachMatkul']);
Route::get('/attachmhs', [TugasController::class, 'attachMhs']);
Route::get('/detach', [TugasController::class, 'detachMatkul']);
Route::get('/detachmhs', [TugasController::class, 'detachMhs']);
Route::get('/sync', [TugasController::class, 'sync']);

Route::resource('/data', DataController::class);
Route::resource('/dosen', DosenController::class);


// ---TUGAS BARU---

// Route untuk create data dosen (membuat data dosen baru)
Route::get('/createdosenbaru', [TugasController::class, 'createdosenbaru']);

// Route untuk update data mahasiswa (memperbaharui data mahasiswa yang sudah ada)
Route::get('/updatemahasiswabaru/{id}', [TugasController::class, 'updatemahasiswa']);

// Route untuk mendapatkan semua mahasiswa dari dosen dengan id tertentu
Route::get('/carisemuamhs/{id}', [TugasController::class, 'getAllMhsFromDosenItu']);



// ---TUGAS COURSE 4---

// Route resource mata kuliah
Route::resource('/matkul', MatkulController::class);
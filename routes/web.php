<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

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
Route::get('/dosen', [TugasController::class, 'getDosen']);
// Route get untuk semua data mahasiswa
Route::get('/mahasiswa', [TugasController::class, 'getMhs']);
// Route get untuk semua data mata kuliah
Route::get('/matkul', [TugasController::class, 'getMatkul']);
// Route get untuk semua data dosen berdasarkan id
Route::get('/dosen/{id}', [TugasController::class, 'getDosenId']);
// Route get untuk semua data nama mata kuliah saja
Route::get('/namamatkul', [TugasController::class, 'getNamaMatkul']);
// Route get untuk 5 data mahasiswa
Route::get('/limamhs', [TugasController::class, 'getFiveMhs']);


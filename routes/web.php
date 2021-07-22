<?php

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
    return redirect('/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/coba', function () {
//     return view('pagekaryawan/baru');
// });

// route untuk data karyawan
Route::middleware(['auth:sanctum', 'verified'])->get('/datakaryawan', 'DataKaryawanController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/datakaryawan/cetak_pdf', 'DataKaryawanController@cetak_pdf');
Route::middleware(['auth:sanctum', 'verified'])->get('/datakaryawan/tambah', 'DataKaryawanController@create');
Route::middleware(['auth:sanctum', 'verified'])->post('/datakaryawan', 'DataKaryawanController@store');
Route::middleware(['auth:sanctum', 'verified'])->delete('/datakaryawan/{datakaryawan}', 'DataKaryawanController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/datakaryawan/{datakaryawan}/edit', 'DataKaryawanController@edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/datakaryawan/{datakaryawan}', 'DataKaryawanController@update');

// route untuk data talent
Route::middleware(['auth:sanctum', 'verified'])->get('/datatalent', 'DataTalentController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/datatalent/cetak_pdf', 'DataTalentController@cetak_pdf');
Route::middleware(['auth:sanctum', 'verified'])->get('/datatalent/tambah', 'DataTalentController@create');
Route::middleware(['auth:sanctum', 'verified'])->post('/datatalent', 'DataTalentController@store');
Route::middleware(['auth:sanctum', 'verified'])->delete('/datatalent/{datatalent}', 'DataTalentController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/datatalent/{datatalent}/edit', 'DataTalentController@edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/datatalent/{datatalent}', 'DataTalentController@update');

// route untuk jadwal
Route::middleware(['auth:sanctum', 'verified'])->get('/jadwal', 'JadwalController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/jadwal/cetak_pdf', 'JadwalController@cetak_pdf');
Route::middleware(['auth:sanctum', 'verified'])->get('/jadwal/tambah', 'JadwalController@create');
Route::middleware(['auth:sanctum', 'verified'])->post('/jadwal', 'JadwalController@store');
Route::middleware(['auth:sanctum', 'verified'])->get('/jadwal/{jadwal}/edit', 'JadwalController@edit');
Route::middleware(['auth:sanctum', 'verified'])->delete('/jadwal/{jadwal}', 'JadwalController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->patch('/jadwal/{jadwal}', 'JadwalController@update');

// route untuk data lembaga 
Route::middleware(['auth:sanctum', 'verified'])->get('/datalembaga', 'DataLembagaController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/datalembaga/cetak_pdf', 'DataLembagaController@cetak_pdf');
Route::middleware(['auth:sanctum', 'verified'])->get('/datalembaga/tambah', 'DataLembagaController@create');
Route::middleware(['auth:sanctum', 'verified'])->post('/datalembaga', 'DataLembagaController@store');
Route::middleware(['auth:sanctum', 'verified'])->delete('/datalembaga/{datalembaga}', 'DataLembagaController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/datalembaga/{datalembaga}/edit', 'DataLembagaController@edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/datalembaga/{datalembaga}', 'DataLembagaController@update');

// route untuk tayangan
Route::middleware(['auth:sanctum', 'verified'])->get('/datatayangan', 'DataTayanganController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/datatayangan/cetak_pdf', 'DataTayanganController@cetak_pdf');
Route::middleware(['auth:sanctum', 'verified'])->get('/datatayangan/tambah', 'DataTayanganController@create');
Route::middleware(['auth:sanctum', 'verified'])->post('/datatayangan', 'DataTayanganController@store');
Route::middleware(['auth:sanctum', 'verified'])->delete('/datatayangan/{datatayangan}', 'DataTayanganController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/datatayangan/{datatayangan}/edit', 'DataTayanganController@edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/datatayangan/{datatayangan}', 'DataTayanganController@update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

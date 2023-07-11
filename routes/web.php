<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for z application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'home']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::post('/mahasiswa/simpan-data', [MahasiswaController::class, 'store']);
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
    Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);
    Route::get('/mahasiswa/view/{id}', [MahasiswaController::class, 'view']);

    Route::get('/dosen', [DosenController::class, 'index']);
    Route::get('/dosen/create', [DosenController::class, 'create']);
    Route::post('/dosen/simpan-data', [DosenController::class, 'store']);
    Route::get('/dosen/edit/{id}', [DosenController::class, 'edit']);
    Route::post('/dosen/update/{id}', [DosenController::class, 'update']);
    Route::get('/dosen/delete/{id}', [DosenController::class, 'delete']);
    Route::get('/dosen/view/{id}', [DosenController::class, 'view']);

    Route::get('/matakuliah', [MataKuliahController::class, 'index']);
    Route::get('/matakuliah/create', [MataKuliahController::class, 'create']);
    Route::post('/matakuliah/simpan-data', [MataKuliahController::class, 'store']);
    Route::get('/matakuliah/edit/{id}', [MataKuliahController::class, 'edit']);
    Route::post('/matakuliah/update/{id}', [MataKuliahController::class, 'update']);
    Route::get('/matakuliah/delete/{id}', [MataKuliahController::class, 'delete']);
    Route::get('/matakuliah/view/{id}', [MataKuliahController::class, 'view']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/simpan-data', [UserController::class, 'store']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
    Route::get('/user/view/{id}', [UserController::class, 'view']);

    Route::get('/jurusan', [JurusanController::class, 'index']);
    Route::get('/jurusan/create', [JurusanController::class, 'create']);
    Route::post('/jurusan/simpan-data', [JurusanController::class, 'store']);
    Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit']);
    Route::post('/jurusan/update/{id}', [JurusanController::class, 'update']);
    Route::get('/jurusan/delete/{id}', [JurusanController::class, 'delete']);
    Route::get('/jurusan/view/{id}', [JurusanController::class, 'view']);

    Route::get('/kelas', [KelasController::class, 'index']);
    Route::get('/kelas/create', [KelasController::class, 'create']);
    Route::post('/kelas/simpan-data', [KelasController::class, 'store']);
    Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
    Route::post('/kelas/update/{id}', [KelasController::class, 'update']);
    Route::get('/kelas/delete/{id}', [KelasController::class, 'delete']);
    Route::get('/kelas/view/{id}', [KelasController::class, 'view']);

    Route::get('/logout', [Auth\LoginController::class, 'logout']);
});

Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [Auth\LoginController::class, 'login']);

Route::get('/register', [Auth\RegisterController::class, 'index']);
Route::post('/register/proses', [Auth\RegisterController::class, 'register']);

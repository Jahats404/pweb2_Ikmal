<?php

use App\Http\Controllers\ArsipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


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
    return view('aisya.login');
});
Route::get('/form', function () {
    return view('aisya.form');
});
Route::get('/edi', function () {
    return view('aisya.edit');
});





Route::get('/dashboard/karyawan', [HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [ArsipController::class, 'tampil'])->name('dashboard');
Route::get('/login', [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
// Route::get('/logout', [LoginController::class, 'halamanLogin'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/form', [LoginController::class, 'halamanLogin'])->name('login');
Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip');
//tambah data
Route::get('/crud', [ArsipController::class, 'insert'])->name('crud');
Route::post('/postinsert', [ArsipController::class, 'postinsert'])->name('postinsert');
Route::get('/arsip/{id}/edit', [ArsipController::class, 'edit'])->name('edit');
Route::put('/arsip/{id}', [ArsipController::class, 'update'])->name('update');



Route::delete('/arsip/{id}', [ArsipController::class, 'delete']);







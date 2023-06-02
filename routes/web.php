<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelolaPd;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kelolaPD', [App\Http\Controllers\KelolaPDController::class, 'index'])->name('kelolaPD');

Route::get('/kelolakelas', [App\Http\Controllers\KelolakelasController::class, 'index'])->name('kelolakelas');

Route::get('/kelolaPembayaran', [App\Http\Controllers\KelolaPembayaranController::class, 'index'])->name('kelolaPembayaran');

Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');






Route::get('/search', 'SearchController@search')->name('search');


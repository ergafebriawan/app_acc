<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DebitController;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\LaporanController;

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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [UserController::class, 'index'])->name('profile');

//Kredit
Route::get('/kredit', [KreditController::class, 'index']);
Route::post('/kredit_add', [KreditController::class, 'add']);
Route::get('/kredit_delete/{id}', [KreditController::class, 'delete']);
Route::get('/kredit_edit/{id}', [KreditController::class, 'edit']);

//Debit
Route::get('/debit', [DebitController::class, 'index']);
Route::post('/debit_add', [DebitController::class, 'add']);
Route::get('/debit_delete/{id}', [KreditController::class, 'delete']);
Route::get('/debit_edit/{id}', [KreditController::class, 'edit']);

//Mutasi
Route::get('/mutasi', [MutasiController::class, 'index']);

//laporan
Route::get('/laporan', [LaporanController::class, 'index']);

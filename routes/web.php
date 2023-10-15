<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KonselingController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

// Route::prefix('admin')->group(function () {
//     Route::get('/login', 'UserController@loginForm')->name('admin.login');
//     Route::post('/login', 'UserController@login')->name('admin.login.submit');
    
// });
Route::get('/admin/login', [UserController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [UserController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/konseling', [KonselingController::class, 'index'])->name('konseling.index');
Route::get('/konseling/create', [KonselingController::class, 'create'])->name('konseling.create');
Route::post('/konseling', [KonselingController::class, 'store'])->name('konseling.store');
Route::get('admin/konseling/{konseling}/edit', [KonselingController::class, 'edit'])->name('konseling.edit');
Route::put('/konseling/{konseling}/update', [KonselingController::class, 'update'])->name('konseling.update');
Route::delete('/konseling/{konseling}/destroy', [KonselingController::class, 'destroy'])->name('konseling.destroy');

Route::get('/admin/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/admin/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('/admin/artikel/store/', [ArtikelController::class, 'store'])->name('artikel.store');
Route::get('/artikel/show/{artikel}', [ArtikelController::class, 'show'])->name('artikel.show');
Route::get('/admin/artikel/edit/{artikel}', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::put('/admin/artikel/edit/{artikel}',[ArtikelController::class, 'update'])->name('artikel.update');
Route::delete('/admin/artikel/{artikel}',[ArtikelController::class, 'destroy'])->name('artikel.destroy');

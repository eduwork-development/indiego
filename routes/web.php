<?php

use App\Http\Controllers\KonselingController;
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
Route::get('/admin/konseling', [KonselingController::class, 'index'])->name('konseling.index');
Route::get('/konseling/create', [KonselingController::class, 'create'])->name('konseling.create');
Route::post('/konseling', [KonselingController::class, 'store'])->name('konseling.store');
Route::get('admin/konseling/{konseling}/edit', [KonselingController::class, 'edit'])->name('konseling.edit');
Route::put('/konseling/{konseling}/update', [KonselingController::class, 'update'])->name('konseling.update');
Route::delete('/konseling/{konseling}/destroy', [KonselingController::class, 'destroy'])->name('konseling.destroy');

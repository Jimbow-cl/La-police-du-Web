<?php

use App\Http\Controllers\ResaController;
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
Route::get('/', [ResaController::class,'index'])->name('index');
Route::get('/create', [ResaController::class,'create'])->name('create');
Route::post('/store', [ResaController::class,'store'])->name('store');
Route::delete('/delete/{id}', [ResaController::class,'destroy'])->name('destroy');
Route::get('/show/{id}', [ResaController::class,'show'])->name('show');
Route::get('/edit/{id}', [ResaController::class,'edit'])->name('edit');
Route::put('/update/{id}', [ResaController::class,'update'])->name('update');


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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservation', [ResaController::class,'index'])->name('index');
Route::get('/reservation/create', [ResaController::class,'create'])->name('create');
Route::post('/reservation/create', [ResaController::class,'store'])->name('store');

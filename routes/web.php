<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiaController;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/kuliah', [SiaController::class, 'index'])->name('kuliah');
Route::get('/grafik', [SiaController::class, 'grafik']);

Route::get('/kuliah/add', [SiaController::class, 'add']);
Route::post('/kuliah/insert', [SiaController::class, 'insert']);
Route::get('/kuliah/delete/{id}', [SiaController::class, 'delete']);
Route::get('/kuliah/edit/{id}', [SiaController::class, 'edit']);
Route::post('/kuliah/update/{id}', [SiaController::class, 'update']);

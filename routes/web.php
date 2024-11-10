<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeStockController;



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

Route::get('articles', [GeStockController::class, 'index'])->name('articles.index');

Route::get('articles/create', [GeStockController::class, 'create'])->name('articles.create');

Route::post('articles', [GeStockController::class, 'store'])->name('articles.store');

Route::get('articles/{article}/edit', [GeStockController::class, 'edit'])->name('articles.edit');

Route::put('articles/{article}', [GeStockController::class, 'update'])->name('articles.update');

Route::delete('articles/{article}', [GeStockController::class, 'delete'])->name('articles.delete');

Route::get('articles/category/{category}', [GeStockController::class, 'articlesByCategory'])->name('articles.byCategory');

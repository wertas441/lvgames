<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutsController;


Route::get('/catalog', [RoutsController::class, 'catalog'])->name('catalog-page');
Route::get('/guarantee', [RoutsController::class, 'guarantee'])->name('guarantee-page');
Route::get('/reviews', [RoutsController::class, 'reviews'])->name('reviews-page');
Route::get('/', [RoutsController::class, 'welcome'])->name('welcome');



require __DIR__.'/auth.php';

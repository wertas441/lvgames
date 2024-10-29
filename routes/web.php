<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CatalogController;


Route::get('/guarantee', [RoutsController::class, 'guarantee'])->name('guarantee-page');
Route::get('/', [RoutsController::class, 'welcome'])->name('welcome');
Route::get('/test-profile', [RoutsController::class, 'test'])->name('test-profile-page');


Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews-page');
Route::get('/make-review', [ReviewController::class, 'create'])->name('make-review');
Route::post('/make-review', [ReviewController::class, 'store']);

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog-page');



require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CatalogController;

/// OTHER
Route::get('/guarantee', [RoutsController::class, 'guarantee'])->name('guarantee-page');
Route::get('/', [RoutsController::class, 'welcome'])->name('welcome');
Route::get('/test-profile', [RoutsController::class, 'test'])->name('test-profile-page');


/// REVIEW
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews-page');
Route::get('/make-review', [ReviewController::class, 'create'])->name('make-review');
Route::post('/make-review', [ReviewController::class, 'store']);


/// CATALOG
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog-page');
Route::get('/make-games', [CatalogController::class, 'create'])->name('make-games');
Route::post('/make-games', [CatalogController::class, 'store']);
Route::get('/game-info/{id}', [CatalogController::class, 'show']) -> name('game-page');
Route::delete('/game-delete/{id}', [CatalogController::class, 'destroy'])->name('game-destroy');
Route::get('/sneaker-edit-page/{id}', [CatalogController::class, 'edit']) -> name('edit-page');


require __DIR__.'/auth.php';

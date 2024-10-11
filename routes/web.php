<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutsController;


Route::get('/catalog', [RoutsController::class, 'catalog'])->name('catalog-page');
Route::get('/guarantee', [RoutsController::class, 'guarantee'])->name('guarantee-page');
Route::get('/reviews', [RoutsController::class, 'reviews'])->name('reviews-page');
Route::get('/', [RoutsController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

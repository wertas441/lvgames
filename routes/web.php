<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RoutsController;


Route::get('/', [RoutsController::class, 'welcome']) -> name('welcome-page');
Route::get('/registration', [RoutsController::class, 'registerP']) -> name('register-page');
Route::get('/login', [RoutsController::class, 'loginP']) -> name('login-page');
Route::get('/catalog', [RoutsController::class, 'catalog']) -> name('catalog-page');
Route::get('/guarantee', [RoutsController::class, 'guarantee']) -> name('guarantee-page');
Route::get('/reviews', [RoutsController::class, 'reviews']) -> name('reviews-page');

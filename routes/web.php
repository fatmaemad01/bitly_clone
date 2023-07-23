<?php

use App\Http\Controllers\ShortUrlController;
use App\Models\ShortUrl;
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


Route::get('/', [ShortUrlController::class, 'index'])
    ->name('dashboard.index');

Route::get('/create', [ShortUrlController::class, 'create'])
    ->name('dashboard.create');

Route::post('/store', [ShortUrlController::class, 'store'])
    ->name('dashboard.store');

Route::get('/{shortUrl}', [ShortUrlController::class, 'redirect'])
    ->name('dashboard.redirect');

Route::delete('/{id}', [ShortUrlController::class, 'destroy'])
    ->name('dashboard.destroy');



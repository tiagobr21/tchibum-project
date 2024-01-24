<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\MomentController;
use App\Http\Controllers\ContatusController;
use App\Http\Controllers\PacksController;
use App\Http\Controllers\PostsController;



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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sobre', [AboutController::class, 'index']);

Route::get('/depoimentos', [TestimonyController::class, 'index']);

Route::get('/viajens', [TravelController::class, 'index']);

Route::get('/momentos', [MomentController::class, 'index']);

Route::get('/faleconosco', [ContatusController::class, 'index']);

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/{datepost}', [PostsController::class, 'post']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
 

    Route::get('/pacotes', [PacksController::class, 'index']);

});


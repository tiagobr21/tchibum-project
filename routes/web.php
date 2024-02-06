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
use App\Http\Controllers\GeocodeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ActivitiesController;



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

Route::get('/comunidades', [CommunityController::class, 'index']);

Route::get('/comunidade-{comunidade}', [CommunityController::class, 'community'])   ;

Route::get('/atividades', [ActivitiesController::class, 'index']);

Route::get('/atividade-{opcoe}', [ActivitiesController::class, 'activity']);

Route::get('/faleconosco', [ContatusController::class, 'index']);

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/post-{datepost}', [PostsController::class, 'post']);

Route::get('/geocode/{address}', [GeocodeController::class, 'geocode']);

Route::post('/faleconosco/mensagem', [ContatusController::class, 'mensagem']);


Route::middleware('web')->group(function () {
    Route::get('/change-language/{locale}', [LanguageController::class, 'changeLanguage'])->name('change.language');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/pacotes', [PacksController::class, 'index']);

});


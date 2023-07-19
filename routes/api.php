<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\SeasonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\OnePieceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group(['prefix' => 'characters'], function () {
//    Route::get('/leonard', [CharactersController::class, 'leonard']);
//    Route::get('/sheldon', [CharactersController::class, 'sheldon']);
//});

Route::apiResource('character', CharactersController::class);

Route::group(['prefix' => 'season'], function () {
    Route::get('/', [SeasonController::class, 'index']);
    Route::get('/{season}', [SeasonController::class, 'show']);
});

Route::group(['prefix' => 'season/episode'], function () {
    Route::get('/', [EpisodeController::class, 'index']);
    Route::get('/{episode}', [EpisodeController::class, 'show']);
});

Route::group(['prefix' => 'one-piece'], function () {
    Route::post('/', [OnePieceController::class, 'create']);
    Route::get('/{pirate}', [OnePieceController::class, 'getPirate']);
});

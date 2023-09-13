<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/jogos', [App\Http\Controllers\JogosController::class, 'getJogos']);
Route::post('/jogos', [App\Http\Controllers\JogosController::class, 'jogo']);
Route::put('/jogos', [App\Http\Controllers\JogosController::class, 'jogo']);
Route::delete('/jogos', [App\Http\Controllers\JogosController::class, 'jogo']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

// Rotas para jogos
Route::get('/jogos', [JogosController::class, 'index']);
Route::post('/jogos', [JogosController::class, 'store']);
Route::put('/jogos/{id}', [JogosController::class, 'update']);
Route::delete('/jogos/{id}', [JogosController::class, 'destroy']);


<?php

use App\Http\Controllers\CoachController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('pokemon', [PokemonController::class, 'index']);
Route::get('pokemon/create', [PokemonController::class, 'create']);
Route::post('pokemon', [PokemonController::class, 'store']);
Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemon/{id}', [PokemonController::class, 'update']);
Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);

Route::get('coaches', [CoachController::class, 'index']);
Route::get('coaches/create', [CoachController::class, 'create']);
Route::post('coaches', [CoachController::class, 'store']);
Route::get('coaches/{id}/edit', [CoachController::class, 'edit']);
Route::put('coaches/{id}', [CoachController::class, 'update']);
Route::delete('coaches/{id}', [CoachController::class, 'destroy']);
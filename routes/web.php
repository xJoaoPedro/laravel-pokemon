<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;


Route::get('pokemons', [PokemonController::class, 'index']);
Route::get('pokemons/create', [PokemonController::class, 'create']);
Route::post('pokemons', [PokemonController::class, 'store']);
Route::get('pokemons/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemons/{id}', [PokemonController::class, 'update']);
Route::delete('pokemons/{id}', [PokemonController::class, 'destroy']);


Route::get('trainers', [TrainerController::class, 'index']);
Route::get('trainers/create', [TrainerController::class, 'create']);
Route::post('trainers', [TrainerController::class, 'store']);
Route::get('trainers/{id}/edit', [TrainerController::class, 'edit']);
Route::put('trainers/{id}', [TrainerController::class, 'update']);
Route::delete('trainers/{id}', [TrainerController::class, 'destroy']);
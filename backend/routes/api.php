<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceptController;
use App\Http\Controllers\KategoriaController;

Route::get('/kategoriak', [KategoriaController::class, 'index']);

Route::get('/receptek', [ReceptController::class, 'index']);
Route::post('/receptek', [ReceptController::class, 'store']);
Route::delete('/receptek/{id}', [ReceptController::class, 'destroy']);
Route::get('/receptek/kategoria/{kat_id}', [ReceptController::class, 'kategoriankent']);
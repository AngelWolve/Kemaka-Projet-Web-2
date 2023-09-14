<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use Illuminate\Support\Facades\Route;

/**
 * ACCUEIL
 */
Route::get("/", [AccueilController::class, 'accueil'])
   ->name('accueil');

/**
 * ACTUALITÉS
 */
Route::get("/actualites", [ActualiteController::class, 'index'])
    ->name('actualites.index')
    ->middleware('auth');


// Affichage du formulaire de modification d'une actualité
Route::get("/actualites/edit/{id}", [ActualiteController::class, 'edit'])
    ->name('actualites.edit')
    ->middleware('auth');

// Traitement du formulaire de modification
Route::post("/actualites/update", [ActualiteController::class, 'update'])
    ->name('actualites.update')
    ->middleware('auth');

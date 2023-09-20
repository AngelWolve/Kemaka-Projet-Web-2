<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/**
 * ACCUEIL
 */
Route::get("/", [AccueilController::class, 'accueil'])
    ->name('accueil');

/**
 * ACTUALITÉS
 */

//Affiche la page des actualités
Route::get("/actualites", [ActualiteController::class, 'index'])
    ->name('actualites.index')
    ->middleware('auth');

// Affichage du formulaire d'ajout d'une actualité
Route::get('/actualites/create', [ActualiteController::class, 'create'])
    ->name('actualites.create')
    ->middleware('auth');

// Traitement du formulaire
Route::post('/actualites', [ActualiteController::class, 'store'])
    ->name('actualites.store')
    ->middleware('auth');

// Affichage du formulaire de modification d'une actualité
Route::get("/actualites/edit/{id}", [ActualiteController::class, 'edit'])
    ->name('actualites.edit')
    ->middleware('auth');

// Traitement du formulaire de modification
Route::post("/actualites/update", [ActualiteController::class, 'update'])
    ->name('actualites.update')
    ->middleware('auth');

// Traite la suppression d'une actualité
Route::post("/actualites/destroy", [ActualiteController::class, 'destroy'])
    ->name('actualites.destroy')
    ->middleware('auth');


/**
 * FORFAIT
 */

//Affiche la page des forfaits
Route::get("/forfaits", [ForfaitController::class, 'index'])
    ->name('forfaits.index');


/**
 * RÉSERVATION
 */

//Affiche le formulaire d'ajout
Route::get("/reservations/create/{id}", [ReservationController::class, 'create'])
    ->name('reservations.create');

// Traitement du formulaire
Route::post('/reservations/store', [ReservationController::class, 'store'])
    ->name('reservations.store');



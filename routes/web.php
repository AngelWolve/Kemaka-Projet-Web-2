<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnregistrementController;
use Illuminate\Support\Facades\Route;

/**
 * ACTIVITÉS
 */

//Affiche la page des activités
Route::get("/activites", [ActiviteController::class, 'index'])
    ->name('activites.index')
    ->middleware('auth');

// Affiche le formulaire d'ajout d'une activité
Route::get('/activites/create', [ActiviteController::class, 'create'])
    ->name('activites.create')
    ->middleware('auth');

// Traitemele formulaire d'ajout
Route::post('/activites', [ActiviteController::class, 'store'])
    ->name('activites.store')
    ->middleware('auth');

// Affiche le formulaire de modification d'une activité
Route::get("/activites/edit/{id}", [ActiviteController::class, 'edit'])
    ->name('activites.edit')
    ->middleware('auth');

// Traite le formulaire de modification
Route::post("/activites/update", [ActiviteController::class, 'update'])
    ->name('activites.update')
    ->middleware('auth');

// Traite la suppression d'une activité
Route::post("/activites/destroy", [ActiviteController::class, 'destroy'])
    ->name('activites.destroy')
    ->middleware('auth');




/*****************
 * CONNEXION ET ENREGISTREMENT
 */
Route::get("/connexion", [ConnexionController::class, 'create'])
    ->name('connexion.create');
// ->middleware('guest');

Route::post("/connexion", [ConnexionController::class, 'authentifier'])
    ->name('connexion.authentifier');
// ->middleware('guest');

Route::post("/deconnexion", [ConnexionController::class, 'deconnecter'])
    ->name('deconnexion');
// ->middleware('auth');

Route::get("/enregistrement", [EnregistrementController::class, 'create'])
    ->name('enregistrement.create');
// ->middleware('guest');

Route::post("/enregistrement", [EnregistrementController::class, 'store'])
    ->name('enregistrement.store');
    // ->middleware('guest');

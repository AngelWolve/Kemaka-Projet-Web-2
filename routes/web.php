<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnregistrementController;
use Illuminate\Support\Facades\Route;

/*****************
 * ACCUEIL
 */
Route::get("/", [AccueilController::class, 'accueil'])
    ->name('accueil');

/*****************
 * ACTUALITÉS
 */
Route::get("/actualites", [ActualiteController::class, 'index'])
    ->name('actualites.index')
    ->middleware('auth');

Route::get('/actualites/create', [ActualiteController::class, 'create'])
    ->name('actualites.create')
    ->middleware('auth');

Route::post('/actualites', [ActualiteController::class, 'store'])
    ->name('actualites.store')
    ->middleware('auth');

Route::get("/actualites/edit/{id}", [ActualiteController::class, 'edit'])
    ->name('actualites.edit')
    ->middleware('auth');

Route::post("/actualites/update", [ActualiteController::class, 'update'])
    ->name('actualites.update')
    ->middleware('auth');

Route::post("/actualites/destroy", [ActualiteController::class, 'destroy'])
    ->name('actualites.destroy')
    ->middleware('auth');

/*****************
 * FORFAITS
 */
Route::get("/forfaits", [ForfaitController::class, 'index'])
    ->name('forfaits.index');

/*****************
 * RÉSERVATIONS
 */
Route::get("/reservations/create/{id}", [ReservationController::class, 'create'])
    ->name('reservations.create');

Route::post('/reservations/store', [ReservationController::class, 'store'])
    ->name('reservations.store');

/*****************
 * ACTIVITÉS
 */
Route::get("/activites", [ActiviteController::class, 'index'])
    ->name('activites.index');

Route::get('/activites/create', [ActiviteController::class, 'create'])
    ->name('activites.create')
    ->middleware('auth');

Route::post('/activites', [ActiviteController::class, 'store'])
    ->name('activites.store')
    ->middleware('auth');

Route::get("/activites/edit/{id}", [ActiviteController::class, 'edit'])
    ->name('activites.edit')
    ->middleware('auth');

Route::post("/activites/update", [ActiviteController::class, 'update'])
    ->name('activites.update')
    ->middleware('auth');

Route::post("/activites/destroy", [ActiviteController::class, 'destroy'])
    ->name('activites.destroy')
    ->middleware('auth');

/*****************
 * À PROPOS
 */
Route::get("/a_propos", [AproposController::class, 'index'])
    ->name('a_propos');

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

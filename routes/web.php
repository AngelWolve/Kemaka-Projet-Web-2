<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\NousJoindreController;
use Illuminate\Support\Facades\Route;

/*****************
 * ACCUEIL
 */
Route::get("/", [AccueilController::class, 'accueil'])
    ->name('accueil');

/*****************
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

/*****************
 * FORFAITS
 */
//Affiche la page des forfaits
Route::get("/forfaits", [ForfaitController::class, 'index'])
    ->name('forfaits.index');

/*****************
 * RÉSERVATIONS
 */
//Affiche le formulaire d'ajout
Route::get("/reservations/create/{id}", [ReservationController::class, 'create'])
    ->name('reservations.create');

// Traitement du formulaire
Route::post('/reservations/store', [ReservationController::class, 'store'])
    ->name('reservations.store');

/*****************
 * ACTIVITÉS
 */
//Affiche la page des activités
Route::get("/activites", [ActiviteController::class, 'index'])
    ->name('activites.index');

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


/*****************
 * NOUS JOINDRE
 */

// Affiche la page nous joindre
Route::get('/nous_joindre', [NousJoindreController::class, 'index'])
     ->name('nous_joindre.index');

// Traitement du formulaire de question
Route::post('/nous_joindre/store', [NousJoindreController::class, 'store'])
    ->name('nous_joindre.store');

/*****************
 * EMPLOYÉ
 */

//Affiche la page de l'employé
Route::get("/employe", [EmployeController::class, 'index'])
    ->name('employe.index');
    // ->middleware('auth');

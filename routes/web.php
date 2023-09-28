<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\InfolettreController;
use App\Http\Controllers\NousJoindreController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

/*****************
 * ACCUEIL
 */
Route::get("/", [AccueilController::class, 'accueil'])
    ->name('accueil');

/*****************
 * ACTIVITÉS
 */
Route::get("/activites", [ActiviteController::class, 'index'])
    ->name('activites.index');

Route::get('/admin/activites/create', [ActiviteController::class, 'create'])
    ->name('admin/activites.create')
    ->middleware('admin');

Route::post('/admin/activites', [ActiviteController::class, 'store'])
    ->name('admin/activites.store')
    ->middleware('admin');

Route::get("/admin/activites/edit/{id}", [ActiviteController::class, 'edit'])
    ->name('admin/activites.edit')
    ->middleware('admin');

Route::post("/admin/activites/update", [ActiviteController::class, 'update'])
    ->name('admin/activites.update')
    ->middleware('admin');

Route::post("/admin/activites/destroy", [ActiviteController::class, 'destroy'])
    ->name('admin/activites.destroy')
    ->middleware('admin');

/*****************
 * FORFAITS
 */
Route::get("/forfaits", [ForfaitController::class, 'index'])
    ->name('forfaits.index');

/*****************
 * RÉSERVATIONS
 */
Route::get("/reservations/create/{id}", [ReservationController::class, 'create'])
    ->name('reservations.create')
    ->middleware('auth');

Route::post('/reservations/store', [ReservationController::class, 'store'])
    ->name('reservations.store')
    ->middleware('auth');

/*****************
 * À PROPOS
 */
Route::get("/a_propos", [AproposController::class, 'index'])
    ->name('a_propos.index');

/*****************
 * NOUS JOINDRE
 */
Route::get('/nous_joindre', [NousJoindreController::class, 'index'])
    ->name('nous_joindre.index');

/*****************
 * ACTUALITÉS
 */
Route::get('/admin/actualites/create', [ActualiteController::class, 'create'])
    ->name('admin/actualites.create')
    ->middleware('admin');

Route::post('/admin/actualites', [ActualiteController::class, 'store'])
    ->name('admin/actualites.store')
    ->middleware('admin');

Route::get("/admin/actualites/edit/{id}", [ActualiteController::class, 'edit'])
    ->name('admin/actualites.edit')
    ->middleware('admin');

Route::post("/admin/actualites/update", [ActualiteController::class, 'update'])
    ->name('admin/actualites.update')
    ->middleware('admin');

Route::post("/admin/actualites/destroy", [ActualiteController::class, 'destroy'])
    ->name('admin/actualites.destroy')
    ->middleware('admin');

/*****************
 * INFOLETTRE
 */
Route::post("/infolettre", [InfolettreController::class, 'store'])
    ->name('infolettre.store');

/*****************
 * QUESTION
 */
Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

/*****************
 * ZONE CLIENT
 */
Route::get("/client", [ClientController::class, 'index'])
    ->name('client.index')
    ->middleware('client');

/*****************
 * ZONE EMPLOYÉ
 */
Route::get("/employe", [EmployeController::class, 'index'])
    ->name('employe.index')
    ->middleware('employe');

/*****************
 * ZONE ADMINISTRATION
 */
Route::get("/admin", [AdminController::class, 'index'])
    ->name('admin.index')
    ->middleware('admin');

Route::get("/admin/activites", [AdminController::class, 'activites'])
    ->name('admin/activites.index')
    ->middleware('admin');

Route::get("/admin/actualites", [AdminController::class, 'actualites'])
    ->name('admin/actualites.index')
    ->middleware('admin');

/*****************
 * UTILISATEURS
 */
Route::get("/admin/utilisateurs", [UtilisateurController::class, 'index'])
    ->name('admin/reservations.index')
    ->middleware('admin');

Route::get('/admin/utilisateurs/create', [UtilisateurController::class, 'create'])
    ->name('admin/utilisateurs.create')
    ->middleware('admin');

Route::post('/admin/utilisateurs', [UtilisateurController::class, 'store'])
    ->name('admin/utilisateurs.store')
    ->middleware('admin');

Route::get("/admin/utilisateurs/edit/{id}", [UtilisateurController::class, 'edit'])
    ->name('admin/utilisateurs.edit')
    ->middleware('admin');

Route::post("/admin/utilisateurs/update", [UtilisateurController::class, 'update'])
    ->name('admin/utilisateurs.update')
    ->middleware('admin');

Route::post("/admin/utilisateurs/destroy", [UtilisateurController::class, 'destroy'])
    ->name('admin/utilisateurs.destroy')
    ->middleware('admin');

/*****************
 * CONNEXION ET ENREGISTREMENT
 */
Route::get("/connexion", [ConnexionController::class, 'create'])
    ->name('connexion.create')
    ->middleware('guest');

Route::post("/connexion", [ConnexionController::class, 'authentifier'])
    ->name('connexion.authentifier')
    ->middleware('guest');

Route::get("/enregistrement", [EnregistrementController::class, 'create'])
    ->name('enregistrement.create')
    ->middleware('guest');

Route::post("/enregistrement", [EnregistrementController::class, 'store'])
    ->name('enregistrement.store')
    ->middleware('guest');

Route::post("/deconnexion", [ConnexionController::class, 'deconnecter'])
    ->name('deconnexion')
    ->middleware('auth');

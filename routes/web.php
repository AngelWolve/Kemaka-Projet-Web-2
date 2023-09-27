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
use Illuminate\Support\Facades\Route;

/*****************
 * ACCUEIL
 */
Route::get("/", [AccueilController::class, 'accueil'])
    ->name('accueil');
// ->middleware(['auth', 'admin']);

/*****************
 * ADMIN
 */
Route::get("/admin", [AdminController::class, 'index'])
    ->name('admin.index')
    ->middleware('admin');

Route::get("/admin/activites", [AdminController::class, 'activites'])
    ->name('admin/activites.index');
// ->middleware('auth');

Route::get("/admin/actualites", [AdminController::class, 'actualites'])
    ->name('admin/actualites.index');
// ->middleware('auth');

Route::get("/admin/clients", [AdminController::class, 'clients'])
    ->name('admin/clients.index');
// ->middleware('auth');

Route::get("/admin/administrateurs", [AdminController::class, 'administrateurs'])
    ->name('admin/administrateurs.index');
// ->middleware('auth');

Route::get("/admin/employes", [AdminController::class, 'employes'])
    ->name('admin/employes.index');
// ->middleware('auth');

/*****************
 * ACTUALITÉS
 */
Route::get('/admin/actualites/create', [ActualiteController::class, 'create'])
    ->name('admin/actualites.create');
// ->middleware('auth');

Route::post('/admin/actualites', [ActualiteController::class, 'store'])
    ->name('admin/actualites.store');
// ->middleware('auth');

Route::get("/admin/actualites/edit/{id}", [ActualiteController::class, 'edit'])
    ->name('admin/actualites.edit');
// ->middleware('auth');

Route::post("/admin/actualites/update", [ActualiteController::class, 'update'])
    ->name('admin/actualites.update');
// ->middleware('auth');

Route::post("/admin/actualites/destroy", [ActualiteController::class, 'destroy'])
    ->name('admin/actualites.destroy');
// ->middleware('auth');

/*****************
 * ACTIVITÉS
 */
Route::get("/activites", [ActiviteController::class, 'index'])
    ->name('activites.index');

Route::get('/admin/activites/create', [ActiviteController::class, 'create'])
    ->name('admin/activites.create');
// ->middleware('auth');

Route::post('/admin/activites', [ActiviteController::class, 'store'])
    ->name('admin/activites.store');
// ->middleware('auth');

Route::get("/admin/activites/edit/{id}", [ActiviteController::class, 'edit'])
    ->name('admin/activites.edit');
// ->middleware('auth');

Route::post("/admin/activites/update", [ActiviteController::class, 'update'])
    ->name('admin/activites.update');
// ->middleware('auth');

Route::post("/admin/activites/destroy", [ActiviteController::class, 'destroy'])
    ->name('admin/activites.destroy');
// ->middleware('auth');

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
 * À PROPOS
 */
Route::get("/a_propos", [AproposController::class, 'index'])
    ->name('a_propos.index');


/*****************
 * INFOLETTRE
 */
Route::post("/infolettre", [InfolettreController::class, 'store'])
    ->name('infolettre.store');

/*****************
 * NOUS JOINDRE
 */
Route::get('/nous_joindre', [NousJoindreController::class, 'index'])
    ->name('nous_joindre.index');

/*****************
 * QUESTION
 */
Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

/*****************
 * EMPLOYÉ
 */
Route::get("/employe", [EmployeController::class, 'index'])
    ->name('employe.index');
// ->middleware('auth');


Route::get('/admin/employes/create', [EmployeController::class, 'create'])
    ->name('admin/employes.create');
// ->middleware('auth');

Route::post('/admin/employes', [EmployeController::class, 'store'])
    ->name('admin/employes.store');
// ->middleware('auth');

Route::get("/admin/employes/edit/{id}", [EmployeController::class, 'edit'])
    ->name('admin/employes.edit');
// ->middleware('auth');

Route::post("/admin/employes/update", [EmployeController::class, 'update'])
    ->name('admin/employes.update');
// ->middleware('auth');

Route::post("/admin/employes/destroy", [EmployeController::class, 'destroy'])
    ->name('admin/employes.destroy');
// ->middleware('auth');


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

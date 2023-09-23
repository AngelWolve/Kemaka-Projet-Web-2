<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\AdminController;
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
Route::get("/actualites", [ActualiteController::class, 'index'])
    ->name('actualites.index');
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
 * ADMIN
 */

//Affiche la page de l'admin
Route::get("/admin", [AdminController::class, 'index'])
    ->name('admin.index');
// ->middleware('auth');


//Affiche la liste des activités pour Admin
Route::get("/admin/activites", [AdminController::class, 'activites'])
    ->name('admin/activites.index');
// ->middleware('auth');




//Affiche la liste des actualités pour Admin
Route::get("/admin/actualites", [AdminController::class, 'actualites'])
    ->name('admin/actualites.index');
// ->middleware('auth');

Route::get('/admin/actualites/create', [AdminController::class, 'createActualites'])
    ->name('admin/actualites.create');
// ->middleware('auth');

Route::post('/admin/actualites', [AdminController::class, 'storeActualites'])
    ->name('admin/actualites.store');
// ->middleware('auth');

Route::get("/admin/actualites/edit/{id}", [AdminController::class, 'editActualites'])
    ->name('admin/actualites.edit');
// ->middleware('auth');

Route::post("/admin/actualites/update", [AdminController::class, 'updateActualites'])
    ->name('admin/actualites.update');
// ->middleware('auth');

Route::post("/admin/actualites/destroy", [AdminController::class, 'destroyActualites'])
    ->name('admin/actualites.destroy');
// ->middleware('auth');



//Affiche la liste des employés pour Admin
Route::get("/admin/employes", [AdminController::class, 'employes'])
    ->name('admin/employes.index');
// ->middleware('auth');

Route::get('/admin/employes/create', [AdminController::class, 'createEmployes'])
    ->name('admin/employes.create');
// ->middleware('auth');

Route::post('/admin/employes', [AdminController::class, 'storeEmployes'])
    ->name('admin/employes.store');
// ->middleware('auth');

Route::get("/admin/employes/edit/{id}", [AdminController::class, 'editEmployes'])
    ->name('admin/employes.edit');
// ->middleware('auth');

Route::post("/admin/employes/update", [AdminController::class, 'updateEmployes'])
    ->name('admin/employes.update');
// ->middleware('auth');

Route::post("/admin/employes/destroy", [AdminController::class, 'destroyEmployes'])
    ->name('admin/employes.destroy');
// ->middleware('auth');







/*****************
 * EMPLOYÉ
 */

//Affiche la page de l'employé
Route::get("/employe", [EmployeController::class, 'index'])
    ->name('employe.index');
    // ->middleware('auth');

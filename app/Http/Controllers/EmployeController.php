<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeController extends Controller
{


    /**
     * Affiche la liste des réservations
     *
     * @return View
     */
    public function index()
    {

        $reservations = Reservation::with(['user', 'forfait'])
            ->orderBy('created_at')
            ->get();

        return view("employe.index", [
            "reservations" => $reservations
        ]);
    }

    /**
     * Affiche le formulaire d'ajout
     *
     * @return View
     */
    public function create()
    {
        return view('employe.create');
    }

     /**
     * Traite l'ajout
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Valider
        $valides = $request->validate([
            "prenom" => "required",
            "nom" => "required",
            "email" => "required|email|max:255",
        ], [
            "prenom.required" => "Le prénom est requis",
            "nom.required" => "Le nom est requis",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit avoir un format valide",
            "email.max" => "Le :attribute doit avoir un maximum de :max caractères",
        ]);

        // Ajouter à la BDD
        $employe = new User();
        $employe->prenom = $valides["prenom"];
        $employe->nom = $valides["nom"];
        $employe->email = $valides["email"];
        $employe->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password;
        $employe->role_id = 2;

        $employe->save();

        // Rediriger
        return redirect()
            ->route('admin/employes.index')
            ->with('succes', "L'employé a été ajoutée avec succès!");
    }


    // /**
    //  * Affiche le formulaire de modification
    //  *
    //  * @param int $id Id de l'actualité à modifier
    //  * @return View
    //  */
    // public function edit($id)
    // {
    //     return view('actualites.edit', [
    //         "actualite" => Actualite::findOrFail($id),
    //     ]);
    // }

    // /**
    //  * Traite la modification
    //  *
    //  * @param Request $request Objet qui contient tous les champs reçus dans la requête
    //  * @return RedirectResponse
    //  */
    // public function update(Request $request)
    // {
    //     // Valider
    //     $valides = $request->validate([
    //         "id" => "required",
    //         "titre" => "required|min:4|max:150",
    //         "description" => "required"
    //     ], [
    //         "id.required" => "L'id de l'actualité est obligatoire",
    //         "titre.max" => "Le titre doit avoir un maximum de :max caractères",
    //         "titre.min" => "Le titre doit avoir un minimum de :min caractères",
    //         "description.required" => "La description de l'actualité est obligatoire"
    //     ]);

    //     // Récupération de l'actualité à modifier, suivi de la modification et sauvegarde
    //     $actualite = Actualite::findOrFail($valides["id"]);
    //     $actualite->titre = $valides["titre"];
    //     $actualite->description = $valides["description"];
    //     // $actualite->user_id = auth()->id();
    //     $actualite->user_id = 1;
    //     $actualite->save();

    //     // Rediriger
    //     return redirect()
    //         ->route('admin/actualites.index')
    //         ->with('succes', "L'actualité a été modifiée avec succès!");
    // }

    // /**
    //  * Traite la suppression
    //  *
    //  * @param Request $request
    //  * @return RedirectResponse
    //  */
    // public function destroy(Request $request)
    // {
    //     Actualite::destroy($request->id);

    //     return redirect()->route('admin/actualites.index')
    //         ->with('succes', "L'actualité a été supprimée!");
    // }
}




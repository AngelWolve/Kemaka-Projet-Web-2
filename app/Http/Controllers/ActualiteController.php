<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Affiche la liste des actualités
     *
     * @return View
     */
    public function index()
    {
        return view('actualites.index', [
            "actualites" => Actualite::all()
        ]);
    }

    /**
     * Affiche le formulaire d'ajout
     *
     * @return View
     */
    public function create() {
        return view('actualites.create');
    }

 /**
     * Traite l'ajout
     *
     * @param Request $request
     * @return RedirectResponse
    */
    public function store(Request $request) {
        // Valider
        $valides = $request->validate([
            "titre" => "required|min:4|max:150",
            "description" => "required"
        ], [
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "description.required" => "La description de l'actualité est obligatoire"
        ]);

        // Ajouter à la BDD
        $actualite = new Actualite(); // $actualite contient un objet "vide" du modèle (équivalent à une nouvelle entrée dans la table)
        $actualite->titre = $valides["titre"];
        $actualite->titre = $valides["description"];
        $actualite->user_id = auth()->user()->id;

        $actualite->save();

        // Rediriger
        return redirect()
                ->route('actualites.index')
                ->with('succes', "L'actualité a été ajoutée avec succès!");
    }


    /**
     * Affiche le formulaire de modification
     *
     * @param int $id Id de l'actualité à modifier
     * @return View
     */
    public function edit($id)
    {
        return view('actualites.edit', [
            "actualite" => Actualite::findOrFail($id),
        ]);
    }

    /**
     * Traite la modification
     *
     * @param Request $request Objet qui contient tous les champs reçus dans la requête
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        // Valider
        $valides = $request->validate([
            "id" => "required",
            "titre" => "required|min:4|max:150",
            "description" => "required"
        ], [
            "id.required" => "L'id de l'actualité est obligatoire",
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "description.required" => "La description de l'actualité est obligatoire"
        ]);

        // Récupération de l'actualité à modifier, suivi de la modification et sauvegarde
        $actualite = Actualite::findOrFail($valides["id"]);
        $actualite->titre = $valides["titre"];
        $actualite->description = $valides["description"];
        $actualite->user_id = auth()->id();
        $actualite->save();

        // Rediriger
        return redirect()
            ->route('actualites.index')
            ->with('succes', "L'actualité a été modifiée avec succès!");
    }

     /**
     * Traite la suppression
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request) {
        Actualite::destroy($request->id);

        return redirect()->route('actualites.index')
                ->with('succes', "L'actualité a été supprimée!");
    }
}

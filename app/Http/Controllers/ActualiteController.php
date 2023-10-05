<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Affiche le formulaire d'ajout d'une actualité
     *
     * @return View
     */
    public function create()
    {
        return view('actualites.create');
    }

    /**
     * Traite l'ajout d'une actualité
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "titre" => "required|max:50",
            "description" => "required|max:750"
        ], [
            "titre.required" => "Le titre est requis",
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "description.required" => "La description est obligatoire",
            "description.max" => "La description doit avoir un maximum de :max caractères"
        ]);

        // Création de l'actualité
        $actualite = new Actualite();
        $actualite->titre = $valides["titre"];
        $actualite->description = $valides["description"];
        $actualite->user_id = auth()->user()->id;
        $actualite->save();

        // Redirirection
        return redirect()
            ->route('admin/actualites.index')
            ->with('succes', "L'actualité a été ajoutée avec succès!");
    }

    /**
     * Affiche le formulaire de modification d'une actualité
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
     * Traite la modification d'une actualité
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "id" => "required",
            "titre" => "required|max:50",
            "description" => "required|max:750"
        ], [
            "id.required" => "L'id est requis",
            "titre.required" => "Le titre est requis",
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "description.required" => "La description est obligatoire",
            "description.max" => "La description de l'actualité doit avoir un maximum de :max caractères"
        ]);

        // Modification de l'actualité
        $actualite = Actualite::findOrFail($valides["id"]);
        $actualite->titre = $valides["titre"];
        $actualite->description = $valides["description"];
        $actualite->user_id = auth()->id();
        $actualite->save();

        // Redirection
        return redirect()
            ->route('admin/actualites.index')
            ->with('succes', "L'actualité a été modifiée avec succès!");
    }

    /**
     * Traite la suppression d'une actualité
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        Actualite::destroy($request->id);

        return redirect()->route('admin/actualites.index')
            ->with('succes', "L'actualité a été supprimée!");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActiviteController extends Controller
{
    /**
     * Affiche la page des activités
     *
     * @return View
     */
    public function index()
    {
        return view('activites.index', [
            "activites" => Activite::all()
        ]);
    }

    /**
     * Affiche le formulaire d'ajout d'une activité
     *
     * @return View
     */
    public function create()
    {
        return view('activites.create');
    }

    /**
     * Traite l'ajout d'une activité
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "nom" => "required|max:75",
            "description" => "required|max:500",
            "image" => "required|mimes:png,jpg,jpeg",
        ], [
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom doit avoir un maximum de :max caractères",
            "description.required" => "La description est obligatoire",
            "description.max" => "La description doit avoir un maximum de :max caractères",
            "image.required" => "L'image est obligatoire",
            "image.mimes" => "L'image doit avoir une des extensions suivantes: PNG, JPG, JPEG",
        ]);

        // Création de l'activité
        $activite = new Activite();
        $activite->nom = $valides["nom"];
        $activite->description = $valides["description"];
        $activite->user_id = auth()->id();

        // Traitement de l'image
        if ($request->hasFile('image')) {
            Storage::putFile("public/images", $request->image);
            $activite->image = "/storage/images/" . $request->image->hashName();
        }

        $activite->save();

        // Redirection
        return redirect()
            ->route('admin/activites.index')
            ->with('succes', "L'activité a été ajoutée avec succès!");
    }

    /**
     * Affiche le formulaire de modification d'une activité
     *
     * @param int $id Id de l'activité à modifier
     * @return View
     */
    public function edit($id)
    {
        return view('activites.edit', [
            "activite" => Activite::findOrFail($id),
        ]);
    }

    /**
     * Traite la modification d'une activité
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "id" => "required",
            "nom" => "required|max:75",
            "description" => "required|max:500",
            "image" =>  "nullable|mimes:png,jpg,jpeg",
        ], [
            "id.required" => "L'id est requis",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom doit avoir un maximum de :max caractères",
            "description.required" => "La description est obligatoire",
            "description.max" => "La description doit avoir un maximum de :max caractères",
            "image.mimes" => "L'image doit avoir une des extensions suivantes: PNG, JPG, JPEG",
        ]);

        // Modification de l'activité
        $activite = Activite::findOrFail($valides["id"]);
        $activite->nom = $valides["nom"];
        $activite->description = $valides["description"];
        $activite->user_id = auth()->id();

        // Traitement de l'image
        if ($request->hasFile('image')) {
            Storage::putFile("public/uploads", $request->image);
            $activite->image = "/storage/uploads/" . $request->image->hashName();
        }

        $activite->save();

        // Redirection
        return redirect()
            ->route('admin/activites.index')
            ->with('succes', "L'activité a été modifiée avec succès!");
    }

    /**
     * Traite la suppression d'une activité
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        Activite::destroy($request->id);

        return redirect()->route('admin/activites.index')
            ->with('succes', "L'activité a été supprimée!");
    }
}

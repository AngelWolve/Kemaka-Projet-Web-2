<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActiviteController extends Controller
{
    /**
     * Affiche la liste des activités
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
            "nom" => "required|max:255",
            "description" => "required",
            "image" =>  "required|mimes:png,jpg,jpeg",
        ], [
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le :attribute doit avoir un maximum de :max caractères",
            "description.required" => "La description de l'activité est obligatoire",
            "image.required" => "La image de l'activité est obligatoire",
            "image.mimes" => "L'image de l'activité doit avoir une des extensions suivantes: PNG, JPG, JPEG",
        ]);

        $activite = new Activite();
        $activite->nom = $valides["nom"];
        $activite->description = $valides["description"];
        $activite->user_id = 1;

        // Traitement de l'image
        if ($request->hasFile('image')) {
            Storage::putFile("public/uploads", $request->image);
            $activite->image = "/storage/uploads/" . $request->image->hashName();
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
            "nom" => "required|min:5|max:150",
            "description" => "required",
            "image" =>  "nullable|mimes:png,jpg,jpeg",
        ], [
            "id.required" => "L'id de l'activité est obligatoire",
            "nom.max" => "Le nom a un maximum de maximum caractères",
            "nom.min" => "Le nom doit avoir un minimum de 5 caractères",
            "description.required" => "La description de l'activité est obligatoire",
            "image.mimes" => "L'image de l'activité doit être en format : png,jpg,jpeg",
        ]);

        $activite = Activite::findOrFail($valides["id"]);
        $activite->nom = $valides["nom"];
        $activite->description = $valides["description"];
        $activite->user_id = 1;

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
            ->with('succes', "L'activité a bien été supprimée!");
    }
}

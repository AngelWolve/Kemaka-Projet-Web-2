<?php

namespace App\Http\Controllers;

use App\Models\Infolettre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class InfolettreController extends Controller
{
    /**
     * Traite l'enregistrement à l'infolettre
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "nom" => "required|max:255",
            "email" => "required|email|max:255",
        ], [
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom doit avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit être valide",
            "email.max" => "Le courriel doit avoir un maximum de :max caractères",
        ]);

        // Création de l'infolettre
        $infolettre = new Infolettre();
        $infolettre->nom = $valides["nom"];
        $infolettre->email = $valides["email"];
        $infolettre->save();

        // Redirection
        return redirect()->to(URL::previous() . "#infolettre")->with("succes", "Vous êtes maintenant inscrit à l'infolettre");
    }
}

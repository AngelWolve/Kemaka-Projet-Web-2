<?php

namespace App\Http\Controllers;

use App\Models\Infolettre;
use Illuminate\Http\Request;

class InfolettreController extends Controller
{
    /**
     * Traite l'enregistrement de l'infolettre
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $valides = $request->validate([
            "nom" => "required|max:255",
            "email" => "required|email|max:255",
        ], [
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le :attribute doit avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit avoir un format valide",
            "email.max" => "Le :attribute doit avoir un maximum de :max caractères",
            "message.required" => "Le message est requis",
        ]);

        $question = new Infolettre();
        $question->nom = $valides["nom"];
        $question->email = $valides["email"];
        $question->save();

        return redirect()->back();
    }
}

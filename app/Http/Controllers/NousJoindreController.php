<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class NousJoindreController extends Controller
{
    /**
     * Affiche la page nous joindre
     *
     * @return View
     */
    public function index()
    {
        return view('nous_joindre.index');
    }

    /**
     * Traite l'enregistrement d'une message
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $valides = $request->validate([
            "nom" => "required|max:255",
            "email" => "required|email|max:255",
            "message" => "required",
        ], [
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le :attribute doit avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit avoir un format valide",
            "email.max" => "Le :attribute doit avoir un maximum de :max caractères",
            "message.required" => "Le message est requis",

        ]);

        $question = new Question();
        $question->nom = $valides["nom"];
        $question->email = $valides["email"];
        $question->message = $valides["message"];
        $question->save();

        return redirect()
            ->route('accueil')
            ->with('succes', 'Le message a été envoyé avec succès.');
    }
}

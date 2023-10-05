<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Traite l'enregistrement d'une question
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
            "question" => "required|max:750",
        ], [
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom doit avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit être valide",
            "email.max" => "Le courriel doit avoir un maximum de :max caractères",
            "question.required" => "La question est requise",
            "question.max" => "La question doit avoir un maximum de :max caractères",
        ]);

        // Création de la question
        $question = new Question();
        $question->nom = $valides["nom"];
        $question->email = $valides["email"];
        $question->message = $valides["question"];
        $question->save();

        // Redirection
        return redirect()
            ->back()
            ->with('succes', 'Le message a été envoyé avec succès.');
    }
}

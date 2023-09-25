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
        $valides = $request->validate([
            "nom" => "required|max:255",
            "email" => "required|email|max:255",
            "question" => "required|max:750",
        ], [
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le :attribute doit avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit avoir un format valide",
            "email.max" => "Le :attribute doit avoir un maximum de :max caractères",
            "question.required" => "Le message est requis",
            "question.max" => "La :attribute doit avoir un maximum de :max caractères",
        ]);

        $question = new Question();
        $question->nom = $valides["nom"];
        $question->email = $valides["email"];
        $question->message = $valides["question"];
        $question->save();

        return redirect()
            ->back()
            ->with('succes', 'Le message a été envoyé avec succès.');
    }
}

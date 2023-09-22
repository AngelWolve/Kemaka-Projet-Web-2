<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EnregistrementController extends Controller
{
    /**
     * Affiche le formulaire d'enregistrement
     *
     * @return View
     */
    public function create()
    {
        return view('auth.enregistrement.create',[
            "roles"=> Role::all()
        ]);
    }

    /**
     * Traite le formulaire d'enregistrement
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "prenom" => "required|max:255",
            "nom" => "required|max:255",
            "email" => "required|email|max:255|unique:users,email",
            "password" => "required|min:8|max:255",
            "password_confirmation" => "required|same:password",
            "role_id" => "nullable"
        ], [
            "prenom.required" => "Le prénom est requis",
            "prenom.max" => "Le prénom ne doit pas dépasser :max caractères",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom ne doit pas dépasser :max caractères",
            "email.required" => "Le courriel est requis",
            "email.max" => "Le courriel ne doit pas dépasser :max caractères",
            "email.email" => "Le courriel doit avoir un format valide",
            "email.unique" => "Ce courriel ne peut pas être utilisé",
            "password.required" => "Le mot de passe est requis",
            "password.min" => "Le mot de passe doit avoir une longueur minimum de :min caractères",
            "password.max" => "Le mot de passe ne doit pas dépasser :max caractères",
            "password_confirmation.required" => "La confirmation du mot de passe est requise",
            "password_confirmation.same" => "Le mot de passe n'a pu être confirmé"
        ]);

        // Création de l'utilisateur
        $user = new User();
        $user->prenom = $valides["prenom"];
        $user->nom = $valides["nom"];
        $user->email = $valides["email"];
        $user->password = Hash::make($valides["password"]);
        $user->role_id = $valides["role_id"];

        // Sauvegarde de l'utilisateur
        $user->save();

        // Connexion de l'utilisateur
        if (!Auth::check()) {
            Auth::login($user);
        }

        // Redirection
        if (Auth::user()->role_id == 1) {
            return redirect()
                ->route('administration.index')
                ->with('succes', 'Le compte a été créé');
        }

        return redirect()
            ->route('accueil')
            ->with('succes', 'Votre compte a été créé');
    }
}

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
        if (Auth::check() && Auth::user()->role_id != 1) {
            if (Auth::user()->role_id == 2) {
                return redirect()->route('employe.index');
            } else {
                return redirect()->route('accueil');
            }
        }

        return view('auth.enregistrement.create', [
            "roles" => Role::all()
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
        if (Auth::check() && Auth::user()->role_id != 1) {
            if (Auth::user()->role_id == 2) {
                return redirect()->route('employe.index');
            } else {
                return redirect()->route('accueil');
            }
        }

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
            "prenom.max" => "Le prénom doit avoir un maximum de :max caractères",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom doit avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit être valide",
            "email.max" => "Le courriel doit avoir un maximum de :max caractères",
            "email.unique" => "Le courriel est déjà utilisé",
            "password.required" => "Le mot de passe est requis",
            "password.min" => "Le mot de passe doit avoir un minimum de :min caractères",
            "password.max" => "Le mot de passe doit avoir un maximum de :max caractères",
            "password_confirmation.required" => "La confirmation du mot de passe est requise",
            "password_confirmation.same" => "La confirmation du mot de passe doit être identique au mot de passe",
        ]);

        // Création de l'utilisateur
        $user = new User();
        $user->prenom = $valides["prenom"];
        $user->nom = $valides["nom"];
        $user->email = $valides["email"];
        $user->password = Hash::make($valides["password"]);
        $user->save();

        // Connexion de l'utilisateur s'il y a lieu
        if (!Auth::check()) {
            Auth::login($user);
        }

        // Redirection
        if (Auth::user()->role_id == 1) {
            return redirect()
                ->route('admin.index')
                ->with('succes', 'Le compte a été créé');
        }

        return redirect()
            ->route('accueil')
            ->with('succes', 'Votre compte a été créé');
    }
}

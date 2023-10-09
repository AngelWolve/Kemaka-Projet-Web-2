<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    /**
     * Affiche le formulaire de connexion
     *
     * @return View
     */
    public function create()
    {
        return view('auth.connexion.create');
    }

    /**
     * Traite la connexion de l'utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authentifier(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ], [
            "email.required" => "Le courriel est obligatoire",
            "email.email" => "Le courriel doit avoir un format valide",
            "password.required" => "Le mot de passe est requis"
        ]);

        // Authentification
        if (Auth::attempt($valides)) {
            $request->session()->regenerate();

            // Vérifier le type d'utilisateur et rediriger
            if (Auth::user()->role_id == 1) {
                return redirect()->intended(route('admin.index'))
                    ->with('succes', "Vous êtes connectés!");
            }

            if (Auth::user()->role_id == 2) {
                return redirect()->intended(route('employe.index'))
                    ->with('succes', "Vous êtes connectés!");
            }

            if (Auth::user()->role_id == 3) {
                return redirect()->intended(route('client.index'))
                    ->with('succes', "Vous êtes connectés!");
            }
        }

        // Redirection
        return back()
            ->with('echec', 'Les informations fournies ne sont pas valides');
    }

    /**
     * Déconnecte l'utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function deconnecter(Request $request)
    {
        // Déconnexion
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirection
        return redirect()
            ->route('accueil')
            ->with('succes', "Vous êtes déconnectés!");
    }
}

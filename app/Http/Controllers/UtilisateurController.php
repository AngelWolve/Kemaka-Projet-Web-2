<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Affiche la liste des utilisateurs
     *
     * @return View
     */
    public function index()
    {
        return view('admin/utilisateurs.index', [
            'administrateurs' => User::where('role_id', 1)->get(),
            'employes' => User::where('role_id', 2)->get(),
            'clients' => User::where('role_id', 3)->get()
        ]);
    }

    /**
     * Affiche le formulaire de modification d'un utilisateur
     *
     * @param int $id Id de l'utilisateur à modifier
     * @return View
     */
    public function edit($id)
    {
        return view('admin/utilisateurs.edit', [
            "utilisateur" => User::findOrFail($id),
            "roles" => Role::all()
        ]);
    }

    /**
     * Traite la modification d'un utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        // Validation
        $valides = $request->validate([
            "id" => "required",
            "prenom" => "required|max:255",
            "nom" => "required|max:255",
            "email" => "required|email|max:255|email",
            "password" => "nullable",
            "role_id" => "required"
        ], [
            "id.required" => "L'id est requis",
            "prenom.required" => "Le prénom est requis",
            "prenom.max" => "Le prénom doit avoir un maximum de :max caractères",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom doit avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit être valide",
            "email.max" => "Le courriel doit avoir un maximum de :max caractères",
            "password.required" => "Le mot de passe est requis",
            "role_id.required" => "Le rôle est requis"
        ]);

        // Modification de l'utilisateur
        $utilisateur = User::findOrFail($valides["id"]);
        $utilisateur->prenom = $valides["prenom"];
        $utilisateur->nom = $valides["nom"];
        $utilisateur->email = $valides["email"];
        $utilisateur->role_id = $valides["role_id"];
        $utilisateur->save();

        // Redirection
        return redirect()
            ->route('admin/utilisateurs.index')
            ->with('succes', "L'utilisateur a été modifiée avec succès!");
    }

    /**
     * Traite la suppression
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        User::destroy($request->id);

        return redirect()->route('admin/utilisateurs.index')
            ->with('succes', "L'utilisateur a été supprimée!");
    }
}

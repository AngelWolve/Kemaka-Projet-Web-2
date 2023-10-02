<?php

namespace App\Http\Controllers;

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
     * Affiche le formulaire de modification
     *
     * @param int $id Id de l'utilisateur à modifier
     * @return View
     */
    public function edit($id)
    {
        return view('admin/utilisateurs.edit', [
            "utilisateur" => User::findOrFail($id),
        ]);
    }

    // update
    // destroy
}

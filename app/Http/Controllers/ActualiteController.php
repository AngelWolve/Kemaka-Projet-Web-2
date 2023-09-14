<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Affiche la liste des actualités
     *
     * @return View
     */
    public function index()
    {
        return view('actualites.index', [
            "actualites" => Actualite::all()
        ]);
    }

     /**
     * Affiche le formulaire de modification
     *
     * @param int $id Id de l'actualité à modifier
     * @return View
     */
    public function edit($id) {
        return view('actualites.edit', [
            "actualite" => Actualite::findOrFail($id),
        ]);
    }

}

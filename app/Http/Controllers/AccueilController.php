<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Affiche la page d'accueil
     *
     * @return View
     */
    public function accueil()
    {
        return view('accueil', [
            'actualites' => Actualite::all()
        ]);
    }
}

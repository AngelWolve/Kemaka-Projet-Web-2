<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Affichage la page d'accueil
     *
     * @return View
     */
    public function accueil()
    {
        return view('accueil');
    }
}

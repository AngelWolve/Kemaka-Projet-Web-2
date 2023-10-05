<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NousJoindreController extends Controller
{
    /**
     * Affiche la page "Nous joindre"
     *
     * @return View
     */
    public function index()
    {
        return view('nous_joindre.index');
    }
}

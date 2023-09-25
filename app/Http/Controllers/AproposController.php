<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    /**
     * Affiche la page "À propos"
     *
     * @return void
     */
    public function index()
    {
        return view('a_propos.index');
    }
}

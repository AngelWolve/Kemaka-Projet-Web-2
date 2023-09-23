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
}

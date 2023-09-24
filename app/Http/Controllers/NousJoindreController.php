<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class NousJoindreController extends Controller
{
    /**
     * Affiche la page nous joindre
     *
     * @return View
     */
    public function index()
    {
        return view('nous_joindre.index');
    }
}

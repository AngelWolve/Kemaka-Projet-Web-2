<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Actualite;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Affiche le panneau d'administration
     *
     * @return View
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Affiche la liste des activités
     *
     * @return View
     */
    public function activites()
    {
        return view('admin/activites.index', [
            "activites" => Activite::all()
        ]);
    }

    /**
     * Affiche la liste des actualités
     *
     * @return View
     */
    public function actualites()
    {
        return view('admin/actualites.index', [
            "actualites" => Actualite::all()
        ]);
    }
}

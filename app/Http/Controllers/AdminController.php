<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Actualite;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Affiche la page Dashboard
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


    /**
     * Affiche la liste des employés
     *
     * @return View
     */
    public function employes()
    {
        return view('admin/employes.index', [
            "employes" => User::where('role_id', 2)->get()
        ]);
    }
}

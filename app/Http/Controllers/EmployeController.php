<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
      /**
     * Affiche la page d'employé
     *
     * @return View
     */
    public function index()
    {
        return view('employe.index');
    }
}

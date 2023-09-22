<?php

namespace App\Http\Controllers;

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
     * Affiche la page Dashboard
     *
     * @return View
     */
    public function activites()
    {
        return view('admin/activites.index');
    }
}

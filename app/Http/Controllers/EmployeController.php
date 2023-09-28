<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Affiche la liste des réservations
     *
     * @return View
     */
    public function index()
    {
        return view("employe.index", [
            "reservations" => Reservation::with(['user', 'forfait'])
                ->orderBy('created_at')
                ->get()
        ]);
    }
}

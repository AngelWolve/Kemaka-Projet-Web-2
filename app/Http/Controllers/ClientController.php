<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Affiche la liste des forfaits d'un client
     *
     * @return View
     */
    public function index()
    {

        return view('client.index', [
            "reservations" => Auth::user()
                ->reservations()
                ->with('forfait')
                ->orderBy('created_at')
                ->get()
        ]);
    }
}

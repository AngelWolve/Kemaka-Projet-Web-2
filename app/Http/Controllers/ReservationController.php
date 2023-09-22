<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Affiche le formulaire d'ajout
     *
     * @return View
     */
    public function create($id)
    {
        return view('reservations.create', [
            "forfait" => Forfait::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $valides = $request->validate([
            'date_arrivee' => 'required|date',
            'date_depart' => 'required|date',
            'forfait_id' => 'required',
        ], [
            "date_arrivee" => "La date d'arrivé est obligatoire",
            "date_depart" => "La date de départ est obligatoire",
            "forfait_id" => "Id de forfait est obligatoire",

        ]);

        // Ajouter à la BDD
        $reservation = new Reservation();
        // $reservation->user_id = auth()->user()->id; // pour avoir un utilisateur connecté
        $reservation->user_id = 11;
        $reservation->forfait_id = $valides["forfait_id"];
        $reservation->date_arrivee = $valides["date_arrivee"];
        $reservation->date_depart = $valides["date_depart"];
        $reservation->save();

        // Rediriger
        return redirect()
            ->route('forfaits.index')
            ->with('success', 'Réservation a été crée avec succès.');
    }
}

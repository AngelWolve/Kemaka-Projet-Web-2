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

    /**
     * Traite l'annulation d'une réservation
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        $reservation = Reservation::findOrFail($request->id);

        if ($reservation->date_depart <= now()) {
            return redirect()->route('client.index')->with('echec', 'Vous ne pouvez pas annuler une réservation passée.');
        }

        Reservation::destroy($request->id);

        return redirect()->route('client.index')
            ->with('succes', "La réservation a bien été annulée!");
    }
}

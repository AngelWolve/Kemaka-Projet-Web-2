<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Affiche la liste des reservations
     *
     * @return View
     */
    public function index()
    {
        return view('reservations.index', [
            "reservations" => Reservation::with(['user', 'forfait'])
                ->orderBy('created_at')
                ->get()
        ]);
    }

    /**
     * Affiche le formulaire d'ajout d'une réservation
     *
     * @return View
     */
    public function create($id)
    {
        $forfait = Forfait::findOrFail($id);

        $dates_disponibles_arrivee = [];
        $dates_disponible_depart = [];

        // Sélectionnez les dates disponibles en fonction du forfait
        if ($forfait->duree == 1) {
            $dates_disponibles_arrivee = ["2024-06-14", "2024-06-15", "2024-06-16"];
            $dates_disponible_depart = ["2024-06-14", "2024-06-15", "2024-06-16"];
        } elseif ($forfait->duree == 2) {
            $dates_disponibles_arrivee = ["2024-06-14", "2024-06-15"];
            $dates_disponible_depart = ["2024-06-15", "2024-06-16"];
        } elseif ($forfait->duree == 3) {
            $dates_disponibles_arrivee = ["2024-06-14"];
            $dates_disponible_depart = ["2024-06-16"];
        }

        return view('reservations.create', [
            "forfait" => $forfait,
            "dates_disponibles_arrivee" => $dates_disponibles_arrivee,
            "dates_disponible_depart" => $dates_disponible_depart,
        ]);
    }

    /**
     * Traite l'ajout d'une réservation
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            "date_arrivee" => "required|date",
            "date_depart" => "required|date",
            "forfait_id" => "required|exists:forfaits,id",
        ], [
            "date_arrivee.required" => "La date d'arrivée est requise",
            "date_arrivee.date" => "La date d'arrivée doit être une date valide",
            "date_depart.required" => "La date de départ est requise",
            "date_depart.date" => "La date de départ doit être une date valide",
            "forfait_id.required" => "Le forfait est requis",
            "forfait_id.exists" => "Le forfait doit exister",
        ]);

        // Récupérez les détails du forfait
        $forfait = Forfait::findOrFail($request->input('forfait_id'));

        // Vérifiez si les dates sont valides pour le forfait choisi
        $date_arrivee = strtotime($request->input('date_arrivee'));
        $date_depart = strtotime($request->input('date_depart'));

        // Vérifiez si les dates sont incluses dans les dates du festival
        $dates_festival = [
            strtotime('2024-06-14'),
            strtotime('2024-06-15'),
            strtotime('2024-06-16'),
        ];

        // Vérifiez si les dates sont incluses dans les dates du festival
        foreach ($dates_festival as $date_festival) {
            if ($date_arrivee <= $date_festival && $date_depart >= $date_festival) {
                break;
            }
        }

        // Aucune date de festival n'est incluse dans la réservation
        if (!isset($date_festival)) {
            return redirect()
                ->back()
                ->with('echec', 'Les dates de réservation ne sont pas valides pour ce forfait.');
        }

        // Creéation de la réservation
        $reservation = new Reservation();
        $reservation->user_id = auth()->user()->id;
        $reservation->forfait_id = $forfait->id;
        $reservation->date_arrivee = $request->input('date_arrivee');
        $reservation->date_depart = $request->input('date_depart');
        $reservation->save();

        // Redirection
        return redirect()
            ->route('forfaits.index')
            ->with('succes', 'La réservation a été créée avec succès!');
    }

    /**
     * Traite l'annulation d'une réservation
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        // Validation
        if (Auth::user()->role_id == 1) {
            // Suppression de la réservation
            Reservation::destroy($request->id);

            // Redirection
            return redirect()
                ->route('reservations.index')
                ->with('succes', "La réservation a bien été annulée!");
        }

        // Validation
        if (Auth::user()->role_id == 3) {
            if (Reservation::findOrFail($request->id)->date_depart <= now()) {

                // Redirection
                return redirect()
                    ->route('client.index')
                    ->with('echec', 'Vous ne pouvez plus annuler cette réservation.');
            }

            // Suppression de la réservation
            Reservation::destroy($request->id);

            // Redirection
            return redirect()
                ->route('client.index')
                ->with('succes', "La réservation a bien été annulée!");
        }

        // Redirection
        return redirect()
            ->route('accueil')
            ->with('echec', "Vous n'avez pas les droits pour annuler cette réservation.");
    }
}

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
        $forfait = Forfait::findOrFail($id);

        // Sélectionnez les dates disponibles en fonction du forfait
        $datesDisponibleArrivee = [];
        $datesDisponibleDepart = [];

        if ($forfait->duree == 1) {
            $datesDisponibleArrivee = ['2024-06-14', '2024-06-15', '2024-06-16'];
            $datesDisponibleDepart = ['2024-06-14', '2024-06-15', '2024-06-16'];
        } elseif ($forfait->duree == 2) {
            $datesDisponibleArrivee = ['2024-06-14', '2024-06-15'];
            $datesDisponibleDepart = ['2024-06-15', '2024-06-16'];
        } elseif ($forfait->duree == 3) {
            $datesDisponibleArrivee = ['2024-06-14'];
            $datesDisponibleDepart = ['2024-06-16'];
        }

        return view('reservations.create', [
            "forfait" => $forfait,
            "datesDisponibleArrivee" => $datesDisponibleArrivee,
            "datesDisponibleDepart" => $datesDisponibleDepart,
        ]);
    }

    // public function store(Request $request)
    // {
    //     // Valider les données du formulaire
    //     $valides = $request->validate([
    //         'date_arrivee' => 'required|date',
    //         'date_depart' => 'required|date',
    //         'forfait_id' => 'required',
    //     ], [
    //         "date_arrivee" => "La date d'arrivé est obligatoire",
    //         "date_depart" => "La date de départ est obligatoire",
    //         "forfait_id" => "Id de forfait est obligatoire",

    //     ]);

    //     // Ajouter à la BDD
    //     $reservation = new Reservation();
    //     // $reservation->user_id = auth()->user()->id; // pour avoir un utilisateur connecté
    //     $reservation->user_id = 11;
    //     $reservation->forfait_id = $valides["forfait_id"];
    //     $reservation->date_arrivee = $valides["date_arrivee"];
    //     $reservation->date_depart = $valides["date_depart"];
    //     $reservation->save();

    //     // Rediriger
    //     return redirect()
    //         ->route('forfaits.index')
    //         ->with('success', 'Réservation a été crée avec succès.');
    // }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'date_arrivee' => 'required|date',
            'date_depart' => 'required|date',
            'forfait_id' => 'required|exists:forfaits,id',
        ], [
            "date_arrivee.required" => "La date d'arrivée est obligatoire.",
            "date_depart.required" => "La date de départ est obligatoire.",
            "forfait_id.required" => "L'ID du forfait est obligatoire.",
        ]);

        // Récupérez les détails du forfait
        $forfait = Forfait::findOrFail($request->input('forfait_id'));

        // Vérifiez si les dates sont valides pour le forfait choisi
        $dateArrivee = strtotime($request->input('date_arrivee'));
        $dateDepart = strtotime($request->input('date_depart'));

        // Vérifiez si les dates sont incluses dans les dates du festival
        $datesFestival = [
            strtotime('2024-06-14'),
            strtotime('2024-06-15'),
            strtotime('2024-06-16'),
        ];

        foreach ($datesFestival as $dateFestival) {
            if ($dateArrivee <= $dateFestival && $dateDepart >= $dateFestival) {
                // Les dates sont valides pour le forfait
                break;
            }
        }

        if (!isset($dateFestival)) {
            // Aucune date de festival n'est incluse dans la réservation
            return redirect()->back()->with('error', 'Les dates de réservation ne sont pas valides pour ce forfait.');
        }

        // Ajoutez à la BDD
        $reservation = new Reservation();
        $reservation->user_id = auth()->user()->id; // ou tout autre méthode pour obtenir l'utilisateur connecté
        $reservation->forfait_id = $forfait->id;
        $reservation->date_arrivee = $request->input('date_arrivee');
        $reservation->date_depart = $request->input('date_depart');
        $reservation->save();

        // Rediriger
        return redirect()
            ->route('forfaits.index')
            ->with('success', 'Réservation a été créée avec succès.');
    }
}

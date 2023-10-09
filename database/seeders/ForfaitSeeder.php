<?php

namespace Database\Seeders;

use App\Models\Forfait;
use Illuminate\Database\Seeder;

class ForfaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Ajout des forfaits
         */
        Forfait::factory()->create([
            "nom" => "Forfait Légendaire",
            "description" => "L'Expérience Otaku Ultime vous attend avec le Forfait Légendaire. Accès illimité aux trois jours du festival, deux nuitées dans un hôtel de qualité supérieure, des cadeaux exclusifs comme des éditions limitées de mangas, des accès prioritaires aux dédicaces, et bien plus encore. L'ultime aventure Otaku vous attend!",
            "duree" => 3,
            "prix" => 325.00,
        ]);

        Forfait::factory()->create([
            "nom" => "Forfait Épique",
            "description" => "Découvrez l'essence de la culture Otaku avec le Forfait Épique. Immergez-vous pendant deux jours complets au festival, explorez une multitude d'activités, assistez à des projections de films et séries cultes, puis détendez-vous lors d'une nuitée à l'hôtel à proximité pour recharger vos batteries à fond. Profitez pleinement de cette expérience unique et inoubliable.",
            "duree" => 2,
            "prix" => 150.00,
        ]);

        Forfait::factory()->create([
            "nom" => "Forfait Magique",
            "description" => "Vivez une expérience épique au festival Asian Quest grâce au Forfait Magique. Profitez d'une journée complète d'accès à toutes les activités, kiosques de produits dérivés, expositions et concours de cosplay. Immergez-vous dans l'excitation de la culture asiatique lors de cette journée inoubliable.",
            "duree" => 1,
            "prix" => 35.00,
        ]);
    }
}

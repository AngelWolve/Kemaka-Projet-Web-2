<?php

namespace Database\Seeders;

use App\Models\Activite;
use Illuminate\Database\Seeder;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Ajout des activités
         */
        Activite::factory()->create([
            "nom" => "Expositions avec dédicaces",
            "description" => "Explorez des expositions captivantes mettant en vedette les artistes et créateurs derrière vos manga et anime préférés. Rencontrez en personne les génies derrière les œuvres et obtenez des dédicaces exclusives. L'art et la créativité vous attendent à chaque coin!",
            "image" => "images/dedicaces.png",
            "user_id" => 1
        ]);

        Activite::factory()->create([
            "nom" => "Projections de films et séries",
            "description" => "Plongez dans l'univers cinématographique de l'Asie avec des projections de films et de séries époustouflants. Découvrez des histoires émouvantes, des aventures palpitantes et des mondes fantastiques à l'écran. Une expérience immersive pour tous les amoureux du cinéma asiatique!",
            "image" => "images/projection.png",
            "user_id" => 2
        ]);

        Activite::factory()->create([
            "nom" => "Concours de Cosplay",
            "description" => "Entrez dans la peau de vos personnages préférés avec notre concours de cosplay. Laissez libre cours à votre créativité et à votre talent en incarnant des héros iconiques. Qui sera couronné le maître du cosplay ? C'est votre chance de briller!",
            "image" => "images/cosplay-concours.png",
            "user_id" => 3
        ]);

        Activite::factory()->create([
            "nom" => "Kiosques de produits dérivés",
            "description" => "Parcourez les kiosques remplis de trésors Otaku, des figurines aux objets de collection en passant par les vêtements et les accessoires. Trouvez des articles uniques pour agrandir votre collection et exprimer votre passion pour la culture manga et anime.",
            "image" => "images/kiosque-produits.png",
            "user_id" => 4
        ]);

        Activite::factory()->create([
            "nom" => "Scène de performances en direct",
            "description" => "Vivez des moments inoubliables avec des performances en direct, des groupes de musique inspirés de la culture asiatique, des danses traditionnelles, et bien plus encore. Laissez-vous emporter par l'ambiance festive et l'énergie de la scène!",
            "image" => "images/performance-direct.png",
            "user_id" => 5
        ]);
    }
}

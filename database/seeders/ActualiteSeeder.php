<?php

namespace Database\Seeders;

use App\Models\Actualite;
use Illuminate\Database\Seeder;

class ActualiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Ajout des actualités
         */
        Actualite::factory()->create([
            "titre" => "Concours de Cosplay Épique!",
            "description" => "Préparez-vous à revêtir vos costumes les plus impressionnants et à incarner vos personnages préférés lors de notre légendaire concours de cosplay lors d'Asian Quest. Des prix époustouflants, allant des récompenses en espèces à des cadeaux exclusifs, ainsi qu'une reconnaissance chaleureuse de la communauté Otaku, sont au rendez-vous. Ne laissez pas passer cette opportunité unique de briller sur scène, de vous connecter avec d'autres passionnés et de célébrer ensemble la créativité et la passion qui animent notre communauté!",
            "user_id" => 1
        ]);

        Actualite::factory()->create([
            "titre" => "Nouveaux Invités Annoncés!",
            "description" => "Nous sommes plus que ravis de lever le voile sur nos invités spéciaux pour cette édition d'Asian Quest ! Préparez-vous à une rencontre inoubliable avec une constellation d'artistes talentueux, de créateurs renommés et de cosplayers célèbres, qui apporteront une dimension extraordinaire à l'événement. Leur présence promet d'enrichir cette expérience unique d'une touche de magie et d'inspiration, créant ainsi des souvenirs inoubliables pour tous les participants.",
            "user_id" => 2
        ]);

        Actualite::factory()->create([
            "titre" => "Ateliers de Dessin!",
            "description" => "Plongez au cœur de la créativité grâce à nos ateliers de dessin et de création à Asian Quest. Des experts de renommée internationale seront là pour vous guider à travers une panoplie de techniques et d'astuces, vous permettant ainsi d'explorer de nouveaux horizons artistiques. Que vous soyez débutant ou expérimenté, cette expérience promet de vous inspirer et de faire grandir votre talent. Rejoignez-nous dans une atmosphère stimulante où la passion de l'art prend vie!",
            "user_id" => 3
        ]);

        Actualite::factory()->create([
            "titre" => "Séance de Questions",
            "description" => "Vous avez toujours rêvé de poser vos questions aux créateurs de manga que vous admirez ? Ne manquez pas notre session de questions-réponses en direct lors d'Asian Quest. C'est une opportunité unique de découvrir les secrets et les inspirations qui se cachent derrière vos œuvres préférées, et de vous plonger dans l'univers captivant de la création manga. Soyez prêts à vivre un moment d'échange inoubliable avec les maîtres de cet art exceptionnel!",
            "user_id" => 4
        ]);

        Actualite::factory()->create([
            "titre" => "Découvrez la Zone Gaming!",
            "description" => "Plongez tête la première dans un univers de jeu exceptionnel à la Zone Gaming d'Asian Quest ! Avec une sélection des tout derniers titres, des tournois enflammés et des activités exclusives, cette expérience vous promet des moments inoubliables. Que vous soyez un vétéran du gaming ou que vous découvriez cet univers, préparez-vous à une aventure immersive au cœur de l'action vidéoludique. Relevez des défis palpitants et découvrez des mondes virtuels captivants!",
            "user_id" => 5
        ]);
    }
}

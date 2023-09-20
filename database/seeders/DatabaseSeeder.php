<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ajout d'infolettres fictives
        \App\Models\Infolettre::factory(10)->create();

        // Ajout de questions fictives
        \App\Models\Question::factory(5)->create();

        // Ajout des rôles
        Role::factory()->create([
            "nom" => "administrateur"
        ]);

        Role::factory()->create([
            "nom" => "employé"
        ]);

        Role::factory()->create([
            "nom" => "client"
        ]);

        // Ajout des utilisateurs fixes
        User::factory()->create([
            "prenom" => "Kevin",
            "nom" => "Levesque-Aubut",
            "email" => "kevin@asianquest.com",
            "role_id" => 1,
        ]);

        User::factory()->create([
            "prenom" => "Masomeh",
            "nom" => "Mofidipour",
            "email" => "masomeh@asianquest.com",
            "role_id" => 1,
        ]);

        User::factory()->create([
            "prenom" => "Katie",
            "nom" => "Sabourin",
            "email" => "katie@asianquest.com",
            "role_id" => 1,
        ]);

        User::factory()->create([
            "prenom" => "Marie",
            "nom" => "Bertrand",
            "email" => "marie@asianquest.com",
            "role_id" => 1,
        ]);

        User::factory()->create([
            "prenom" => "Éric",
            "nom" => "Gagné",
            "email" => "erga@asianquest.com",
            "role_id" => 1,
        ]);

        // Ajout d'utilisateurs fictifs
        \App\Models\User::factory(10)->create();

        // Ajout d'actualités fictives
        \App\Models\Actualite::factory(5)->create();

        // Ajout d'activités fictives
        \App\Models\Activite::factory(5)->create();

        // Ajout de forfaits fictifs
        \App\Models\Forfait::factory(3)->create();

        // Ajout de réservations fictives
        \App\Models\Reservation::factory(10)->create();
    }
}

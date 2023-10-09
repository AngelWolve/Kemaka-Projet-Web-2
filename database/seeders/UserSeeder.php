<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Ajout des utilisateurs
         */
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
    }
}

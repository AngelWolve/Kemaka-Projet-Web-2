<?php

namespace Database\Seeders;

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
        /**************
         * UTILISATEURS
         **************/


        // Ajout d'utilisateurs fictifs
        \App\Models\Role::factory(3)->create();
        \App\Models\User::factory(10)->create();

        User::factory()->create([
            "prenom" => "Alicia",
            "nom" => "Aubut",
            "email" => "alicia@gmail.com",
        ]);

        \App\Models\Activite::factory(5)->create();
        \App\Models\Actualite::factory(5)->create();
        \App\Models\Forfait::factory(3)->create();
        \App\Models\Infolettre::factory(10)->create();
        \App\Models\Question::factory(5)->create();
        \App\Models\Reservation::factory(10)->create();
    }
}

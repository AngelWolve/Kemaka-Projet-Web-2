<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Ajout des rôles
         */
        Role::factory()->create([
            "nom" => "administrateur"
        ]);

        Role::factory()->create([
            "nom" => "employé"
        ]);

        Role::factory()->create([
            "nom" => "client"
        ]);
    }
}

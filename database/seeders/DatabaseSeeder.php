<?php

namespace Database\Seeders;

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
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            InfolettreSeeder::class,
            QuestionSeeder::class,
            ActiviteSeeder::class,
            ActualiteSeeder::class,
            ForfaitSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}

<?php

namespace Database\Factories;

use App\Models\Forfait;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_arrivee' => $this->faker->dateTimeBetween('now', '+1 years'),
            'date_depart' => $this->faker->dateTimeBetween('+1 years', '+2 years'),
            'user_id' => User::inRandomOrder()->first()->id,
            'forfait_id' => Forfait::inRandomOrder()->first()->id,
        ];
    }
}

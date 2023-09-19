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
        $date_arrive = $this->faker->dateTimeBetween('2024-06-14', '2024-06-16');

        return [
            'date_arrive' => $date_arrive,
            'date_depart' => $this->faker->dateTimeBetween($date_arrive, '2024-06-17'),
            'user_id' => User::inRandomOrder()->first()->id,
            'forfait_id' => Forfait::inRandomOrder()->first()->id,
        ];
    }
}

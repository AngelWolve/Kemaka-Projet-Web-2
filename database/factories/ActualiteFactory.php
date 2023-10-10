<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActualiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(5),
            'description' => $this->faker->text(750),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}

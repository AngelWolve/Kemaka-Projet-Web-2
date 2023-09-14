<?php

namespace Database\Factories;

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
            'titre' => $this->faker->sentence(10),
            'description' => $this->faker->text(500),
            'user_id' => rand(1, 10),
        ];
    }
}

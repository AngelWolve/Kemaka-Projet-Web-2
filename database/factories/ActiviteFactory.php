<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActiviteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->sentence(10),
            'description' => $this->faker->text(500),
            'image' => "https://placekitten.com/400/250?image=" . rand(1, 16),
            'user_id' => rand(1, 10),
        ];
    }
}

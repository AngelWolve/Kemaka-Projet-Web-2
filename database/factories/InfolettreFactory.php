<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InfolettreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}

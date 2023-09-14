<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ForfaitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->words(3, true),
            'description' => $this->faker->text(500),
            'prix' => $this->faker->randomFloat(2, 30, 250),
        ];
    }
}

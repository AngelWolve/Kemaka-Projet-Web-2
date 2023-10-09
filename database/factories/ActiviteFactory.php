<?php

namespace Database\Factories;

use App\Models\User;
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
            'nom' => $this->faker->sentence(5),
            'description' => $this->faker->text(500),
            'image' => "https://placekitten.com/400/250?image=" . rand(1, 16),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}

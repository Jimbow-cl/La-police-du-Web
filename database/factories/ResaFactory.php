<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resa>
 */
class ResaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $age = rand(3, 100);
        return [
            'name'=> fake()->name(),
            'age'=> $age,
            'travel'=> fake()->randomElement(['France', 'Espagne'])
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PemilikTanahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'pekerjaan' => fake()->jobTitle(),
            'umur' => fake()->numberBetween(20, 60),
            'agama' => fake()-> randomElement(['Islam', 'Kristen', 'Hindu', 'Budha', 'Katolik', 'Konghucu']),
            'alamat' => fake()->address(),
        ];
    }
}

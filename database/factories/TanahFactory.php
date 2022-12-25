<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TanahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pemilik_tanah_id' => fake()->unique()->numberBetween(1, 10),
            'SHM' => fake()->randomNumber(3),
            'luas_tanah' => fake()->randomFloat(100, 300, 500),
            'alamat_tanah' => fake()->address,
            'batasan_utara' => fake()->address,
            'batasan_timur' => fake()->address,
            'batasan_selatan' => fake()->address,
            'batasan_barat' => fake()->address,
            'latitude' => fake()->latitude($min = -90, $max = 90),
            'longitude' => fake()->longitude($min = -180, $max = 180)
        ];
    }
}

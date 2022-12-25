<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' => fake()->unique()->nik(),
            'nama_lengkap' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'password' => fake()->password(),
            'alamat' => fake()->address(),
            'no_hp' => fake()->phoneNumber(),
            'jabatan' => fake()->randomElement(['lurah', 'staff']),
            'foto' => fake()->image(null, 360, 360, 'animals', true, true, 'cats', true, 'jpg')
        ];
    }

}

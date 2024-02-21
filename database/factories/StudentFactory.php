<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->postcode(),
            'nama' => fake()->name(),
            'kelas_id'=> random_int(1,4),
            'tgl_lahir'=> now(),
            'alamat'=> fake()->address(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gender>
 */
class GenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $generos = [
            'Aventura',
            'Suspense',
            'Ação',
            'Terror',
            'Ficção Científica',
            'Fantasia',
            'Drama',
            'Mistério',
            'Romance',
            'Thriller Psicológico',
            'Distopia',
            'Histórico',
            'Policial',
            'Humor',
            'Autoajuda'
        ];

        return [
            'id' => fake()->uuid(),
            'name' => fake()->randomElement($generos),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

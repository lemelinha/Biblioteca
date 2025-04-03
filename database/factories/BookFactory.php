<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = \App\Models\Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'title' => fake()->name(),
            'description' => fake()->sentence(),
            'author_id' => \App\Models\Author::query()->inRandomOrder()->value('id'),
            'price' => fake()->randomFloat(2, 0, 100),
            'cover_url' => 'https://picsum.photos/640/480?random=' . fake()->uuid(),
            'gender_id' => \App\Models\Gender::query()->inRandomOrder()->value('id'),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

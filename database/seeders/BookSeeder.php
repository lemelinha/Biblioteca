<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Author::all()->isEmpty()) {
            $this->call(AuthorSeeder::class);
        }
        if (Gender::all()->isEmpty()) {
            $this->call(GenderSeeder::class);
        }

        Book::factory(60)->create();
    }
}

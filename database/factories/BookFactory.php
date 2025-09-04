<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->words(4, true);
        return [
            'title'         => Str::title($title),
            'slug'        => Str::slug($title),
            'year_published'  => fake()->numberBetween(2020, 2025),
            'author_id'   => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'publisher_id' => Publisher::inRandomOrder()->first()->id,
        ];
    }
}

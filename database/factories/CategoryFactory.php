<?php

namespace Database\Factories;

use App\Models\MainCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mct_id' => MainCategory::factory(),
            'cat_libelle' => fake()->words(3, true),
            'cat_img' => fake()->imageUrl(640, 480, 'animals', true, 'cats')
        ];
    }
}

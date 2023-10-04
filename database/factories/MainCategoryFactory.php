<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MainCategory>
 */
class MainCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mct_libelle' => fake()->words(3, true),
            'mct_img' => fake()->imageUrl(640, 480, 'animals', true, 'cats')
        ];
    }
}

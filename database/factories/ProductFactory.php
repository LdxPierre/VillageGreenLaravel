<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prd_ref' => fake()->regexify('[P]{1}[0-9]{9}'),
            'sup_ref' => Supplier::first()->sup_ref,
            'cat_id' => Category::factory(),
            'prd_libelle' => fake()->words(3, true),
            'prd_desc' => fake()->paragraph(3),
            'prd_price_ht' => fake()->randomFloat(2),
            'prd_img' => fake()->imageUrl(640, 480, 'animals', true, 'cats'),
            'prd_actif' => fake()->boolean(),
        ];
    }
}

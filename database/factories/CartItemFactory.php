<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usr_id' => User::all()[rand(1, count(User::all('usr_id')) - 1)]->usr_id,
            'crt_quantity' => fake()->randomDigitNotZero(),
            'prd_ref' => Product::all()[rand(1, count(Product::all('prd_ref')) - 1)]->prd_ref,
        ];
    }
}

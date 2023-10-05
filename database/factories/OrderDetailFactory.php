<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ord_id' => Order::all()[rand(1, count(Order::all('ord_id')) - 1)]->ord_id,
            'prd_ref' => Product::all()[rand(1, count(Product::all('prd_ref')) - 1)]->prd_ref,
            'ord_quantity' => fake()->randomDigitNotZero(),
            'ord_price_ht' => fake()->randomFloat(2)
        ];
    }
}

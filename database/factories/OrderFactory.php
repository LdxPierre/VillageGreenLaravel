<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'ord_discount' => fake()->randomFloat(1, 0, 1),
            'ord_payement' => fake()->randomElement(['CB', 'cheque', 'virement']),
            'ord_status' => fake()->randomElement(['Attente', 'Expedie', 'Livree']),
            'ord_shipping' => fake()->date(),
            'ord_delivery' => fake()->date(),
            'ord_shp_firstname' => fake()->firstName(),
            'ord_shp_lastname' => fake()->lastName(),
            'ord_shp_country' => fake()->country(),
            'ord_shp_region' => fake()->state(),
            'ord_shp_zip_code' => fake()->postcode(),
            'ord_shp_city' => fake()->city(),
            'ord_shp_line' => fake()->streetAddress(),
            'ord_bil_firstname' => fake()->firstName(),
            'ord_bil_lastname' => fake()->lastName(),
            'ord_bil_country' => fake()->country(),
            'ord_bil_region' => fake()->state(),
            'ord_bil_zip_code' => fake()->postcode(),
            'ord_bil_city' => fake()->city(),
            'ord_bil_line' => fake()->streetAddress()
        ];
    }
}

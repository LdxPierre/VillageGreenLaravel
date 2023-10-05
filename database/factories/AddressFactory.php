<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
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
            'adr_libelle' => fake()->words(3, true),
            'adr_firstname' => fake()->firstName(),
            'adr_lastname' => fake()->lastName(),
            'adr_country' => fake()->country(),
            'adr_region' => fake()->state(),
            'adr_zip_code' => fake()->postcode(),
            'adr_city' => fake()->city(),
            'adr_line' => fake()->streetAddress()
        ];
    }
}

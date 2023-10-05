<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cus_ref' => fake()->regexify('[C]{1}[0-9]{9}'),
            'usr_id' => User::factory(),
            'cus_firstname' => fake()->firstName(),
            'cus_lastname' => fake()->lastName(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pro_ref' => fake()->regexify('[PR]{1}[0-9]{8}'),
            'usr_id' => User::factory(),
            'pro_name' => fake()->company(),
            'pro_contact' => fake()->firstName() . ' ' . fake()->lastName(),
        ];
    }
}

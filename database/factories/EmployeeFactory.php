<?php

namespace Database\Factories;

use App\Models\Departement;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usr_id' => User::factory(),
            'dep_code' => Departement::all()[rand(1, count(Departement::all('dep_code')) - 1)]->dep_code,
            'emp_firstname' => fake()->firstName(),
            'emp_lastname' => fake()->lastName(),
            'emp_poste' => fake()->word()
        ];
    }
}

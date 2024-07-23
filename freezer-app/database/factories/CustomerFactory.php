<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

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

        $faker = \Faker\Factory::create('pt_BR');

        return [
            'user_id' => User::all()->random()->id,
            'name' => $faker->name,
            'document' => $faker->cpf,
            'birthdate' => now()->subYears(25)->format('Y-m-d'),
            'email' => $faker->safeEmail,
            'mobile' => '(98) ' . $faker->cellphone,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'street' => fake()->streetName(),
            'house_number' => fake()->randomNumber(2),
            'city' => fake()->city(),
            'country_code' => fake()->countryCode(),
            'bkr_checked_at' => null,
            'contact_id' => fake()->randomFloat(0, 1, 150),
        ];
    }
}

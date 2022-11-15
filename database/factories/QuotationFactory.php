<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quotation>
 */
class QuotationFactory extends Factory
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
            'street' => fake()->streetName(),
            'postcode' => fake()->address(),
            'email' => fake()->email(),
            'tel-nummer' => fake()->phoneNumber(),
            'date' => fake()->dateTime(),
            'paid_at' => fake()->dateTime(),
            'company_id' => fake()->randomFloat(0,1,150),
        ];
    }
}

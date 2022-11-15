<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Finance>
 */
class FinanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => fake()->randomFloat(0, 1, 23),
            'amount' => fake()->randomFloat(0, 1, 999),
            'price_per_product' => fake()->randomFloat(2, 1, 999),
            'quotation_id' => fake()->randomFloat(0, 1, 150),
            'billing_type' => fake()->randomFloat(0, 1, 2),
        ];
    }
}

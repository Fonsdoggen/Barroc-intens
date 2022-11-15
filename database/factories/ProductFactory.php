<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_id = fake()->randomFloat(0, 1, 2);
        if ($category_id == 1){
            $img_path = 'img/machine-bit-light.png';
        }
        else{
            $img_path = 'img/machine-bit-deluxe.png';
        }
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(6),
            'image_path' => $img_path,
            'price' => fake()->randomFloat(2, 50, 999),
            'product_category_id' => $category_id
        ];

    }
}

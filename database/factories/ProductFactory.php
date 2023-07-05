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
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'product_code' => fake()->name(10, 20),
            'type' => fake()->realText(),
            'price' => 700000,
            'description' => fake()->realText(),
            'status' => 'Active',
            'user_id' => fake()->numberBetween(2, 11),

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\product;
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
            'category_id' => Category::factory()->create()->id,
            'image' => fake()->text(),
            'description' => fake()->text(),
            'weight' => fake()->randomDigit(),
            'length' => fake()->randomDigit(),
            'width' => fake()->randomDigit(),
            'height' => fake()->randomDigit(),
            'price' => fake()->randomDigit(),
            

        ];
    }
}

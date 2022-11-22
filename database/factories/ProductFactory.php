<?php

namespace Database\Factories;

use App\Models\Category;
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
        $category = Category::all()->random();
        return [
            'name' => fake()->name(),
            'price' => fake()->numberBetween(20, 2000),
            'img' => fake()->imageUrl(200,200),
            'category_id' => $category->id,
        ];
    }
}

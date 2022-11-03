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
        $random = fake()->numberBetween(1, 10);
        $tags = fake()->words($random);

        return [
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'tags' => implode(', ', $tags),
            'category_id' => Category::inRandomOrder()->first()->id,
            'image' => "images/$random.png"
        ];
    }
}

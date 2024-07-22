<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => $this->faker->word,
            'brand_id' => Brand::query()->inRandomOrder()->value('id'),
            'slug' => $this->faker->slug(),
            'thumbnail' => $this->faker->imageUrl(),
            'price' => $this->faker->randomNumber(),
            'description' => $this->faker->paragraph(),
        ];
    }
}

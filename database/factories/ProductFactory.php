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
            'name'=> $this->faker->word,
            'summary'=> $this->faker->word,
            'review'=> $this->faker->word,
            'rating'=> $this->faker->word,
            'img'=> $this->faker->word,
            'company_id'=> $this->faker->word
        ];
    }
}

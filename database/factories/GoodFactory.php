<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'category' => $this->faker->word(),
            'price' => rand(100,999999),
            'discount' => rand(0,99),
            'image' => $this->faker->imageUrl(),
        ];
    }
}

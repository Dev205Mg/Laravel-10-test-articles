<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6, true),
            'slug' => $this->faker->unique()->slug(),
            'content' => $this->faker->realTextBetween(160, 200),
            'author' => $this->faker->lastName(),
            'date_of_publication' => $this->faker->date(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->words(3, true);

        return [
            'slug' => strtolower(str_replace(' ', '-', $title)) . '-' . $this->faker->unique()->numberBetween(1, 1000),
            'name' => ucfirst($title),
            'published_at' => $this->faker->dateTime,
            'difficulty_level' => $this->faker->randomElement(['bajo', 'medio', 'alto']),
            'preparation_time' => $this->faker->numberBetween(15, 120),
            'ingredients' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'instructions' => $this->faker->paragraph,
            'img' => 'placeholder_view.png',
        ];
    }
}

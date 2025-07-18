<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecipePart>
 */
class RecipePartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => (string) Str::uuid(),
            'recipe_id' => Recipe::inRandomOrder()->first()?->id ?? Recipe::factory(),
            'ingredients' => $this->faker->paragraph(),
            'description' => $this->faker->paragraphs(2, true),
            'order' => $this->faker->numberBetween(1, 5),
        ];
    }
}

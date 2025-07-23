<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'id' => (string) Str::uuid(),
            'user_id' => User::inRandomOrder()->value('id'),
            'title' => $this->faker->sentence(3),
            'gif_path' => $this->faker->boolean(50) ? $this->faker->imageUrl() : null,
            'image' => [['url' => $this->faker->imageUrl(600, 400)]],
            'cover' => ['url' => $this->faker->imageUrl(800, 300)],
            'price' => $this->faker->randomFloat(2, 0, 20),
            'license' => $this->faker->randomElement(['public_domain', 'creative_commons']),
            'settings' => [
                'difficulty' => $this->faker->randomElement(['easy', 'medium', 'hard']),
                'duration_minutes' => $this->faker->numberBetween(10, 120),
            ],
        ];
    }
}

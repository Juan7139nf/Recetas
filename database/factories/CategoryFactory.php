<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->words(2, true);

        return [
            'parent_id' => null,
            'sort_order' => $this->faker->numberBetween(1, 10),
            'name' => ucfirst($name),
            'image' => ['url' => $this->faker->imageUrl(200, 200)],
            'slug' => Str::slug($name) . '-' . Str::random(4),
        ];
    }
}

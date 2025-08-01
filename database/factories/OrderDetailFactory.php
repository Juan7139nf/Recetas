<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
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
            'order_id' => Order::inRandomOrder()->value('id'),
            'recipe_id' => Recipe::inRandomOrder()->value('id'),
            'price' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}

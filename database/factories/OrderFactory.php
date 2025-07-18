<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'total' => $this->faker->randomFloat(2, 10, 500),
            'status' => $this->faker->randomElement(['pendiente', 'pagado', 'cancelado']),
            'ordered_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

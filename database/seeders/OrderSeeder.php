<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = Recipe::all();

        Order::factory(20)->create()->each(function ($order) use ($recipes) {

            $selectedRecipes = $recipes->random(rand(1, 3));

            $total = 0;

            foreach ($selectedRecipes as $recipe) {
                $orderDetail = OrderDetail::factory()->make([
                    'order_id' => $order->id,
                    'recipe_id' => $recipe->id,
                ]);

                $orderDetail->price = fake()->randomFloat(2, 10, 100);
                $orderDetail->save();

                $total += $orderDetail->price;
            }

            $order->update(['total' => $total]);
        });
    }
}

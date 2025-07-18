<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory(20)->create();

        $recipes = Recipe::all();

        foreach ($recipes as $recipe) {
            $randomProducts = $products->random(rand(1, 3))->pluck('id')->toArray();

            $recipe->products()->attach($randomProducts);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryRecipe;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        Recipe::all()->each(function ($recipe) use ($categories) {
            $randomCategoryIds = $categories->random(rand(1, 3))->pluck('id')->toArray();
            $recipe->categories()->syncWithoutDetaching($randomCategoryIds);
        });
    }
}

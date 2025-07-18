<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\RecipePart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipe::factory(5)->create()->each(function ($recipe) {
            // Para cada receta, crear entre 2 y 5 partes
            RecipePart::factory(rand(2, 5))->create([
                'recipe_id' => $recipe->id,
            ]);
        });
    }
}

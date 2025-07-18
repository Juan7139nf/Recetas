<?php

namespace Database\Seeders;

use App\Models\Rating;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::pluck('id')->toArray();
        $recipes = Recipe::pluck('id')->toArray();

        $combinaciones = collect();

        foreach ($users as $userId) {
            $recetasAleatorias = collect($recipes)->random(rand(2, 5));
            foreach ($recetasAleatorias as $recipeId) {
                $combinaciones->push([
                    'user_id' => $userId,
                    'recipe_id' => $recipeId,
                ]);
            }
        }

        foreach ($combinaciones as $combo) {
            Rating::factory()->create($combo);
        }
    }
}

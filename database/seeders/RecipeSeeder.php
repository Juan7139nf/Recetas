<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\RecipePart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipe1 = Recipe::create([
            'id' => 'a',
            'user_id' => 'hfJIGhd6d6aWQs0jd9hzU4q12jk2',
            'title' => 'Pay de limón',
            'gif_path' => null,
            'image' => [['url' => "site\/recipes\/images\/Q1OJz8lfD40Xn6ZACoMoyRQkmtKipbxc9j1xMLhI.webp"], ['url' => "site\/recipes\/images\/5SWilB0r7CLRhbHnNW1BlaJCl3LkkBwSZMQe2ZgJ.webp"], ['url' => "site\/recipes\/images\/yBlsjZFv84CTLoBXZhj0HNBkvesAzSywnTUVTTTJ.webp"]],
            'cover' => ['url' => "site\/recipes\/covers\/5sm8wGvAzdL7o416xkRd6iJrXtrCqMSAamygfxUC.webp"],
            'price' => null,
            'license' => 'public_domain',
            'settings' => [
                'difficulty' => null,
                'duration_minutes' => null,
            ]
        ]);

        $recipe1->parts()->createMany([
            [
                'display' => 'Masa',
                'ingredients' => "<ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>4 claras</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>5 cucharas de azucar</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>1 cucharilla de royal</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>½¼¾⅓⅔</li></ol>",
                'description' => "<p>Batir las claras a punto nieve, añadir el azúcar y por último el royal.</p><p>Cubrir con las claras la crema luego decorar por encima con un decorador de boquilla ancha. Llevar al horno caliente y dejar cocer hasta que el merengue este decorado.</p><p>Servir frio por tajadas.</p>",
                'order' => 0,
            ],
            [
                'display' => 'Relleno',
                'ingredients' => '500g de queso crema, 3 huevos, 150g de azúcar',
                'description' => 'Bate todos los ingredientes hasta obtener una mezcla homogénea.',
                'order' => 1,
            ],
            [
                'display' => 'Decorado',
                'ingredients' => 'Mezcla preparada',
                'description' => 'Vierte la mezcla sobre la base y hornea a 180°C por 45 minutos.',
                'order' => 2,
            ],
        ]);

        // Receta 2
        $recipe2 = Recipe::create([
            'id' => (string) Str::uuid(),
            'user_id' => 'hfJIGhd6d6aWQs0jd9hzU4q12jk2',
            'title' => 'Ensalada César',
            'gif_path' => null,
            'image' => [['url' => "site\/recipes\/images\/Q1OJz8lfD40Xn6ZACoMoyRQkmtKipbxc9j1xMLhI.webp"], ['url' => "site\/recipes\/images\/5SWilB0r7CLRhbHnNW1BlaJCl3LkkBwSZMQe2ZgJ.webp"], ['url' => "site\/recipes\/images\/yBlsjZFv84CTLoBXZhj0HNBkvesAzSywnTUVTTTJ.webp"]],
            'cover' => ['url' => "site\/recipes\/covers\/5sm8wGvAzdL7o416xkRd6iJrXtrCqMSAamygfxUC.webp"],
            'price' => 4.50,
            'license' => 'free',
            'settings' => [
                'difficulty' => 'easy',
                'duration_minutes' => 20,
            ]
        ]);

        $recipe2->parts()->createMany([
            [
                'display' => 'Preparar el aderezo',
                'ingredients' => 'Yema, mostaza, ajo, limón, aceite de oliva',
                'description' => 'Mezcla todos los ingredientes hasta emulsionar.',
                'order' => 1,
            ],
            [
                'display' => 'Ensamblar la ensalada',
                'ingredients' => 'Lechuga romana, crutones, queso parmesano',
                'description' => 'Agrega los ingredientes en un bol y vierte el aderezo.',
                'order' => 2,
            ],
        ]);

        // Receta 3
        $recipe3 = Recipe::create([
            'id' => (string) Str::uuid(),
            'user_id' => 'hfJIGhd6d6aWQs0jd9hzU4q12jk2',
            'title' => 'Panqueques Americanos',
            'gif_path' => null,
            'image' => [['url' => "site\/recipes\/images\/Q1OJz8lfD40Xn6ZACoMoyRQkmtKipbxc9j1xMLhI.webp"], ['url' => "site\/recipes\/images\/5SWilB0r7CLRhbHnNW1BlaJCl3LkkBwSZMQe2ZgJ.webp"], ['url' => "site\/recipes\/images\/yBlsjZFv84CTLoBXZhj0HNBkvesAzSywnTUVTTTJ.webp"]],
            'cover' => ['url' => "site\/recipes\/covers\/5sm8wGvAzdL7o416xkRd6iJrXtrCqMSAamygfxUC.webp"],
            'price' => 6.75,
            'license' => 'free',
            'settings' => [
                'difficulty' => 'easy',
                'duration_minutes' => 30,
            ]
        ]);

        $recipe3->parts()->createMany([
            [
                'display' => 'Mezclar ingredientes secos',
                'ingredients' => 'Harina, azúcar, polvo de hornear, sal',
                'description' => 'Mezclar los ingredientes secos en un bol.',
                'order' => 1,
            ],
            [
                'display' => 'Agregar líquidos',
                'ingredients' => 'Huevos, leche, mantequilla derretida',
                'description' => 'Incorporar los líquidos y batir hasta que no queden grumos.',
                'order' => 2,
            ],
            [
                'display' => 'Cocinar',
                'ingredients' => 'Mezcla lista',
                'description' => 'Verter porciones en una sartén caliente y dorar ambos lados.',
                'order' => 3,
            ],
        ]);

        Recipe::factory(5)->create()->each(function ($recipe) {
            // Para cada receta, crear entre 2 y 5 partes
            RecipePart::factory(rand(2, 5))->create([
                'recipe_id' => $recipe->id,
            ]);
        });
        //<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>4 claras</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>5 cucharas de azucar</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>1 cucharilla de royal</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>½¼¾⅓⅔</li></ol>
        //<p>Batir las claras a punto nieve, añadir el azúcar y por último el royal.</p><p>Cubrir con las claras la crema luego decorar por encima con un decorador de boquilla ancha. Llevar al horno caliente y dejar cocer hasta que el merengue este decorado.</p><p>Servir frio por tajadas.</p>
    }
}

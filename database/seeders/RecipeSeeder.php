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
            'image' => [['url' => "https://cocinalocal.cl/wp-content/uploads/2021/08/pie-de-limon.jpg"], ["url" => "https://recetinas.com/wp-content/uploads/2017/08/pay-de-limon.jpg"]],
            'cover' => ['url' => "https://recetinas.com/wp-content/uploads/2017/08/pay-de-limon.jpg"],
            'price' => null,
            'license' => 'cc0',
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
                'ingredients' => "<ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>4 claras</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>5 cucharas de azucar</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>1 cucharilla de royal</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>½¼¾⅓⅔</li></ol>",
                'description' => "<p>Batir las claras a punto nieve, añadir el azúcar y por último el royal.</p><p>Cubrir con las claras la crema luego decorar por encima con un decorador de boquilla ancha. Llevar al horno caliente y dejar cocer hasta que el merengue este decorado.</p><p>Servir frio por tajadas.</p>",
                'order' => 1,
            ],
            [
                'display' => 'Decorado',
                'ingredients' => "<ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>4 claras</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>5 cucharas de azucar</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>1 cucharilla de royal</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>½¼¾⅓⅔</li></ol>",
                'description' => "<p>Batir las claras a punto nieve, añadir el azúcar y por último el royal.</p><p>Cubrir con las claras la crema luego decorar por encima con un decorador de boquilla ancha. Llevar al horno caliente y dejar cocer hasta que el merengue este decorado.</p><p>Servir frio por tajadas.</p>",
                'order' => 2,
            ],
        ]);

        $imagenes = [
            "https://www.recetasnestle.com.pe/sites/default/files/styles/cropped_recipe_card_new/public/srh_recipes/9df2188d2dca6620686286963604e358.png.webp?itok=ecFNpU2I",
            "https://www.cocinacaserayfacil.net/wp-content/uploads/2020/04/Recetas-de-cocina-para-principiantes_2.jpg",
            "https://content-cocina.lecturas.com/medio/2025/05/19/paso_a_paso_para_hacer_pastel_de_salmon_resultado_final_00000000_250519030256_600x600.webp",
            "https://recetinas.com/wp-content/uploads/2017/08/pay-de-limon.jpg",
            "https://i.blogs.es/e90432/vasitos/450_1000.jpg",
            "https://hips.hearstapps.com/hmg-prod/images/fruit-tart-index-65ef54d972bb1.jpg?crop=0.505xw:1.00xh;0.495xw,0&resize=640:*",
            "https://i0.wp.com/recetasparapostres.com/wp-content/uploads/2023/09/20230919_180730-scaled.jpg?resize=360%2C540",
            "https://recetinas.com/wp-content/uploads/2017/08/pay-de-limon.jpg",
            "https://cocinalocal.cl/wp-content/uploads/2021/08/pie-de-limon.jpg",
            "https://recetinas.com/wp-content/uploads/2017/08/pay-de-limon.jpg",
            "https://recetinas.com/wp-content/uploads/2017/08/pay-de-limon.jpg",
            "https://content-cocina.lecturas.com/medio/2025/05/19/paso_a_paso_para_hacer_pastel_de_salmon_resultado_final_00000000_250519030256_600x600.webp",
            "https://recetinas.com/wp-content/uploads/2017/08/pay-de-limon.jpg",
            "https://i.blogs.es/e90432/vasitos/450_1000.jpg",
            "https://hips.hearstapps.com/hmg-prod/images/fruit-tart-index-65ef54d972bb1.jpg?crop=0.505xw:1.00xh;0.495xw,0&resize=640:*",
            "https://www.cocinacaserayfacil.net/wp-content/uploads/2020/04/Recetas-de-cocina-para-principiantes_2.jpg",
        ];

        $user_id = 'hfJIGhd6d6aWQs0jd9hzU4q12jk2';

        $recetas = [
            ['id' => 'r1', 'title' => 'Tarta de chocolate', 'partes' => 1],
            ['id' => 'r2', 'title' => 'Arroz con leche', 'partes' => 2],
            ['id' => 'r3', 'title' => 'Tacos al pastor', 'partes' => 1],
            ['id' => 'r4', 'title' => 'Empanadas de queso', 'partes' => 2],
            ['id' => 'r5', 'title' => 'Ensalada César', 'partes' => 1],
            ['id' => 'r6', 'title' => 'Pan casero', 'partes' => 1],
            ['id' => 'r7', 'title' => 'Lasaña', 'partes' => 2],
            ['id' => 'r8', 'title' => 'Bizcocho de zanahoria', 'partes' => 1],
            ['id' => 'r9', 'title' => 'Pollo al horno', 'partes' => 1],
            ['id' => 'r10', 'title' => 'Mousse de maracuyá', 'partes' => 1],
            ['id' => 'r11', 'title' => 'Pizza casera', 'partes' => 2],
            ['id' => 'r12', 'title' => 'Crema de calabaza', 'partes' => 1],
            ['id' => 'r13', 'title' => 'Ceviche', 'partes' => 1],
            ['id' => 'r14', 'title' => 'Pastel de papa', 'partes' => 2],
            ['id' => 'r15', 'title' => 'Pasta Alfredo', 'partes' => 1],
        ];

        foreach ($recetas as $i => $receta) {
            $imagenUrl = $imagenes[$i];

            $recipe = Recipe::create([
                'id' => $receta['id'],
                'user_id' => $user_id,
                'title' => $receta['title'],
                'gif_path' => null,
                'image' => [['url' => $imagenUrl]],
                'cover' => ['url' => $imagenUrl],
                'price' => null,
                'license' => 'cc0',
                'settings' => [
                    'difficulty' => 'fácil',
                    'duration_minutes' => rand(10, 60),
                ]
            ]);

            $partes = [];

            for ($j = 0; $j < $receta['partes']; $j++) {
                $partes[] = [
                    'display' => 'Parte ' . ($j + 1),
                    'ingredients' => "<ol><li>Ingrediente A</li><li>Ingrediente B</li><li>Ingrediente C</li></ol>",
                    'description' => "<p>Paso a paso para la parte " . ($j + 1) . ".</p>",
                    'order' => $j
                ];
            }

            $recipe->parts()->createMany($partes);
        }
        
        Recipe::factory(55)->create()->each(function ($recipe) {
            // Para cada receta, crear entre 2 y 5 partes
            RecipePart::factory(rand(2, 5))->create([
                'recipe_id' => $recipe->id,
            ]);
        });
        //<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>4 claras</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>5 cucharas de azucar</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>1 cucharilla de royal</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>½¼¾⅓⅔</li></ol>
        //<p>Batir las claras a punto nieve, añadir el azúcar y por último el royal.</p><p>Cubrir con las claras la crema luego decorar por encima con un decorador de boquilla ancha. Llevar al horno caliente y dejar cocer hasta que el merengue este decorado.</p><p>Servir frio por tajadas.</p>
    }
}

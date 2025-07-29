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
        static $imagenes = [
            "https://www.recetasnestle.com.pe/sites/default/files/styles/cropped_recipe_card_new/public/srh_recipes/9df2188d2dca6620686286963604e358.png.webp?itok=ecFNpU2I",
            "https://www.cocinacaserayfacil.net/wp-content/uploads/2020/04/Recetas-de-cocina-para-principiantes_2.jpg",
            "https://content-cocina.lecturas.com/medio/2025/05/19/paso_a_paso_para_hacer_pastel_de_salmon_resultado_final_00000000_250519030256_600x600.webp",
            "https://recetinas.com/wp-content/uploads/2017/08/pay-de-limon.jpg",
            "https://i.blogs.es/e90432/vasitos/450_1000.jpg",
            "https://hips.hearstapps.com/hmg-prod/images/fruit-tart-index-65ef54d972bb1.jpg?crop=0.505xw:1.00xh;0.495xw,0&resize=640:*",
            "https://i0.wp.com/recetasparapostres.com/wp-content/uploads/2023/09/20230919_180730-scaled.jpg?resize=360%2C540",
            "https://cocinalocal.cl/wp-content/uploads/2021/08/pie-de-limon.jpg",
        ];

        $name = $this->faker->unique()->words(2, true);

        return [
            'parent_id' => null,
            'sort_order' => $this->faker->numberBetween(1, 10),
            'name' => ucfirst($name),
            'image' => ['url' => $imagenes[array_rand($imagenes)]],
            'slug' => Str::slug($name) . '-' . Str::random(4),
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 10 categorías principales
        $parents = Category::factory(10)->create();

        // Luego crear subcategorías, asignando un parent aleatorio a cada una
        Category::factory(10)->create()->each(function ($child) use ($parents) {
            $child->parent_id = $parents->random()->id;
            $child->save();
        });
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            RecipeSeeder::class,
            CategoryRecipeSeeder::class,
            RatingSeeder::class,
            OrderSeeder::class,
            RolePermissionSeeder::class,
            ProductRecipeSeeder::class,
        ]);
    }
}

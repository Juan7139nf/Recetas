<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::factory()->create([
            'name' => 'admin',
            'display_name' => 'Administrador',
        ]);

        $userRole = Role::factory()->create([
            'name' => 'user',
            'display_name' => 'Usuario',
        ]);

        $adminUser = User::find('hfJIGhd6d6aWQs0jd9hzU4q12jk2');

        $adminUser->roles()->attach($adminRole->id);
        /*
        $permissions = Permission::factory()->count(5)->create([
        ]);

        $adminRole->permissions()->sync($permissions->pluck('id')->toArray());

        $userRole->permissions()->sync($permissions->take(2)->pluck('id')->toArray());

        $users = User::take(2)->get();

        if ($users->count() >= 2) {
            $users[0]->roles()->sync([$adminRole->id]);
            $users[1]->roles()->sync([$userRole->id]); 
        }*/
    }
}

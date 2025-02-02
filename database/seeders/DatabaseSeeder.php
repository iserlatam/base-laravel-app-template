<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        // Base role structure for blog CRM
        // $roles = [
        //     'admin',
        //     'editor',
        //     'author',
        //     'contributor',
        //     'subscriber',
        // ];

        // foreach ($roles as $role) {
        //     Role::create(['name' => $role]);
        // }

        // Assign roles to user
        // $user->assignRole('admin');
    }
}

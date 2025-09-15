<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Edgar Avila Gonzalez',
            'email' => 'avilaedgar2001@example.com',
            'password' => bcrypt('12345678'), // password
        ]);

        Category::factory(100)->create();
    }
}

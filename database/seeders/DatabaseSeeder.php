<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Add users data, faked through factories
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Add job data, staticly defined in the seeders below
        $this->call([
            CategoriesTableSeeder::class,
            JobTypesTableSeeder::class,
            JobsTableSeeder::class,
        ]);

       
    }

}


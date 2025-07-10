<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'IT & Software'],
            ['name' => 'Healthcare & Medical'],
            ['name' => 'Education & Training'],
            ['name' => 'Finance & Accounting'],
            ['name' => 'Sales & Marketing'],
        ];

        Category::insert($categories);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobType;

class JobTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        $jobTypes = [
            ['name' => 'Full-time'],
            ['name' => 'Part-time'],
            ['name' => 'Internship'],
            ['name' => 'Remote'],
            ['name' => 'Freelance'],
        ];

        JobType::insert($jobTypes);
    }
}

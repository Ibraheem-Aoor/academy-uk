<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ConsultingService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Admin::factory(10)->create();
        \App\Models\HomePageTestmonial::factory(10)->create();
        $this->call([
            PageSeeder::class,
            TeamSeeder::class,
            UniverstySeeder::class,
            TrainingProgramCategorySeeder::class,
            ConsultingServiceSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

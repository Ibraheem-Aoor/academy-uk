<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cityies_table = file_get_contents(base_path('sql/cities.sql'));
        DB::unprepared($cityies_table);
        $city_translations_table = file_get_contents(base_path('sql/city_translations (1).sql'));
        DB::unprepared($city_translations_table);
    }
}

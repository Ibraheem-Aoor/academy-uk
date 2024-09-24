<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries_table = file_get_contents(base_path('sql/countries.sql'));
        DB::unprepared($countries_table);
        $country_translations_table = file_get_contents(base_path('sql/country_translations.sql'));
        DB::unprepared($country_translations_table);
    }
}

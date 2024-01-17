<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->delete();

        DB::table('countries')->insert(array (
            0 =>
            array (
                'id' => 179,
                'country_code' => 'RO',
                'name_hu' => 'Románia',
                'name_ro' => 'România',
                'name_en' => 'Romania',
            )
        ));
    }
}

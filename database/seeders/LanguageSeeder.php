<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            'code' => 'ro',
            'is_main' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('languages')->insert([
            'code' => 'hu',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('languages')->insert([
            'code' => 'en',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UserSeeder::class);
        DB::table('languages')->truncate();
        $this->call([LanguageSeeder::class,]);

        DB::table('products')->truncate();
        $this->call(ProductsSeeder::class);

        DB::table('roles')->truncate();
        $this->call(RolesTableSeeder::class);
        DB::table('media')->truncate();
        // only if you have the images from import
        // $this->call(MediaTableSeeder::class);
        DB::table('cities')->truncate();
        $this->call(CitiesTableSeeder::class);
        DB::table('counties')->truncate();
        $this->call(CountiesTableSeeder::class);
        DB::table('countries')->truncate();
        $this->call(CountriesTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

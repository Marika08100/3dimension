<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Roobi',
            'email' => '3d@teszt.com',
            'password' => Hash::make('teszt999'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Robi',
            'email' => 'public@public.com',
            'password' => Hash::make('public'),
            'role_id' => 2,
            'email_verified_at'=>Carbon::now()
        ]);

    }
}

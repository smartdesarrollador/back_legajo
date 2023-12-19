<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => "Jacky",
            'email' => "jacky@testcorreo.com",
            'email_verified_at' => null,
            'password' => Hash::make('admin123'),
            'remember_token' => null,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => "Jorge",
            'email' => "jorge@testcorreo.com",
            'email_verified_at' => null,
            'password' => Hash::make('admin2023'),
            'remember_token' => null,
        ]);
    
    DB::table('users')->insert([
            'id' => 3,
            'name' => "Tomas",
            'email' => "tomas@testcorreo.com",
            'email_verified_at' => null,
            'password' => Hash::make('peru123'),
            'remember_token' => null,
        ]);
    }
}

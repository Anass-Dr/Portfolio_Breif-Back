<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "full_name" => "Anass Drissi",
            "email" => "anas@gmail.com",
            "password" => "1",
            "proficient" => "Full Stack Developer",
            "birth_year" => 2000,
            "city" => "Settat",
            "country" => "Morocco"
        ]);
    }
}

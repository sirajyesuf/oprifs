<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Volunteer;
use Illuminate\Support\Facades\DB;

class VolunteerSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table("volunters")->insert([
            
            'name' => "john doe",
            'email' => "john@gmail.com",
            'message' => "message ..........."

        ]);
    }
}

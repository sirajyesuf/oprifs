<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolunteerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('volunters')->insert([

            'name' => 'john doe',
            'email' => 'john@gmail.com',
            'message' => 'message ...........',

        ]);
    }
}

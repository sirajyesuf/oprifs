<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceCategorySeed extends Seeder
{
    
    public function run(): void
    {
        $categories = [

            [
                'title' => 'policy'
            ],
            [
                'title' => 'human resource'
            ],
            [
                'title' => 'strategy'
            ]

        ];

        DB::table('resource_category')
        ->insert($categories);
        
    }
}

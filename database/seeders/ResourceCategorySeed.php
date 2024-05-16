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
                'title' => 'human resource'
            ],
            [
                'title' => 'strategy plan'
            ],
            [
                'title' => 'monitoring and evaluation'
            ],
            [
                'title' => 'financial plan'
            ],
            [
                'title' => 'reports'
            ],
            [
                'title' => 'gender advocacy manual'
            ]

        ];

        DB::table('resource_category')->truncate();

        DB::table('resource_category')
        ->insert($categories);
        
    }
}

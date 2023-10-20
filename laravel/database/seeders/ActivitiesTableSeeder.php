<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Make sure this line is included
class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('activities')->insert([
            ['name' => 'Activity 1', 'description' => 'Description for Activity 1'],
            ['name' => 'Activity 2', 'description' => 'Description for Activity 2'],
            // Add more activities as needed
        ]);
    }
    
}

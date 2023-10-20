<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\ActivitiesTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ActivitiesTableSeeder::class);
    }
}


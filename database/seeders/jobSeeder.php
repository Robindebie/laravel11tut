<?php

namespace Database\Seeders;

use App\Models\job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class jobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        job::factory(200)->create(); 
    }
}

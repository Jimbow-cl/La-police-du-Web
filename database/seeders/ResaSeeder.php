<?php

namespace Database\Seeders;

use App\Models\Resa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resa::factory()->count(20)->create();   
    }
}

<?php

namespace Database\Seeders;

use App\Models\Citas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Citas::factory(100)
        ->count(300)
        ->create();
    }
}

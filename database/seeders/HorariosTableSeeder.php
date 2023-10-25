<?php

namespace Database\Seeders;

use App\Models\Horarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<7;$i++){
            Horarios::create([
                'dia' => $i,
                'activo' => ($i==0),
                'manana_inicio' => ($i==0 ? '08:00:00' : '07:00:00'),
                'manana_fin' => ($i==0 ? '10:00:00' : '07:00:00'),
                'tarde_inicio' => ($i==0 ? '14:00:00' : '13:00:00'),
                'tarde_fin' => ($i==0 ? '17:00:00' : '16:00:00'),
                'medico_id' => 2,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidades = [
            'Oftalmología',
            'Pediatría',
            'Neurología',
            'Cardiología',
            'Dermatología',
            'Ginecología',
            'Otorrinolaringología',
            'Traumatología',
            'Urología',
            'Endocrinología',
            'Gastroenterología',
            'Hematología',
            'Nefrología',
            'Neumología',
            'Oncología',
            'Reumatología',
            'Toxicología',
        ];
        foreach ($especialidades as $especialidadNombre) {
            $especialidad = Especialidad::create([
                'nombre' => $especialidadNombre,
            ]);
            $especialidad->users()->saveMany(
                User::factory(4)->state(['rol' => 'medico'])->make()
            );
        }
        User::find(2)->especialidades()->save($especialidad);
    }
}

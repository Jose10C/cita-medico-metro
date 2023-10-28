<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = $this->faker->dateTimeBetween('-1 years', 'now');
        $fecha_cita = $date->format('Y-m-d');
        $hora_cita = $date->format('H:i:s');
        $tipo = ['Consulta', 'Examen', 'Operacion'];
        $medico_id = User::medicos()->pluck('id');
        $paciente_id = User::pacientes()->pluck('id');
        $estado = ['Atendida', 'Cancelada'];
        return [
            'fecha_cita' => $fecha_cita,
            'hora_cita' => $hora_cita,
            'tipo' => $this->faker->randomElement($tipo),
            'sintomas' => $this->faker->sentence(5),
            'paciente_id' => $this->faker->randomElement($paciente_id),
            'medico_id' => $this->faker->randomElement($medico_id),
            'especialidad_id' => $this->faker->numberBetween(1,16),
            'estado' => $this->faker->randomElement($estado),
        ];
    }
}

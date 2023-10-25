<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_cita',
        'hora_cita',
        'tipo',
        'sintomas',
        'paciente_id',
        'medico_id',
        'especialidad_id',
    ];
}

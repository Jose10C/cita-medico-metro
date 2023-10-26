<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function medico()
    {
        return $this->belongsTo(User::class);
    }

    public function paciente()
    {
        return $this->belongsTo(User::class);
    }

    public function getScheduledTime12Attribute()
    {
        return (new Carbon($this->hora_cita))->format('g:i A');
    }

    public function cancelacion()
    {
        return $this->hasOne(CitaCancelada::class);
    }
}

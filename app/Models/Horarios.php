<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;

    protected $table = 'horarios';

    protected $fillable = [
        'dia',
        'activo',
        'manana_inicio',
        'manana_fin',
        'tarde_inicio',
        'tarde_fin',
        'medico_id'
    ];
}

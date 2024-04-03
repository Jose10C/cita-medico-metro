<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticia';

    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'contenido',
        'imagen',
        'estado',
        'fecha_publicacion',
        'usuario_id'
    ];
}

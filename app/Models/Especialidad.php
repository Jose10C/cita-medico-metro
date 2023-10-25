<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $table ='Especialidad';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
    ];

    public function users()
    {
        //return $this->belongsToMany(User::class);
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}

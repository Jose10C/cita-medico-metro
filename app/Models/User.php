<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dni',
        'direccion',
        'telefono',
        'rol',
        'lastname',
        'biografia',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'pivot',
    ];

    public function especialidades()
    {
        //return $this->belongsToMany(Especialidad::class);
        return $this->belongsToMany(Especialidad::class)->withTimestamps();
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function scopePacientes($query)
    {
        return $query->where('rol', 'paciente');
    }

    public function scopeMedicos($query)
    {
        return $query->where('rol', 'medico');
    }

    public function isCitaMedicos()
    {
        return $this->hasMany(Citas::class, 'medico_id');
    }

    public function acceptedCitas()
    {
        return $this->isCitaMedicos()->where('estado', 'Atendida');
    }
    
    public function canceledCitas()
    {
        return $this->isCitaMedicos()->where('estado', 'Cancelada');
    }

    public function isCitaPacientes()
    {
        return $this->hasMany(Citas::class, 'paciente_id');
    }
}

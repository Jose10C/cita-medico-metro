<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    public function medicos(Especialidad $especialidad)
    {
        return $especialidad->users()->get([
            'users.id',
            'users.name',
        ]);   
    }
}

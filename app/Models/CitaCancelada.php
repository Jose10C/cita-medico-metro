<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaCancelada extends Model
{
    use HasFactory;

    public function cancelado_por()
    {
        return $this->belongsTo(User::class);
    }
}

<?php namespace App\Interfaces;

use Carbon\Carbon;

interface HorarioServiceInterface
{
    public function isAvailableInterval($date, $medicoId, Carbon $inicio);
    public function getAvailableIntervals($date, $medicoId);
}
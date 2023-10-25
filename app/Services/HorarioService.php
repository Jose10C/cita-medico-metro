<?php namespace App\Services;

use App\Interfaces\HorarioServiceInterface;
use App\Models\Citas;
use App\Models\Horarios;
use Carbon\Carbon;

class HorarioService implements HorarioServiceInterface
{
    private function getDayFromDate($fecha)
    {
        $fechaCarbon = new Carbon($fecha);
        $i = $fechaCarbon->dayOfWeek;
        $dia = ($i==0 ? 6 : $i-1);
        return $dia;
    }

    public function isAvailableInterval($date, $medicoId, Carbon $inicio)
    {
        $exists = Citas::where('medico_id',$medicoId)
            ->where('fecha_cita',$date)
            ->where('hora_cita', $inicio->format('H:i:s'))
            ->exists();

        return !$exists;
    }

    public function getAvailableIntervals($date, $medicoId)
    {
        $horarios = Horarios::where('activo',true)
        ->where('dia',$this->getDayFromDate($date))
        ->where('medico_id',$medicoId)
        ->first([
            'manana_inicio',
            'manana_fin',
            'tarde_inicio',
            'tarde_fin',
        ]);

        if(!$horarios){
            return [];
        }

        $mananaIntervalos = $this->getIntervalos($horarios->manana_inicio, $horarios->manana_fin, $medicoId, $date);
        $tardeIntervalos = $this->getIntervalos($horarios->tarde_inicio, $horarios->tarde_fin, $medicoId, $date);

        $data = [];

        $data['manana'] = $mananaIntervalos;
        $data['tarde'] = $tardeIntervalos;

        return $data;
    }

    private function getIntervalos($inicio, $fin, $medicoId, $date)
    {
        $inicio = new Carbon($inicio);
        $fin = new Carbon($fin);

        $intervalos = [];

        while($inicio < $fin){
            $intervalo = [];
            $intervalo['inicio'] = $inicio->format('g:i A');

            $available = $this->isAvailableInterval($date, $medicoId, $inicio);

            $inicio->addMinutes(30);
            $intervalo['fin'] = $fin->format('g:i A');

            if($available){
                $intervalos[] = $intervalo;
            }

        }

        return $intervalos;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\HorarioServiceInterface;
use App\Models\Horarios;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function horas(Request $request, HorarioServiceInterface $horarioServiceInterface)
    {
        $rules = [
            'date' => 'required|date_format:"Y-m-d"',
            'medico_id' => 'required|exists:users,id',
        ];
        $this->validate($request, $rules);
        
        $fecha = $request->input('date');
        /* $fechaCarbon = new Carbon($fecha);
        $i = $fechaCarbon->dayOfWeek;
        $dia = ($i==0 ? 6 : $i-1); */
        $medicoId = $request->input('medico_id');

        /* $horarios = Horarios::where('activo',true)
        ->where('dia',$dia)
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

        $mananaIntervalos = $this->getIntervalos($horarios->manana_inicio, $horarios->manana_fin);
        $tardeIntervalos = $this->getIntervalos($horarios->tarde_inicio, $horarios->tarde_fin);

        $data = [];

        $data['manana'] = $mananaIntervalos;
        $data['tarde'] = $tardeIntervalos;

        return $data; */

        return $horarioServiceInterface->getAvailableIntervals($fecha, $medicoId);
    }

    /* private function getIntervalos($inicio, $fin)
    {
        $inicio = new Carbon($inicio);
        $fin = new Carbon($fin);

        $intervalos = [];

        while($inicio < $fin){
            $intervalo = [];
            $intervalo['inicio'] = $inicio->format('g:i A');
            $inicio->addMinutes(30);
            $intervalo['fin'] = $fin->format('g:i A');
            $intervalos[] = $intervalo;
        }

        return $intervalos;
    } */
}

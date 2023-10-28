<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Horarios;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HorarioController extends Controller
{
    public $dias = [
        'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'
    ];

    public function edit()
    {

        $horarios = Horarios::where('medico_id', auth()->id())->get();

        if(count($horarios) > 0) {
            $horarios->map( function($horarios) {
                $horarios->manana_inicio = (new Carbon($horarios->manana_inicio))->format('g:i A');
                $horarios->manana_fin = (new Carbon($horarios->manana_fin))->format('g:i A');
                $horarios->tarde_inicio = (new Carbon($horarios->tarde_inicio))->format('g:i A');
                $horarios->tarde_fin = (new Carbon($horarios->tarde_fin))->format('g:i A');
            });
        } else {
            $horarios = collect();
            for ($i=0; $i<7; $i++){
                $horarios->push(new Horarios());
            }
        }

        $dias = $this->dias;

        return view('home.horario', ['dias' => $dias, 'horarios' => $horarios]);
    }

    public function store(Request $request)
    {
        $activo = $request->input('activo') ?: [];
        $manana_inicio = $request->input('manana_inicio');
        $manana_fin = $request->input('manana_fin');
        $tarde_inicio = $request->input('tarde_inicio');
        $tarde_fin = $request->input('tarde_fin');

        for($i=0; $i<7; $i++){
            Horarios::updateOrCreate(
                [
                    'dia' => $i,
                    'medico_id' => auth()->id()
                ],
                [
                    'activo' => in_array($i, $activo),
                    'manana_inicio' => $manana_inicio[$i],
                    'manana_fin' => $manana_fin[$i],
                    'tarde_inicio' => $tarde_inicio[$i],
                    'tarde_fin' => $tarde_fin[$i],
                ]
            );

        }
        return back()->with('message', 'El horario se ha actualizado correctamente.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Citas;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function citasLine()
    {

        $cantidadMeses = Citas::select(
                DB::raw('MONTH(created_at) as mes'),
                DB::raw('COUNT(1) as cantidad'))
                ->groupBy('mes')
                ->get()
                ->toArray();
        $cantidad = array_fill(0,12,0);
        foreach($cantidadMeses as $cantidadMes){
            $index = $cantidadMes['mes']-1;
            $cantidad[$index] = $cantidadMes['cantidad'];
        }
        
        return view('charts.citas', compact('cantidad'));
    }

    public function medicosColumn()
    {
        $now = Carbon::now();
        $end = $now->format('Y-m-d');
        $start = $now->subYear()->format('Y-m-d');
        return view('charts.medicos', compact('end', 'start'));
    }

    public function medicosJson(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        $medicos = User::medicos()
        ->select('name')
        ->withCount(['acceptedCitas' => function($query) use ($start, $end) {
            $query->whereBetween('fecha_cita', [$start, $end]);
        }, 'canceledCitas' => function($query) use ($start, $end) {
            $query->whereBetween('fecha_cita', [$start, $end]);
        }])
        ->orderBy('accepted_citas_count', 'desc')
        ->take(10)
        ->get();
        
        $data = [];
        $data['categories'] = $medicos->pluck('name');
        $series = [];
        $series1['name'] = 'Citas Atendidas';
        $series1['data'] = $medicos->pluck('accepted_citas_count');
        $series2['name'] = 'Citas Canceladas';
        $series2['data'] = $medicos->pluck('canceled_citas_count');

        $series[] = $series1;
        $series[] = $series2;

        $data['series'] = $series;

        return $data;
    }
}

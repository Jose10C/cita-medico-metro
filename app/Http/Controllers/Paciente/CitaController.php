<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Interfaces\HorarioServiceInterface;
use App\Models\CitaCancelada;
use App\Models\Citas;
use App\Models\Especialidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CitaController extends Controller
{
    public function index()
    {
        $citasConfirmadas = Citas::all()
        ->where('estado','Confirmada')
        ->where('paciente_id',auth()->id());
        
        $citasPendientes = Citas::all()
        ->where('estado','Reservada')
        ->where('paciente_id',auth()->id());

        $citasHistorial = Citas::all()
        ->whereIn('estado',['Atendida','Cancelada'])
        ->where('paciente_id',auth()->id());

        return view('cita.index', ['citasConfirmadas' => $citasConfirmadas, 'citasPendientes' => $citasPendientes, 'citasHistorial' => $citasHistorial]);
    }

    public function create(HorarioServiceInterface $horarioServiceInterface)
    {
        $especialidades = Especialidad::all();

        $especialId = old('especialidad_id');
        if($especialId){
            $especialidad = Especialidad::find($especialId);
            $old_medicos = $especialidad->users;
        } else {
            $old_medicos = collect();
        }

        $date = old('fecha_cita');
        $medicoId = old('medico_id');
        if($date && $medicoId){
            $intervalos = $horarioServiceInterface->getAvailableIntervals($date, $medicoId);
        } else {
            $intervalos = null;
        }

        return view('cita.create',['especialidades' => $especialidades, 'old_medicos' => $old_medicos, 'intervalos' => $intervalos]);
    }

    public function store(Request $request, HorarioServiceInterface $horarioServiceInterface)
    {
        $rules = [
            'hora_cita' => 'required',
            'tipo' => 'required',
            'sintomas' => 'required',
            'medico_id' => 'exists:users,id',
            'especialidad_id' => 'exists:especialidad,id',
        ];
        $messages = [
            'hora_cita.required' => 'Seleccione una hora válida para su cita.',
            'tipo.required' => 'Seleccione el tipo de consulta que realizará.',
            'sintomas.required' => 'Ingrese los síntomas que presenta.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->after(function ($validator) use ($request, $horarioServiceInterface){

            $date = $request->input('fecha_cita');
            $medicoId = $request->input('medico_id');
            $hora_cita = ($request->input('hora_cita'));

            if($date && $medicoId && $hora_cita){
                $inicio = new Carbon($hora_cita);
            } else {
                return;
            }

            if(!$horarioServiceInterface->isAvailableInterval($date, $medicoId, $inicio)){
                $validator->errors()->add('available_time', 'La hora seleccionada ya se encuentra reservada por otro paciente.');
            }
            /* $date = $this->fecha_cita;
            $medicoId = $this->medico_id;
            $hora_cita = new Carbon($this->hora_cita);

            if($date && $medicoId && $hora_cita){
                if(!$horarioServiceInterface->isAvailableInterval($date, $medicoId, $hora_cita)){
                    $validator->errors()->add('hora_cita', 'La hora seleccionada ya se encuentra reservada.');
                }
            } */
        });

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        $data = $request->only([
            'fecha_cita',
            'hora_cita',
            'tipo',
            'sintomas',
            'medico_id',
            'especialidad_id',
        ]);
        $data['paciente_id'] = auth()->id();

        $carbonTime = Carbon::createFromFormat('g:i A', $data['hora_cita']);
        $data['hora_cita'] = $carbonTime->format('H:i:s');

        Citas::create($data);

        return back()->with('message', 'Su cita se ha registrado correctamente.');
    }

    public function cancel(Citas $cita, Request $request)
    {
        if($request->has('motivo')){
            $cancelacion = new CitaCancelada();
            $cancelacion->motivo = $request->input('motivo');
            $cancelacion->cancelado_por_id = auth()->id();
            $cita->cancelacion()->save($cancelacion);
        }
        $cita->estado = 'Cancelada';
        $cita->save();

        return redirect('mis-citas')->with('message', 'Su cita se ha cancelado correctamente.');
    }

    public function confirm(Citas $cita)
    {
        if($cita->estado == 'Confirmada'){
            return view('cita.cancelar-cita', ['cita' => $cita]);
        }

        return redirect('mis-citas');
    }

    public function show(Citas $cita)
    {
        return view('cita.show', ['cita' => $cita]);
    }
}

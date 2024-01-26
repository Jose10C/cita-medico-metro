<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Interfaces\HorarioServiceInterface;
use App\Models\CitaCancelada;
use App\Models\Citas;
use App\Models\Especialidad;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View as ViewView;

class CitaController extends Controller
{
    public function index()
    {
        $role = auth()->user()->rol;

        if ($role == 'admin') {
            $citasConfirmadas = Citas::where('estado', 'Confirmada')->latest()->paginate(10);

            $citasPendientes = Citas::where('estado', 'Reservada')->latest()->paginate(10);

            $citasHistorial = Citas::whereIn('estado', ['Atendida', 'Cancelada'])->latest()->paginate(10);
        } elseif ($role == 'medico') {
            $citasConfirmadas = Citas::where('estado', 'Confirmada')
                ->where('medico_id', auth()->id())->latest()->paginate(10);

            $citasPendientes = Citas::where('estado', 'Reservada')
                ->where('medico_id', auth()->id())->latest()->paginate(10);

            $citasHistorial = Citas::whereIn('estado', ['Atendida', 'Cancelada'])
                ->where('medico_id', auth()->id())->latest()->paginate(10);
        } elseif ($role == 'paciente') {
            $citasConfirmadas = Citas::where('estado', 'Confirmada')
                ->where('paciente_id', auth()->id())->latest()->paginate(10);

            $citasPendientes = Citas::where('estado', 'Reservada')
                ->where('paciente_id', auth()->id())->latest()->paginate(10);

            $citasHistorial = Citas::whereIn('estado', ['Atendida', 'Cancelada'])
                ->where('paciente_id', auth()->id())->latest()->paginate(10);
        }

        return view('cita.index', ['citasConfirmadas' => $citasConfirmadas, 'citasPendientes' => $citasPendientes, 'citasHistorial' => $citasHistorial, 'role' => $role]);
    }

    public function create(HorarioServiceInterface $horarioServiceInterface)
    {
        $especialidades = Especialidad::all();

        $especialId = old('especialidad_id');
        if ($especialId) {
            $especialidad = Especialidad::find($especialId);
            $old_medicos = $especialidad->users;
        } else {
            $old_medicos = collect();
        }

        $date = old('fecha_cita');
        $medicoId = old('medico_id');
        if ($date && $medicoId) {
            $intervalos = $horarioServiceInterface->getAvailableIntervals($date, $medicoId);
        } else {
            $intervalos = null;
        }

        return view('cita.create', ['especialidades' => $especialidades, 'old_medicos' => $old_medicos, 'intervalos' => $intervalos]);
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

        $validator->after(function ($validator) use ($request, $horarioServiceInterface) {

            $date = $request->input('fecha_cita');
            $medicoId = $request->input('medico_id');
            $hora_cita = ($request->input('hora_cita'));

            if ($date && $medicoId && $hora_cita) {
                $inicio = new Carbon($hora_cita);
            } else {
                return;
            }

            if (!$horarioServiceInterface->isAvailableInterval($date, $medicoId, $inicio)) {
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

        if ($validator->fails()) {
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

        return redirect()->route('mis-citas')->with('message', 'Su cita se ha registrado correctamente.');
    }

    public function cancel(Citas $cita, Request $request): RedirectResponse
    {
        if ($request->has('motivo')) {
            $cancelacion = new CitaCancelada();
            $cancelacion->motivo = $request->input('motivo');
            $cancelacion->cancelado_por_id = auth()->id();
            $cita->cancelacion()->save($cancelacion);
        }
        $cita->estado = 'Cancelada';
        $cita->save();

        return redirect()->route('mis-citas')->with('message', 'Su cita se ha cancelado correctamente.');
    }

    public function formcancel(Citas $cita)
    {
        $role = auth()->user()->rol;
        if ($cita->estado == 'Confirmada') {
            return view('cita.cancelar-cita', ['cita' => $cita, 'role' => $role]);
        }

        return redirect()->route('miscitas')->with('message', 'Su cita está cancelado.');
    }

    public function show(Citas $cita): View
    {
        $role = auth()->user()->rol;
        return view('cita.show', ['cita' => $cita, 'role' => $role]);
    }

    public function confirm(Citas $cita): RedirectResponse
    {
        $cita->estado = 'Confirmada';
        $cita->save();

        return redirect()->route('mis-citas')->with('message', 'Su cita se ha confirmada correctamente, esté atento a su fecha de cita.');
    }

    public function destroy(Citas $cita): RedirectResponse
    {
        $cita->delete();

        return redirect()->route('mis-citas')->with('message', 'La cita pendiente se ha eliminado correctamente.');
    }

    /*  public function formaccepted(Citas $cita, Request $request)
    {
        if($request->has('motivo')){
            $cancelacion = new CitaCancelada();
            $cancelacion->motivo = $request->input('motivo');
            $cancelacion->cancelado_por_id = auth()->id();
            $cita->cancelacion()->save($cancelacion);
        }
        $cita->estado = 'Cancelada';
        $cita->save();

        return redirect()->route('mis-citas')->with('message', 'Su cita se ha cancelado correctamente.');
    } */

    public function accepted(Citas $cita)
    {
        $role = auth()->user()->rol;
        if ($role == 'medico' || $role == 'admin') {
            $cita->estado = 'Atendida';
            $cita->save();

            return redirect()->route('mis-citas')->with('message', 'La cita fue atendida satisfactoriamente.');
        } else {
            return redirect()->route('mis-citas')->with('message', 'No tiene permisos para realizar esta acción.');
        }
    }

    //medico
    public function medicoCrearCita(HorarioServiceInterface $horarioServiceInterface)
    {
        $especialidades = Especialidad::all();
        $especialId = old('especialidad_id');
        if ($especialId) {
            $especialidad = Especialidad::find($especialId);
            $old_medicos = $especialidad->users;
        } else {
            $old_medicos = collect();
        }

        $date = old('fecha_cita');
        $medicoId = old('medico_id');
        if ($date && $medicoId) {
            $intervalos = $horarioServiceInterface->getAvailableIntervals($date, $medicoId);
        } else {
            $intervalos = null;
        }
        return view('cita.medico.create', ['especialidades' => $especialidades, 'old_medicos' => $old_medicos, 'intervalos' => $intervalos]);
    }
    
    public function medicoCrearCitaStore(Request $request, HorarioServiceInterface $horarioServiceInterface)
    {
        /* name lastname email telefono direccion dni */
        $rules = [
            'name' => 'required|min:3',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'telefono' => 'required',
            'dni' => 'required|digits:8|unique:users',

            'hora_cita' => 'required',
            'tipo' => 'required',
            'sintomas' => 'required',
            'medico_id' => 'exists:users,id',
            'especialidad_id' => 'exists:especialidad,id',
        ];
        $messages = [
            'name.required' => 'Ingrese el nombre del paciente',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'lastname.required' => 'Ingrese el apellido del paciente',
            'email.required' => 'Ingrese el correo del paciente',
            'email.email' => 'Ingrese un correo válido del paciente',
            'email.unique' => 'El correo ya está registrado, ingrese otro correo válido.',
            'telefono.required' => 'Ingrese el teléfono del paciente',
            'dni.required' => 'Ingrese el D.N.I. del paciente',
            'dni.digits' => 'El DNI debe tener 8 dígitos.',
            'dni.unique' => 'El DNI ya se encuentra registrado.',

            'hora_cita.required' => 'Seleccione una hora válida para su cita.',
            'tipo.required' => 'Seleccione el tipo de consulta que realizará.',
            'sintomas.required' => 'Ingrese los síntomas que presenta.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->after(function ($validator) use ($request, $horarioServiceInterface) {

            $date = $request->input('fecha_cita');
            $medicoId = $request->input('medico_id');
            $hora_cita = ($request->input('hora_cita'));

            if ($date && $medicoId && $hora_cita) {
                $inicio = new Carbon($hora_cita);
            } else {
                return;
            }

            if (!$horarioServiceInterface->isAvailableInterval($date, $medicoId, $inicio)) {
                $validator->errors()->add('available_time', 'La hora seleccionada ya se encuentra reservada por otro paciente.');
            }
        });

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        //Inicio de Transacciones
        DB::transaction(function () use ($request) {
            //Inicio -Registrar nuevo Usuario
            
            $usuario = new User();
            $usuario->name = $request->input('name');
            $usuario->lastname = $request->input('lastname');
            $usuario->email = $request->input('email');
            $usuario->telefono = $request->input('telefono');
            $usuario->dni = $request->input('dni');
            $usuario->rol = 'paciente';
            $usuario->save();

            //Inicio -Registrar nueva Cita        
            $data = $request->only([
                'fecha_cita',
                'hora_cita',
                'tipo',
                'sintomas',
                'medico_id',
                'especialidad_id',
                'estado',
            ]);
            $data['estado'] = 'Reservada';

            $data['paciente_id'] = $usuario->id;

            $carbonTime = Carbon::createFromFormat('g:i A', $data['hora_cita']);
            $data['hora_cita'] = $carbonTime->format('H:i:s');
            
            Citas::create($data);
            //Fin -Registrar nueva Cita
        });
        //Fin de Transacciones

        return redirect()->route('mis-citas')->with('message', 'Su cita se ha registrado correctamente.');
    }

    //Buscar Cita por DNI - Codigo
    public function buscarMiCita(Request $request):view
    {
        $dni = $request->input('dni');
        $codigo = $request->input('codigo_cita');
        $id_user = User::where('dni', $dni)->firstOrFail();
        //dd($id_user->id);
        $micita = Citas::where('paciente_id',$id_user->id)->where('id',$codigo)->get();
        //dd($micita);
        //$micita = User::all();
        //dd($micita);
        return view('busca-mi-cita',['micita' => $micita])->with('active','Detalle de la cita');
    }
}

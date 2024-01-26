<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pacientes = User::pacientes()->latest()->paginate(10);
        return view('paciente.index',['pacientes' => $pacientes]);
    }

    public function create(): View
    {
        return view('paciente.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'dni' => 'required|digits:8|unique:users',
            'direccion' => 'nullable|min:6',
            'telefono' => 'required',
        ];
        $messages = [
            'name.required' => 'El nombre no pueder ser vacio.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'email.required' => 'El correo no pueder ser vacio.',
            'email.email' => 'El correo no tiene un formato válido.',
            'email.unique' => 'El correo ya existe, ingreso otro correo válido.',
            'dni.required' => 'El D.N.I. no pueder ser vacio.',
            'dni.digits' => 'El D.N.I. debe tener 8 dígitos.',
            'dni.unique' => 'El D.N.I. ya está registrado, ingrese otro válido.',
            'direccion.min' => 'La dirección debe tener al menos 6 caracteres.',
            'telefono.required' => 'El teléfono no pueder ser vacio.',
        ];
        $this->validate($request, $rules, $messages);

        User::create(
            $request->only('name','email','dni','direccion','telefono')
            + [
                'rol' => 'paciente',
                'password' => bcrypt($request->input('password'))
            ]
        );

        return redirect()->route('pacientes.index')->with('message', 'Paciente creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id): View
    {
        $paciente = User::pacientes()->findOrFail($id);
        return view('paciente.edit',['paciente' => $paciente]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$id,
            'dni' => 'required|digits:8|unique:users,dni,'.$id,
            'direccion' => 'nullable|min:6',
            'telefono' => 'required',
        ];
        $messages = [
            'name.required' => 'El nombre no pueder ser vacio.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'email.required' => 'El correo no pueder ser vacio.',
            'email.email' => 'El correo no tiene un formato válido.',
            'email.unique' => 'El correo ya existe, ingreso otro correo válido.',
            'dni.required' => 'El D.N.I. no pueder ser vacio.',
            'dni.digits' => 'El D.N.I. debe tener 8 dígitos.',
            'dni.unique' => 'El D.N.I. ya está registrado, ingrese otro válido.',
            'direccion.min' => 'La dirección debe tener al menos 6 caracteres.',
            'telefono.required' => 'El teléfono no pueder ser vacio.',
        ];
        $this->validate($request, $rules, $messages);

        $user = User::pacientes()->findOrFail($id);

        $data = $request->only('name','email','dni','direccion','telefono');

        $password = $request->input('password');

        if($password){
            $data['password'] = bcrypt($password);
        }

        $user->fill($data);

        $user->update();

        return redirect()->route('pacientes.index')->with('message', 'La información del paciente de a actualizado con éxito');
    }

    public function destroy(string $id): RedirectResponse
    {
        $user = User::pacientes()->findOrFail($id);
        $pacienteNombre = $user->name;
        $user->delete();

        return redirect()->route('pacientes.index')->with('message', "El paciente $pacienteNombre se a eliminado con éxito");
    }
}

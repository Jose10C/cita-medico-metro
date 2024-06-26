<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Especialidad;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $medicos = User::medicos()->latest()->paginate(10);
        return view('medico.index',['medicos' => $medicos]);
    }

    public function create(): View
    {
        $especialidades = Especialidad::all();
        return view('medico.create',['especialidades' => $especialidades]);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'dni' => 'required|digits:8|unique:users',
            'direccion' => 'nullable|min:6',
            'telefono' => 'required',
            'especialidades' => 'required',
        ];
        $messages = [
            'name.required' => 'El nombre no pueder ser vacio.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'email.required' => 'El correo no pueder ser vacio.',
            'email.email' => 'El correo no tiene un formato válido.',
            'email.unique' => 'El correo ya está registrado, ingrese otro válido.',
            'dni.required' => 'El D.N.I. no pueder ser vacio.',
            'dni.digits' => 'El D.N.I. debe tener 8 dígitos.',
            'dni.unique' => 'El D.N.I. que ingresó ya está registrado.',
            'direccion.min' => 'La dirección debe tener al menos 6 caracteres.',
            'telefono.required' => 'El teléfono no pueder ser vacio.',
            'especialidades.required' => 'Seleccione una o más especidades del médico.'
        ];
        $this->validate($request, $rules, $messages);

        $user = User::create(
            $request->only('name','email','dni','direccion','telefono')
            + [
                'rol' => 'medico',
                'password' => bcrypt($request->input('password'))
            ]
        );

        $user->especialidades()->attach($request->input('especialidades'));

        return redirect()->route('medicos.index')->with('message', 'Medico creado con éxito');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id): View
    {
        $medico = User::medicos()->findOrFail($id);
        $especialidades = Especialidad::all();
        $especialidad_ids = $medico->especialidades()->pluck('especialidad.id');
        return view('medico.edit',['medico' => $medico, 'especialidades' => $especialidades, 'especialidad_ids' => $especialidad_ids]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$id,
            'dni' => 'required|digits:8|unique:users,dni,'.$id,
            'direccion' => 'nullable|min:6',
            'telefono' => 'required',
            'especialidades' => 'required',
        ];
        $messages = [
            'name.required' => 'El nombre no pueder ser vacio.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'email.required' => 'El correo no pueder ser vacio.',
            'email.email' => 'El correo no tiene un formato válido.',
            'email.unique' => 'El correo ya está registrado, ingrese otro válido.',
            'dni.required' => 'El D.N.I. no pueder ser vacio.',
            'dni.digits' => 'El D.N.I. debe tener 8 dígitos.',
            'dni.unique' => 'El D.N.I. que ingresó ya está registrado.',
            'direccion.min' => 'La dirección debe tener al menos 6 caracteres.',
            'telefono.required' => 'El teléfono no pueder ser vacio.',
            'especialidades.required' => 'Seleccione una o más especidades del médico.'
        ];
        $this->validate($request, $rules, $messages);

        $user = User::medicos()->findOrFail($id);

        $data = $request->only('name','email','dni','direccion','telefono');

        $password = $request->input('password');

        if($password){
            $data['password'] = bcrypt($password);
        }

        $user->fill($data);

        $user->save();
        $user->especialidades()->sync($request->input('especialidades'));

        return redirect()->route('medicos.index')->with('message', 'La información del medico de a actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $user = User::medicos()->findOrFail($id);
        $medicoNombre = $user->name;
        $user->delete();

        return redirect()->route('medicos.index')->with('message', "El medico $medicoNombre se a eliminado con éxito");
    }
}

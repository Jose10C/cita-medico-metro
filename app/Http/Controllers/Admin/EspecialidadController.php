<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Especialidad;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EspecialidadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $especialidades = Especialidad::latest()->paginate(10);
        return view('especialidad.index', ['especialidades' => $especialidades]);
    }

    public function create(): View
    {
        return view('especialidad.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'nombre' => 'required|min:3',
        ];
        $messages = [
            'nombre.required' => 'El nombre no pueder ser vacio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
        ];
        $this->validate($request, $rules, $messages);

        Especialidad::create($request->all());

        return redirect()->route('especialidades.index')->with('message', 'Especialidad creada con éxito');
    }

    public function show(Especialidad $especialidad)
    {
        //
    }

    public function edit(Especialidad $especialidade): View
    {
        return view('especialidad.edit', ['especialidade' => $especialidade]);
    }

    public function update(Request $request, Especialidad $especialidade): RedirectResponse
    {
        $rules = [
            'nombre' => 'required|min:3',
        ];
        $messages = [
            'nombre.required' => 'El nombre no pueder ser vacio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
        ];
        $this->validate($request, $rules, $messages);

        $especialidade->update($request->all());

        return redirect()->route('especialidades.index')->with('message', 'Especialidad actualizada con éxito');
    }

    public function destroy(Especialidad $especialidade): RedirectResponse
    {
        $especialidade->delete();
        return redirect()->route('especialidades.index')->with('message', 'Especialidad eliminada con éxito');
    }
}

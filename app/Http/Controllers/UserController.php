<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(): View
    {
        $user = auth()->user();
        $role = auth()->user()->rol;
        return view('users.profile', compact('user','role'));
    }

    public function update(Request $request): RedirectResponse
    {
        /* {{ strip_tags(Str::limit($user->biografia, 200)) }} */
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->telefono = $request->input('telefono');
        $user->direccion = $request->input('direccion');
        $user->dni = $request->input('dni');
        $user->biografia = $request->input('biografia');
        $user->avatar = $request->input('avatar');
        $user->save();

        return redirect()->route('users.profile.edit')->with('message', 'Información actualizada correctamente.');
    }
}

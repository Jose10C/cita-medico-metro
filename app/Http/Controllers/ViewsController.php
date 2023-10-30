<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ViewsController extends Controller
{
    public function listMedicos(): View
    {
        $medicos = User::medicos()->get();
        return view('index', compact('medicos'));
    }
}

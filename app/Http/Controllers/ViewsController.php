<?php

namespace App\Http\Controllers;

use App\Interfaces\HorarioServiceInterface;
use App\Models\Especialidad;
use App\Models\Noticia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ViewsController extends Controller
{
    public function listMedicos(): View
    {
        $medicos = User::medicos()->get();
        $noticias = Noticia::where('estado', 'PUBLICADO')->latest()->paginate(10);
        return view('index', compact('medicos', 'noticias'));
    }

    //usuario general
    public function userAllReservation(HorarioServiceInterface $horarioServiceInterface)
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
        return view('cita.index', ['especialidades' => $especialidades, 'old_medicos' => $old_medicos, 'intervalos' => $intervalos]);
    }

    //vista publica de las noticias
    public function show(): View
    {
        $noticias = Noticia::where('estado', 'PUBLICADO')->latest()->paginate(10);
        return view('index', compact('noticias'));
    }

    //info nosotros
    public function info_nosotros(): View
    {
        return view('nosotros');
    }

    //todas las noticias
    public function all_show(): View
    {
        $noticias = Noticia::where('estado', 'PUBLICADO')->latest()->paginate(20);
        return view('all_noticias', compact('noticias'));
    }

    //ver noticias por slug
    public function ver_noticias($slug): View
    {
        $noticia = Noticia::where('slug', $slug)->first();
        return view('new', compact('noticia'));
    }

    //detalle de las especialidades
    public function cs_servicios(): View
    {
        return view('servicios');
    }

    //contacto
    public function cs_contacto(): View
    {
        return view('contacto');
    }
}

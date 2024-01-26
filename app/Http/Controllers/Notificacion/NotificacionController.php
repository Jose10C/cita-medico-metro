<?php

namespace App\Http\Controllers\Notificacion;

use App\Http\Controllers\Controller;
use App\Notifications\CitaNotificacion;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class NotificacionController extends Controller
{
    public function send()
    {
        Notification::send($usuarios, new CitaNotificacion($datos));

        broadcast(new CitaNotificacion($datos)); // Emitir el evento
        return redirect()->back();
    }
}

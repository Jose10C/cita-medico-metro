<?php

namespace App\Listeners;

use App\Events\CitaEstadoEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CitaEstadoListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CitaEstadoEvent $event): void
    {
        //
    }
}

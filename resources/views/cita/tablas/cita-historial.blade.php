<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>Espacialidad</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
        @foreach ($citasHistorial as $cita)
        <tr>
            <td>{{$cita->especialidad->nombre}}</td>
            <td>{{$cita->fecha_cita}}</td>
            <td>
                @if($cita->estado == 'Reservada')
                <img src="{{ asset('img/status/pendiente.png') }}" height="80px" alt="Reservada">
                @endif
                @if($cita->estado == 'Confirmada')
                <img src="{{ asset('img/status/confirmada.png') }}" height="80px" alt="Confirmada">
                @endif
                @if($cita->estado == 'Cancelada')
                <img src="{{ asset('img/status/cancelada.png') }}" height="80px" alt="Cancelada">
                @endif
                @if($cita->estado == 'Atendida')
                <img src="{{ asset('img/status/atendida.png') }}" height="80px" alt="Atendida">
                @endif
            </td>
            <td>
                <a href="{{route('cita-show', $cita->id)}}" class="btn btn-sm btn-info">Ver Detalles</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
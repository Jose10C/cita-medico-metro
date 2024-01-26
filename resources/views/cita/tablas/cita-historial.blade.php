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
                <img src="{{ asset('img/status/cita-pendiente.png') }}" width="180px" alt="Reservada">
                @endif
                @if($cita->estado == 'Confirmada')
                <img src="{{ asset('img/status/cita-confirmada.png') }}" width="180px" alt="Confirmada">
                @endif
                @if($cita->estado == 'Cancelada')
                <img src="{{ asset('img/status/cita-cancelado.png') }}" width="180px" alt="Cancelada">
                @endif
                @if($cita->estado == 'Atendida')
                <img src="{{ asset('img/status/cita-atendido.png') }}" width="180px" alt="Atendida">
                @endif
            </td>
            <td>
                <a href="{{route('cita-show', $cita->id)}}" class="btn btn-sm btn-info"><i class="fas fa-minus-circle"></i>Ver</a>
                <a href="{{route('cita-show', $cita->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-minus-circle"></i>Descargar</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $citasHistorial->links() }}
</div>
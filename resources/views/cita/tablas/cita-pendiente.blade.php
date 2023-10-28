<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>Descripción</th>
            <th>Espacialidad</th>
            @if($role == 'paciente')
            <th>Médico</th>
            @elseif($role == 'medico')
            <th>Paciente</th>
            @endif
            <th>Fecha</th>
            <th>Hora</th>
            <th>Tipo</th>
            <th>Opciones</th>
        </tr>
        @foreach ($citasPendientes as $cita)
        <tr>
            <td>{{$cita->id}} - {{$cita->sintomas}}</td>
            <td>{{$cita->especialidad->nombre}}</td>
            @if($role == 'paciente')
            <td>{{$cita->medico->name}}</td>
            @elseif($role == 'medico')
            <td>{{$cita->paciente->name}}</td>
            @endif
            <td>{{$cita->fecha_cita}}</td>
            <td>{{$cita->Scheduled_Time_12}}</td>
            <td>{{$cita->tipo}}</td>
            <td>
                @if($role == 'admin')
                <a href="{{ route('cita-show', $cita->id) }}" class="btn btn-sm btn-info" title="Ver Cita"><i class="ni fas fa-info-circle"></i></a>
                @endif
                @if($role == 'medico' || $role == 'admin')
                <form action="{{ route('confirmar-cita', $cita->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-success" title="Confirmar Cita"><i class="ni fas fa-thumbs-up"></i></button>
                </form>
                @endif
                <button type="button" class="btn btn-sm btn-danger d-inline-block" data-userid="{{ $cita->id }}" onclick="confirmacion(this.getAttribute('data-userid'));" title="Cancelar Cita"><i class="ni fas fa-trash"></i></button>
                <form action="{{ route('eliminar-cita', $cita->id) }}" method="POST" id="cancelarCita{{ $cita->id }}">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
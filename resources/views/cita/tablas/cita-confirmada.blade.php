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
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
        @foreach ($citasConfirmadas as $cita)
        <tr>
            <td>{{$cita->sintomas}}</td>
            <td>{{$cita->especialidad->nombre}}</td>
            @if($role == 'paciente')
            <td>{{$cita->medico->name}}</td>
            @elseif($role == 'medico')
            <td>{{$cita->paciente->name}}</td>
            @endif
            <td>{{$cita->fecha_cita}}</td>
            <td>{{$cita->Scheduled_Time_12}}</td>
            <td>{{$cita->tipo}}</td>
            <td>{{$cita->estado}}</td>
            <td>
                @if($role == 'admin')
                <a href="{{ route('cita-show', $cita->id) }}" class="btn btn-sm btn-info d-inline-block" title="Ver Cita"><i class="ni fas fa-info-circle"></i></a>
                @endif
                @if($role == 'medico' || $role == 'admin')
                <form action="{{ route('atendido-cita', $cita->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-success" title="Atentido"><i class="ni fas fa-check-circle"></i></button>
                </form>
                @endif
                <a href="{{ route('confirmar-cancelar-cita', $cita->id) }}" class="btn btn-sm btn-danger d-inline-block" title="Cancelar Cita"><i class="fas fa-minus-circle"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
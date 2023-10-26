<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>Descripción</th>
            <th>Espacialidad</th>
            <th>Médico</th>
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
            <td>{{$cita->medico->name}}</td>
            <td>{{$cita->fecha_cita}}</td>
            <td>{{$cita->Scheduled_Time_12}}</td>
            <td>{{$cita->tipo}}</td>
            <td>{{$cita->estado}}</td>
            <td>
                <a href="{{ route('confirmar-cancelar-cita', $cita->id) }}" class="btn btn-sm btn-danger">Cancelar</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
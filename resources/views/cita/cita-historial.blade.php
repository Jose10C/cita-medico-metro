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
            <td>{{$cita->estado}}</td>
            <td>
                <a href="{{route('cita-show', $cita->id)}}" class="btn btn-sm btn-info">Ver Detalles</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
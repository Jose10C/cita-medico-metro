<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>Descripción</th>
            <th>Espacialidad</th>
            <th>Médico</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Tipo</th>
            <th>Opciones</th>
        </tr>
        @foreach ($citasPendientes as $cita)
        <tr>
            <td>{{$cita->sintomas}}</td>
            <td>{{$cita->especialidad->nombre}}</td>
            <td>{{$cita->medico->name}}</td>
            <td>{{$cita->fecha_cita}}</td>
            <td>{{$cita->Scheduled_Time_12}}</td>
            <td>{{$cita->tipo}}</td>
            <td>
                <button type="button" class="btn btn-sm btn-danger" onclick="confirmacion();">Cancelar</button>
                <form action="{{ route('cancelar-cita', $cita->id) }}" method="POST" id="cancelarCita">
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
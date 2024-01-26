
<div>
    @foreach ($micita as $cita)
    <div>
        <h6>{{$cita->id}}</h6>
        <h6>{{$cita->fecha_cita}}</h6>
        <h6>{{$cita->hora_cita}}</h6>
        <h6>{{$cita->tipo}}</h6>
        <h6>{{$cita->sintomas}}</h6>
        <h6>{{$cita->paciente_id}}</h6>
        <h6>{{$cita->medico_id}}</h6>
        <h6>{{$cita->especialidad_id}}</h6>
        <h6>{{$cita->updated_at}}</h6>
        <h6>{{$cita->estado}}</h6>
    </div>
    @endforeach
    <h6>Pie de pagina</h6>
    
    {!! QrCode::style('round')->gradient(255,0,150,50,20,150,'radial')->size(250)->generate('https://jhosedev.com','../public/img/codeqr/qrcode-001.svg'); !!}
</div>
<h6>fuera del section</h6>
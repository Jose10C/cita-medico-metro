@extends('layouts.app')

@section('title', 'Crear Cita Rápida')

@section('content')

<div class="section-header">
    <h1>@yield('title','Bienvenidos')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('mis-citas') }}">Mis Citas</a></div>
        <div class="breadcrumb-item">Nuevo</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Crear Cita Rápida</h4>
                    <div class="card-header-form">
                        <a href="{{ route('mis-citas') }}" class="btn btn-icon icon-left btn-dark"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </div>
                <!-- name  lastname  email  telefono    direccion dni    -->
                <div class="card-body p-0">
                    <div class="card">
                        <form action="{{ route('medico-crear-cita-store') }}" method="POST" class="needs-validation" novalidate="">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="name">{{ __('Nombres') }}</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required="" autocomplete="name" autofocus>
                                        <div class="invalid-feedback">
                                            Ingrese el nombre del paciente.
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="lastname">{{ __('Apellidos') }}</label>
                                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required="">
                                        <div class="invalid-feedback">
                                            Ingrese el apellido del paciente.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="email">{{ __('Correo') }}</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="" autocomplete="email">
                                        <div class="invalid-feedback">
                                            Ingrese un correo válido del paciente.
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Telefono</label>
                                        <input name="telefono" type="number" class="form-control" value="{{ old('telefono') }}" required="" maxlength="9" autocomplete="telefono">
                                        <div class="invalid-feedback">
                                            Ingrese el teléfono del paciente.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Dirección</label>
                                        <input name="direccion" type="text" class="form-control" value="{{ old('direccion') }}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>D.N.I.</label>
                                        <input name="dni" type="text" class="form-control" maxlength="8" required="" value="{{ old('dni') }}" maxlength="8">
                                        <div class="invalid-feedback">
                                            Ingrese el D.N.I. del paciente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="especialidad_id" class="col-sm-3 col-form-label">Especialidad</label>
                                    <div class="col-sm-9">
                                        <select name="especialidad_id" id="especialidad" class="form-control select2" required="">
                                            <option value="">-Seleccionar Especialidad</option>
                                            @foreach ($especialidades as $especialidad)
                                            <option value="{{ $especialidad->id }}" @selected(old('especialidad_id')==$especialidad->id)> {{ $especialidad->nombre }} </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            No se olvide de seleccionar una especialidad.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="medico" class="col-sm-3 col-form-label">Médico</label>
                                    <div class="col-sm-9">
                                        <select name="medico_id" id="medico" class="form-control select2" required="">
                                            <option value="">-Seleccionar Médico</option>
                                            @foreach ($old_medicos as $medico)
                                            <option value="{{ $medico->id }}" @selected(old('medico_id')==$medico->id)> {{ $medico->name }} </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            No se olvide de seleccionar un(a) médico.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fecha_cita" class="col-sm-3 col-form-label">Fecha</label>
                                    <div class="col-sm-9">
                                        <input class="form-control datepicker" type="text" name="fecha_cita" id="date" value="{{ old('fecha_cita'), date('Y-m-d') }}" data-date-format="yyyy-mm-dd" data-date-start-date="{{ date('Y-m-d') }}" data-date-end-date="+30d" required="">
                                        <div class="invalid-feedback">
                                            Seleccionar una fecha para su cita.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hora_cita" class="col-sm-3 col-form-label">Hora de Atención</label>
                                    <div class="col-sm-9">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="m-3" id="tituloManana"></h4>
                                                    <div id="horasManana">
                                                        @if($intervalos)
                                                        @foreach($intervalos['manana'] as $key => $intervalo)
                                                        <div class="selectgroup selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="hora_cita" id="intervaloManana{{ $key }}" value="{{ $intervalo['inicio'] }}" class="selectgroup-input">
                                                                <span class="selectgroup-button selectgroup-button-icon" for="intervaloManana{{ $key }}"><i class="fa fa-circle"></i> {{ $intervalo['inicio'] }} - {{ $intervalo['fin'] }} </span>
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                        @else
                                                        <mark>
                                                            <small class="text-warning display-5">
                                                                *Seleccione una especialidad, médico y la fecha para ver las horas disponibles.
                                                            </small>
                                                        </mark>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h4 class="m-3" id="tituloTarde"></h4>
                                                    <div id="horasTarde">
                                                        @if($intervalos)
                                                        @foreach($intervalos['tarde'] as $key => $intervalo)
                                                        <div class="selectgroup selectgroup-pills">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="hora_cita" id="intervaloTarde{{ $key }}" value="{{ $intervalo['inicio'] }}" class="selectgroup-input">
                                                                <span class="selectgroup-button selectgroup-button-icon" for="intervaloTarde{{ $key }}"><i class="fa fa-circle"></i> {{ $intervalo['inicio'] }} - {{ $intervalo['fin'] }} </span>
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telefono" class="col-sm-3 col-form-label">Tipo de Consulta</label>
                                    <div class="col-sm-9">
                                        <div class="selectgroup w-100">
                                            <label for="tipo1" class="selectgroup-item">
                                                <input type="radio" name="tipo" id="tipo1" class="selectgroup-input" value="Consultas" @checked(old('tipo')=='Consultas' )>
                                                <span class="selectgroup-button">Consultas</span>
                                            </label>
                                            <label for="tipo2" class="selectgroup-item">
                                                <input type="radio" name="tipo" id="tipo2" class="selectgroup-input" value="Examen" @checked(old('tipo')=='Examen' )>
                                                <span class="selectgroup-button">Examen</span>
                                            </label>
                                            <label for="tipo3" class="selectgroup-item">
                                                <input type="radio" name="tipo" id="tipo3" class="selectgroup-input" value="Operación" @checked(old('tipo')=='Operación' )>
                                                <span class="selectgroup-button">Operación</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sintomas" class="col-sm-3 col-form-label">Síntomas</label>
                                    <div class="col-sm-9">
                                        <textarea name="sintomas" id="sintomas" class="form-control" cols="30" rows="10" placeholder="Describa los síntomas que presenta..." required="">{{ old('sintomas') }}</textarea>
                                        <div class="invalid-feedback">
                                            Es nesesario que escriba los síntomas que presenta.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('modules/izitoast/js/iziToast.min.js') }}"></script>

<script src="{{ asset('js/page/modules-toastr.js') }}"></script>

<script src="{{ asset('js/citas/create.js') }}"></script>

@if ($errors->any())
@foreach ($errors->all() as $error)
<script>
    $(document).ready(function() {
        iziToast.error({
            title: 'Error!',
            message: "{{ $error }}",
            position: 'topRight',
            icon: 'fa fa-ban',
        });
    });
</script>
@endforeach
@endif

@if (session('message'))
<script>
    $(document).ready(function() {
        iziToast.success({
            title: 'Muy Bien!',
            message: "{{session('message')}}",
            position: 'topRight',
            icon: 'fa fa-check-circle'
        });
    });
</script>
@endif

@endsection

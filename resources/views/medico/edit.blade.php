@extends('layouts.app')

@section('title', 'Editar')

@section('content')


<div class="section-header">
    <h1>@yield('title','Bienvenidos')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('especialidades.index') }}">Medicos</a></div>
        <div class="breadcrumb-item">Editar</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editar especialidad</h4>
                    <div class="card-header-form">
                        <a href="{{ route('medicos.index') }}" class="btn btn-icon icon-left btn-danger"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="card">
                        <form action="{{ route('medicos.update', $medico) }}" method="POST" class="needs-validation" novalidate="">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Nombre</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="name" name="name" class="form-control" required="" minlength="3" value="{{ old('name',$medico->name) }}">
                                        <div class="invalid-feedback">
                                            El nombre no puede ser vacio, al menos 3 caracteres.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="especialidades" class="col-sm-3 col-form-label">Especialidades</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" name="especialidades[]" id="especialidades" multiple="">
                                            @foreach($especialidades as $especialidad)
                                            <option value="{{ $especialidad->id }}">{{ $especialidad->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Correo</label>
                                    <div class="col-sm-9">
                                        <input type="email" id="email" name="email" class="form-control" required="" value="{{ old('email',$medico->email) }}">
                                        <div class="invalid-feedback">
                                            Debe ingresar un correo válido.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dni" class="col-sm-3 col-form-label">Cedula</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="dni" name="dni" class="form-control" required="" value="{{ old('dni',$medico->dni) }}">
                                        <div class="invalid-feedback">
                                            Debe ingresar una cedula válida.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="direccion" class="col-sm-3 col-form-label">Dirección</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="direccion" name="direccion" class="form-control" value="{{ old('direccion',$medico->direccion) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telefono" class="col-sm-3 col-form-label">Teléfono</label>
                                    <div class="col-sm-9">
                                        <input type="number" id="telefono" name="telefono" class="form-control" required="" value="{{ old('telefono',$medico->telefono) }}">
                                        <div class="invalid-feedback">
                                            Debe ingresar su telefono.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label">Contraseña</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="password" name="password" class="form-control">
                                        <small class="text-warning">*Solo llena este campo si desea cambiar su contraseña</small>
                                        <div class="invalid-feedback">
                                            Debe ingresar su nueva contraseña.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery -->
<script src="{{ asset('modules/jquery.min.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('modules/izitoast/js/iziToast.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('js/page/modules-toastr.js') }}"></script>

<script>
    console.log(<?php echo json_encode($especialidad_ids); ?>);
    $(document).ready(function() {
        $('#especialidades').val(<?php echo json_encode($especialidad_ids); ?>);
    });
</script>

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



<script>
    $(document).ready(function() {
        // Manejar el cambio en el selector
        $("#especialidades").on("change", function() {
            // Obtener las opciones seleccionadas
            var seleccionadas = [];
            $("#especialidades option:selected").each(function() {
                seleccionadas.push($(this).text());
            });

            // Mostrar las especialidades seleccionadas en el elemento "lista-especialidades"
            $("#lista-especialidades").empty();
            $.each(seleccionadas, function(index, value) {
                $("#lista-especialidades").append("<li>" + value + "</li>");
            });
        });
    });
</script>

@endsection
@extends('layouts.app')

@section('title', 'Editar')

@section('content')


<div class="section-header">
    <h1>@yield('title','Bienvenidos')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('especialidades.index') }}">Especialidades</a></div>
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
                        <a href="{{ route('especialidades.index') }}" class="btn btn-icon icon-left btn-danger"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="card">
                        <form action="{{ route('especialidades.update', $especialidade) }}" method="POST" class="needs-validation" novalidate="">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nombre" name="nombre" class="form-control" required="" minlength="3" value="{{ old('nombre',$especialidade->nombre) }}">
                                        <div class="invalid-feedback">
                                            El nombre no puede ser vacio, al menos 3 caracteres.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row">
                                    <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="descripcion" name="descripcion" required="">{{ old('descripcion', $especialidade->descripcion) }}</textarea>
                                        <div class="invalid-feedback">
                                            Debe agregar una breve descripción.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group mb-0 row">
                                    <label for="estado" class="col-sm-3 col-form-label">Estado</label>
                                    <div class="col-sm-9">
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="estado" id="estado" value="0" class="selectgroup-input" @checked(0==$especialidade->estado)>
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-sun"></i></span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="estado" id="estado" value="1" class="selectgroup-input" @checked(1==$especialidade->estado)>
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-moon"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
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

@endsection
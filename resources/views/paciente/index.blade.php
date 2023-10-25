@extends('layouts.app')

@section('title', 'Paciente')

@section('content')

<div class="section-header">
    <h1>@yield('title','Bienvenidos')</h1>
    <div class="section-header-button">
        <a href="{{ route('pacientes.create') }}" class="btn btn-icon icon-left btn-primary"> Agregar Nuevo</a>
    </div>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Paciente</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Lista de Pacientes</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Cedula</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach ($pacientes as $paciente)
                            <tr>
                                <td>{{$paciente->name}}</td>
                                <td>{{$paciente->email}}</td>
                                <td>{{$paciente->dni}}</td>
                                <td>
                                    <a href="{{ route('pacientes.edit', $paciente) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <button type="button" class="btn btn-sm btn-danger" onclick="confirmacion();">Eliminar</button>
                                    <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" id="eliminarData">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $pacientes->links() }}
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

<script>
    function confirmacion() {
        $(document).ready(function() {
            iziToast.error({
                theme: 'info',
                icon: 'fa fa-question-circle',
                title: 'Confirmación',
                message: '¿Estás seguro de que deseas eliminar este registro?',
                position: 'topCenter',
                progressBarColor: 'rgba(255, 0, 0, 0.4)',
                buttons: [
                    ['<button><b>Sí</b></button>', function(instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast);
                        document.querySelector('#eliminarData').submit();
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast);
                    }, true],
                    ['<button>No</button>', function(instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast);
                    }]
                ]
            });
        });
    }
</script>

@endsection